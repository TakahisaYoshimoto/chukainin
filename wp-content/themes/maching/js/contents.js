$(function(){
	var moveFlg = 0;
	var $c_slider = $('.c_slider');
	positionSet();
	$(window).on('resize',positionSet);
	function positionSet(){ $c_slider.scrollLeft((960 + 16) * 2 - ($(window).width() / 2 - 960 / 2)); }
	//event
	$(document)
		.on('click', '.c_slider_left', sliderLeft)
		.on('click', '.c_slider_right', sliderRight)
		.on('click', '.c_tab li', tabChange)
		.on('click', '.c_search_area_prefectures_elem', searchSelect)
		.on('click', '.c_search_area_back', searchSelectBack)
		.on('click', '.c_all_check_check input[name=all]', allCheck)
		.on('click', '.c_agent_list_check input[type=checkbox]', check)
		.on('click', '.c_fixed_area .close', fixedCheckClose)
		.on('click', '.c_fixed_area a', fixedCheckSubmit)
		.on('click', '.c_search_result_text > ul > li:nth-child(3) .p_bt', searchToggle)
		.on('click', '.c_agent_detail_list_body_thumbnail li', thumbnailClick);

	function sliderLeft(){
		if(moveFlg == 0){
			moveFlg = 1;
			$c_slider.animate({scrollLeft: ($c_slider.scrollLeft() - (960 + 16))}, 1000, 'swing', function(){
				$('.c_slider li:last-child').prependTo('.c_slider ul');
				positionSet();
				moveFlg = 0;
			});
		}
	}
	function sliderRight(){
		if(moveFlg == 0){
			moveFlg = 1;
			$c_slider.animate({scrollLeft: ($c_slider.scrollLeft() + (960 + 16))}, 1000, 'swing', function(){
				$('.c_slider li:first-child').appendTo('.c_slider ul');
				positionSet();
				moveFlg = 0;
			});
		}
	}
	function tabChange(){
		var index = $('.c_tab li').index(this);
		$('.c_tab li').removeClass('is_active');
		$(this).addClass('is_active');
		$('.c_newinfo ul').removeClass('is_active');
		$('.c_newinfo ul').eq(index).addClass('is_active');
	}
	function searchSelect(){
		if($(this).attr('data-prefectures')){
			$('.c_search_area_prefectures_form select').val($(this).attr('data-prefectures'));
		} else
		if($(this).attr('data-region')){
			$('.c_search_country').removeClass('is_active');
			$('.c_search_area' + $(this).attr('data-region')).addClass('is_active');
		}
	}
	function searchSelectBack(){
		$('.c_search_country').removeClass('is_active');
		$('.c_search_area0').addClass('is_active');
	}
	function allCheck(){
		if($(this).prop("checked") == true){
			$('.c_all_check_check input[name=all]').prop("checked",true);
			$('.c_agent_list_check input[type=checkbox]').prop("checked",true);
		} else {
			$('.c_all_check_check input[name=all]').prop("checked",false);
			$('.c_agent_list_check input[type=checkbox]').prop("checked",false);
		}
		fixedCheck();
	}
	function check(){
		$('.c_agent_list_check input[type=checkbox]').each(function(){
			if($(this).prop("checked") == false){
				$('.c_all_check_check input[name=all]').prop("checked",false);
			}
		});
		fixedCheck();
	}
	function fixedCheck(){
		var num = 0;
		$('.c_agent_list_check input[type=checkbox]').each(function(){
			if($(this).prop("checked") == true){
				num++;
			}
		});
		if(num > 0){
			if($('.c_fixed_area').length == 0){
				$('.l_main .l_content').append(
					$('<div>').addClass('c_fixed_area').append(
						$('<div>').addClass('p_flex').addClass('p_jc_center').addClass('p_ai_center').append(
							$('<div>').addClass('c_fixed_area_txt').html('チェックがついたエージェント<span>' + num + '</span>人に'),
							$('<div>').addClass('p_bt').addClass('p_bblue').addClass('p_shadow2').append(
								$('<a>').text("一括オファー")
							)
						),
						$('<div>').addClass('close').append(
							$('<img>').attr('src','./img/close.png')
						)
					)
				);
				$('.c_fixed_area').animate({'bottom':'0'},500,'swing');
			} else {
				$('.c_fixed_area .c_fixed_area_txt').html('チェックがついたエージェント<span>' + num + '</span>人に');
			}
		} else {
			$('.c_fixed_area').animate({'bottom':'-80px'},500,'swing',function(){
				$(this).remove();
			});
		}
	}
	function fixedCheckClose(){
		$('.c_fixed_area').animate({'bottom':'-80px'},500,'swing',function(){
			$(this).remove();
		});
	}
	function fixedCheckSubmit(){
		$('.l_main .l_content form').submit();
		return false;
	}
	function searchToggle(){
		if($('.c_search_result_box form').css('display') == "none"){
			$(this).find('a').html('条件変更<span>▼</span>');
		} else {
			$(this).find('a').html('条件変更<span>▲</span>');
		}
		$('.c_search_result_box form').slideToggle();
	}
	function thumbnailClick(){
		var imgPath = $(this).find('img').attr('src');
		$('.c_agent_detail_list_body_thumbnail li').removeClass('is_active');
		$(this).addClass('is_active');
		$('.c_agent_detail_list_body_preview img').attr('src', imgPath);
	}

	//初期実行

	var loop = function(){
		setTimeout(function(){
			sliderRight();
			loop();
		},5000);
	}
	loop();
	fixedCheck();

	$('.c_agent_detail_list_body_preview img').attr('src', $('.c_agent_detail_list_body_thumbnail .is_active img').attr('src'));
	$('.l_side_mypage_metar_value').css({
		'transform': 'translate(' + $('.l_side_mypage_metar_value').attr('data-percent') + ',0)',
		'-moz-transform': 'translate(' + $('.l_side_mypage_metar_value').attr('data-percent') + ',0)',
		'-webkit-transform': 'translate(' + $('.l_side_mypage_metar_value').attr('data-percent') + ',0)',
	});
});
