<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage shinbun
 * @since shinbun 1.0
 */

get_header(); ?>

<!-- <%# main_contents %> -->
  <div class="container single_container">
    <div class="breadcrumb_list">
      <?php breadcrumbs(); ?>
    </div>
    <div class="title_area">
      <p class="en_title">event</p>
      <p class="ja_title">/地域のイベント</p>
    </div>

    <div class="col-xs-12">
      <div class="border single_border">
      </div>
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="event_text col-xs-12">
          <h2><?php echo mb_substr($post->post_title, 0, 100, 'UTF-8'); ?></h2>
        </div>
        <div class="event_text_img_shop col-xs-6">
          <?php
          $files = get_post_meta($post->ID, '_thumbnail_id', true);
          $file = wp_get_attachment_url($files);
          ?>
          <a class="hoge" href="<?php echo clean_url($file); ?>" rel="lightbox" title="">
          <?php if(has_post_thumbnail()): ?>
          <p class="thumb"><?php the_post_thumbnail(); ?></p>
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/no_image400_white2.png" alt="no image" width="200" height="200">
          <?php endif; ?>
          </a>
        </div>
        <div class="col-xs-6">
        </div>
        <div class="event_text col-xs-12">
          <div class="border">
          </div>
          <div class="tags_area">
            <p><?php the_tags('タグ: #',' #'); ?></p>
          </div>
          <p>
            <?php the_content(); ?>
          </p>
        <?php endwhile; else: ?>
          <p><?php _e('記事がありません。'); ?></p>
        <?php endif; ?>
      </div>
      <div class="link_event col-xs-12">
        <a href="<?php echo esc_url( get_category_link( get_cat_ID( '地域のイベント' ))) ?>">>>>> eventへ戻る</a>
      </div>
    </div>

    <div class="border col-xs-12">
    </div>

    <div class="row row-eq-height col-xs-12">
      <div class="event_sidebar">
        <div id="related-entries">
          <p class="sidebar_category">■他のイベント</p>
          <?php
            $metakey = 'イベント日'; //カスタムフィールドで設定した名前
            $metatoday = date( "Y/m/d" ); //設定した日付の書式

            $args = array(
              'meta_key' => $metakey,
              'meta_value' => $metatoday,
              'meta_compare' => '>=',
              'orderby' => 'meta_value',
              'order' => 'ASC',
              'type' => 'DATE',
              //今表示している投稿を除外
              'post__not_in' => array($post->ID),
              );
            $the_query = new WP_Query( $args );
          ?>
              <div class="col-xs-12">
          <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="contents_list col-xs-6 col-md-3">
                  <a href="<?php the_permalink(); ?>">
                    <figure class="snip1212">
                      <div class="border_items">
                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail(); ?>
                      </div>
                        <?php else: ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/img/no_image400_white2.png" alt="no image">
                        <?php endif; ?>
                      <figcaption>
                        <h2>
                         <?php
                         if(mb_strlen($post->post_title, 'UTF-8')>22){
                           $title= mb_substr($post->post_title, 0, 22, 'UTF-8');
                           echo $title.'…';
                         }else{
                           echo $post->post_title;
                         }
                         ?>
                        </h2>
                      <div class="related_l">
                       <?php the_excerpt(); ?>
                      </div>
                      <div class="related_m">
                       <?php the_excerpt(); ?>
                      </div>
                      <div class="related_s">
                        <?php the_excerpt(); ?>
                      </div>
                    </figcaption>
                  </figure>
                </a>
              </div>
              <?php endwhile; else: ?>
                <?php _e('記事がありません。'); ?>
                <?php
                  endif;
                  wp_reset_postdata();
                ?>
              <div class="pagenation col-xs-12">
                <?php wp_pagenavi(); ?>
              </div>
            </div>
        </div>
      </div>

      <div class="event_sidebar_s col-xs-12">
        <p class="sidebar_category col-xs-12">■カテゴリー</p>
        <ul>
          <?php wp_list_categories('child_of=2&title_li='); ?>
        </ul>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>
