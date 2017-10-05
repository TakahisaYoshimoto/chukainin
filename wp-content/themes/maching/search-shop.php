<?php get_header(); ?>

<div class="container">
  <div class="breadcrumb_list">
    <?php breadcrumbs(); ?>
  </div>
  <div class="search_result">
    <p class="search_category">
      <?php
        $cats = get_the_category();
        foreach($cats as $cat):
        if($cat->parent) echo $cat->cat_name . ' ';
        endforeach;
      ?>
    </p>
    <p class="search_num">
      の検索結果 : <?php echo $wp_query->found_posts; ?>件
    </p>
  </div>
  <!-- 投稿情報 loop -->
  <div class="col-xs-12">
    <div class="col-sm-9 col-xs-12">
      <div class="border">
      </div>
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <div class="each_container co-xs-12">
            <div class="event_text col-xs-7">
              <p><?php the_time('y/m/d'); ?></p>
              <h2>
                <?php
                  if(mb_strlen($post->post_title, 'UTF-8')>22){
                    $content= mb_substr(strip_tags($post->post_title), 0, 22, 'UTF-8');
                    echo $content.'…';
                  }else{
                    echo strip_tags($post->post_title);
                  }
                ?>
              </h2>
              <p><?php the_excerpt(); ?></p>
            </div>
            <div class="event_text_img col-xs-5">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/no_image400_white2.png" alt="no image" width="200" height="200">
              <?php endif; ?>
            </div>
          </div>
        </a>
        <div class="border">
        </div>
      <?php endwhile; else: ?>
        <?php _e('記事がありません。'); ?>
      <?php endif; ?>
    </div>
    <div class="event_sidebar col-sm-3 col-xs-12">
      <div class="border">
      </div>
      <h3>Archive</h3>
      <?php $cat_id = get_cat_id('地域のイベント'); ?>
      <ul><?php wp_get_archives( 'type=monthly&limit=12&cat=' . $cat_id ); ?></ul>
    </div>
  </div>
  <div class="pagenation col-xs-12">
    <?php wp_pagenavi(); ?>
  </div>
</div>

<?php get_footer(); ?>
