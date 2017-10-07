<div class="l_side_content">
  <div class="l_side_notice">
    <div class="l_side_notice_title">運営からのお知らせ</div>
    <div class="l_side_notice_body">
      <ul>
        <?php query_posts("category_name=info&showposts=10"); ?>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <li>
            <div class="l_side_notice_body_d"><?php the_time('y/m/d'); ?></div>
            <div class="l_side_notice_body_t">
              <?php
              if(mb_strlen($post->post_content, 'UTF-8')>22){
                $title= mb_substr($post->post_content, 0, 22, 'UTF-8');
                echo $title.'…';
              }else{
                echo $post->post_content;
              }
              ?>
            </div>
          </li>
        <?php endwhile; endif; ?>
      </ul>
    </div>
  </div>
</div>
