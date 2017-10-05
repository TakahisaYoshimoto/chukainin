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
      <p class="en_title">shop</p>
      <p class="ja_title">/地域のお店</p>
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
          <a href="<?php echo clean_url($file); ?>" data-lightbox="image1">
          <?php if(has_post_thumbnail()): ?>
          <?php the_post_thumbnail(); ?>
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
              <?php the_content(); ?>
          <?php endwhile; else: ?>
            <p><?php _e('記事がありません。'); ?></p>
          <?php endif; ?>
        </div>
        <div class="link_event col-xs-12">
          <a href="<?php echo esc_url( get_category_link( get_cat_ID( '地域のお店' ))) ?>">>>>> shopへ戻る</a>
        </div>
      </div>
    <div class="border col-xs-12">
    </div>

    <div class="row row-eq-height col-xs-12">
      <div class="event_sidebar col-xs-12">
        <div id="related-entries">
          <p class="sidebar_category">■他のお店</p>
          <?php include( TEMPLATEPATH . '/related-entries.php' ); ?>
        </div>
      </div>

      <div class="event_sidebar_s col-xs-12">
        <p class="sidebar_category">■カテゴリー</p>
        <ul>
          <?php wp_list_categories('child_of=4&title_li='); ?>
        </ul>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>
