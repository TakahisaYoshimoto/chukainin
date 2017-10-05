<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage shinbun
 * @since shinbun 1.0
 */

get_header(); ?>

  <div class="container single_container">
    <div class="breadcrumb_list">
      <?php breadcrumbs(); ?>
    </div>
    <div class="title_area">
      <p class="en_title">magagine</p>
      <p class="ja_title">/歴史</p>
    </div>

    <div class="col-xs-12">
      <p class="single_title"><?php echo mb_substr($post->post_title, 0, 1000); ?></p>
      <p class="the_time_single">
        投稿日:<?php the_time('y/m/d'); ?>
      </p>

      <div class="border">
      </div>
      <br>
      <div class="single_content">
        <p>
        <?php echo mb_substr($post->post_content, 0, 20000); ?>
        </p>
      </div>
    </div>

    <div class="link_event col-xs-12">
      <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'マガジン' ))) ?>">>>>> magazineへ戻る</a>
    </div>

    <div class="border col-xs-12">
    </div>

    <div class="event_sidebar col-xs-12">
      <p class="sidebar_category col-xs-12">■関連記事</p>
        <?php include( TEMPLATEPATH . '/related-entries.php' ); ?>
    </div>

    <div class="event_sidebar_s col-xs-12">
      <p class="sidebar_category">■カテゴリー</p>
      <ul>
        <?php wp_list_categories('child_of=3&title_li='); ?>
      </ul>
    </div>
  </div>

  <?php get_footer(); ?>
