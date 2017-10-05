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
  <div class="container">
    <div class="breadcrumb_list">
      <?php breadcrumbs(); ?>
    </div>
    <div class="title_area">
      <p class="en_title">event</p>
      <p class="ja_title">/地域のイベント</p>
      <div class="keywords_select">
        <form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
          <?php
          $cat_id = get_cat_id('地域のイベント');
          $args = array(
            'child_of' => $cat_id
          );
          $categories = get_categories($args);
          foreach($categories as $category) :
          ?>
            <label class="checker">
              <input class="check_default" type="checkbox" name="cat" value="<?php echo $category->term_id; ?>">
                <span class="check"></span>
                <p><?php echo $category->name; ?></p>
            </label>
          <?php endforeach; ?>
          <input class="search_botton" type="submit" style="color: rgb(137,125,87); margin-left:15px;" value="検索" />
        </form>
      </div>
    </div>

    <div class="col-xs-12">
      <div class="col-md-9 col-xs-12">
        <p class="event_time">これからのイベント</p>
        <div class="border_event">
        </div>
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
            );
          $the_query = new WP_Query( $args );
        ?>
        <?php if ( $the_query->have_posts() ) : ?>
             <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
               <a href="<?php the_permalink(); ?>">
                 <div class="each_container co-xs-12">
                   <div class="event_text col-xs-8">
                     <h2>
                       <?php the_title(); ?>
                     </h2>
                     <div class="cat_the_content">
                       <?php the_excerpt(); ?>
                     </div>
                   </div>
                   <div class="event_text_img col-xs-4">
                     <?php if (has_post_thumbnail()) : ?>
                       <?php the_post_thumbnail(); ?>
                     <?php else: ?>
                       <img src="<?php echo get_template_directory_uri(); ?>/img/no_image400_white.png" alt="no image" width="200" height="200">
                     <?php endif; ?>
                   </div>
                   <div class="col-xs-12">
                     <div class="border_event">
                     </div>
                   </div>
                 </div>
               </a>
        <?php endwhile; else: ?>
          <p class="no_article"><?php _e('記事がありません。'); ?></p>
        <?php endif; ?>
      </div>
      <div class="pagenation col-xs-12">
        <?php wp_pagenavi(); ?>
      </div>


      <div class="col-md-3 col-xs-12">
        <p class="event_time">過去のイベント</p>
        <div class="border_event">
        </div>
        <?php
          $metakey = 'イベント日'; //カスタムフィールドで設定した名前
          $metatoday = date( "Y/m/d" ); //設定した日付の書式

          $args = array(
            'meta_key' => $metakey,
            'meta_value' => $metatoday,
            'meta_compare' => '<',
            'orderby' => 'meta_value',
            'order' => 'DESC',
            'type' => 'DATE',
            );
          $old_query = new WP_Query( $args );
        ?>

        <?php if ( $old_query->have_posts() ) : ?>
        <?php while ( $old_query->have_posts() ) : $old_query->the_post(); ?>
          <div class="old_event col-xs-12">
            <a href="<?php the_permalink(); ?>">
              <li id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="list-style:none;">
              <span class="the-date"><?php echo get_post_meta( get_the_ID() , 'イベント日' ,true); ?></span></br><a class="archive-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </li>
            </a>
          </div>
        <?php endwhile; else: ?>
          <p class="no_article"><?php _e('記事がありません。'); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>
