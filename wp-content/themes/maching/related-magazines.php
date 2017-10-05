<?php
//カテゴリ情報から関連記事を10個ランダムに呼び出す
$categories = get_the_category($post->ID);
$category_ID = array();
foreach($categories as $category):
  array_push( $category_ID, $category -> cat_ID);
endforeach ;
$args = array(
  'post__not_in' => array($post -> ID),
  'posts_per_page'=> 10,
  'category__in' => $category_ID,
  'orderby' => 'rand',
);
$query = new WP_Query($args); ?>
    <div class="col-xs-12">
      <?php if( $query -> have_posts() ): ?>
      <?php while ($query -> have_posts()) : $query -> the_post(); ?>
        <div class="contents_list col-xs-6 col-md-3">
          <a href="<?php the_permalink(); ?>">
            <figure class="snip1212">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
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
<br style="clear:both;">
