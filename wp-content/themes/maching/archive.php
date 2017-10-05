<?php

if ( in_category(array('event'))) {  // スラッグ（event）またはカテゴリーID（10）を指定します。
	get_template_part( 'search-event' , false ); // スラッグが「event」の時に、search-event.php を読み込みます。

}elseif ( in_category( array( 'shop'))) {
  get_template_part( 'search-magazines' , false );

}elseif ( in_category( array( 'magazine'))) {
  get_template_part( 'search-magazines' , false );

}elseif ( in_category( array( 'shopping'))) {
	get_template_part( 'search-magazines' , false );

}else { // スラッグが「event」以外の時に、search-normal.php を読み込みます。
	get_template_part( 'search-normal' , false );
}
?>
