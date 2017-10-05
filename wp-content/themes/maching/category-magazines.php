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
    <p class="en_title">magazine</p>
    <p class="ja_title">/ミニコミ</p>
    <div class="keywords_select">
      <form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
        <?php
        $cat_id = get_cat_id('ミニコミ');
        $args = array(
          'child_of' => 3
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
    <?php query_posts("cat=3&showposts=8"); ?>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="new_magazines col-xs-6 col-md-3">
        <a href="<?php the_permalink(); ?>">
          <figure class="snip1212">
            <div class="border_items_zero">
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
              <?php the_excerpt(); ?>
            </figcaption>
          </figure>
        </a>
      </div>
    <?php endwhile; else: ?>
      <?php _e('記事がありません。'); ?>
    <?php endif; ?>
    <div class="pagenation col-xs-12">
      <?php wp_pagenavi(); ?>
    </div>
  </div>
  <div class="title_area english_lesson">
    <p class="en_title">magazine</p>
    <p class="ja_title">/英語</p>
  </div>
  <div class="row">
  <div class="col-xs-12">
    <?php query_posts("cat=35&showposts=8"); ?>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="new_magazines col-xs-6 col-md-3">
        <a href="<?php the_permalink(); ?>">
          <figure class="snip1212">
            <div class="border_items_zero">
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
              <?php the_excerpt(); ?>
            </figcaption>
          </figure>
        </a>
      </div>
    <?php endwhile; else: ?>
      <?php _e('記事がありません。'); ?>
    <?php endif; ?>
    <div class="pagenation col-xs-12">
      <?php wp_pagenavi(); ?>
    </div>
</div>
</div>


</div>

    <?php get_footer(); ?>
