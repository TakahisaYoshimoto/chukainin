<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<?php if(is_page('運営会社')): ?>
		<div class="container">
			<p>
				<?php
					$page_info = get_page_by_path('運営会社');
					$page = get_post($page_info);
					echo $page->post_content;
				?>
			</p>
		</div>
	<?php elseif(is_page('利用規約')): ?>
		<div class="container">
			<p>
				<?php
					$page_info = get_page_by_path('利用規約');
					$page = get_post($page_info);
					echo $page->post_content;
				?>
			</p>
		</div>
	<?php elseif(is_page('プライバシーポリシー')): ?>
		<div class="container">
			<p>
				<?php
					$page_info = get_page_by_path('プライバシーポリシー');
					$page = get_post($page_info);
					echo $page->post_content;
				?>
			</p>
		</div>
	<?php elseif(is_page('特定商取引法に基づく表記')): ?>
		<div class="container">
			<p>
				<?php
					$page_info = get_page_by_path('特定商取引法に基づく表記');
					$page = get_post($page_info);
					echo $page->post_content;
				?>
			</p>
		</div>
	<?php elseif(is_page('よくある質問')): ?>
		<div class="container">
			<p>
				<?php
					$page_info = get_page_by_path('よくある質問');
					$page = get_post($page_info);
					echo $page->post_content;
				?>
			</p>
		</div>
	<?php elseif(is_page('お問い合わせ')): ?>
		<div class="container">
			<p>
				<?php
					$page_info = get_page_by_path('お問い合わせ');
					$page = get_post($page_info);
					echo $page->post_content;
				?>
			</p>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>
