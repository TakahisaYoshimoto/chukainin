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
      <?php breadcrumbs(); ?></p>
    </div>
    <div class="title_area">
      <p class="en_title">shoping</p>
      <p class="ja_title">/お買い物</p>
    </div>
    <div class="col-xs-12">
      <div class="border single_border">
      </div>

      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="event_text_img_shop col-xs-6">
          <?php
          $files = get_post_meta($post->ID, '_thumbnail_id', true);
          $file = wp_get_attachment_url($files);
          ?>
          <a href="<?php echo clean_url($file); ?>" data-lightbox="image1">
          <?php if(has_post_thumbnail()): ?>
          <?php the_post_thumbnail(); ?>
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/no_image400_white2.png" alt="no image" width="200" height="200">
          <?php endif; ?>
          </a>
        </div>
        <div class="application_btn col-xs-6">
          <a href="<?php echo get_template_directory_uri(); ?>/img/商品申込書.pdf">
            <button type="button" class="btn btn-default">FAXで申込</button>
          </a>
          <a class="hidden-xs hidden-sm" href="<?php echo get_permalink( get_page_by_path('会社案内') ->ID ); ?>">
            <button type="button" class="btn btn-default btn_last_child">お問い合わせはこちら</button>
          </a>
          <a class="hidden-md hidden-lg" href="tel:0583282010"><button type="button" class="btn btn-default btn_last_child">お問い合わせはこちら</button></a>
        </div>

        <div class="event_text col-xs-12">
          <h2><?php echo mb_substr($post->post_title, 0, 100, 'UTF-8'); ?></h2>
        </div>
        <div class="event_text col-xs-12">
          <div class="border">
          </div>
          <div class="tags_area">
            <p><?php the_tags('タグ: #',' #'); ?></p>
          </div>
            <?php the_content(); ?>
          <?php endwhile; else: ?>
            <p><?php _e('記事がありません。'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    <div class="link_event col-xs-12">
      <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'お買い物' ))) ?>">>>>> shoppingへ戻る</a>
    </div>

    <div class="border col-xs-12">
    </div>

    <div class="row row-eq-height col-xs-12">
      <div class="event_sidebar col-xs-12">
        <div id="related-entries">
          <p class="sidebar_category">■関連商品</p>
          <?php include( TEMPLATEPATH . '/related-entries.php' ); ?>
        </div>
      </div>

      <div class="event_sidebar_s col-xs-12">
        <p class="sidebar_category">■カテゴリー</p>
        <ul>
          <?php wp_list_categories('child_of=5&title_li='); ?>
        </ul>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>
