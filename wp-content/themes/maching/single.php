<?php

if ( in_category(array('event')) ) {

	get_template_part( 'single-event' , false );

} elseif ( in_category( array('english') )  )  {

	get_template_part( 'single-english' , false );

}	elseif ( in_category( array('history') )  )  {

 	get_template_part( 'single-history' , false );

} elseif ( in_category( array('magazines') )  )  {

	get_template_part( 'single-magazines' , false );

} elseif ( in_category( array('shop') )  )  {

	get_template_part( 'single-shop' , false );

} elseif ( in_category( array('shopping') )  )  {

	get_template_part( 'single-shopping' , false );

} else {

	get_template_part( 'single' , 'normal');
}
?>
