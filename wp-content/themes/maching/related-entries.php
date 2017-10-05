<?php

if ( in_category(array('event'))) {  // スラッグ（event）またはカテゴリーID（10）を指定します。
	get_template_part( 'related-event' , false ); // スラッグが「event」の時に、related-event.php を読み込みます。
}elseif ( in_category( array( 'shop'))) {
  get_template_part( 'related-shop' , false );

}elseif ( in_category( array( 'english'))) {
  get_template_part( 'related-english' , false );

}elseif ( in_category( array( 'history'))) {
  get_template_part( 'related-history' , false );

}elseif ( in_category( array( 'shopping'))) {
	get_template_part( 'related-shopping' , false );

}else { // スラッグが「event」以外の時に、related-normal.php を読み込みます。
	get_template_part( 'related-normal' , false );
}
?>
