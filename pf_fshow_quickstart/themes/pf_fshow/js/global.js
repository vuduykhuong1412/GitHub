/*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
//global variables
var responsiveflag = false;

$(document).ready(function(){
	$(".modal-header .close").click(function () {
        $(".modal").modal("hide");
    });
	// /* automatic keep header always displaying on top */
    if( $("body").hasClass("layout-boxed") || $("body").hasClass("layout-fullwidth") ){
       var _menu_action = 0;
	    if($('.main-menu').length){
	    	 _menu_action = $('.main-menu').offset().top;
		}
		var _is_menu_action = $('#pts-mainnav').hasClass('no-fixed');
		var _enable_menu_fixed = $('body').hasClass('keep-header');

		var Menu_Fixed = function(){
			var $mainmenu =  $('#pts-mainnav');
			if(!_is_menu_action){
				if( $(document).scrollTop() > _menu_action + 50){
					$mainmenu.addClass('menu_fixed');
					$('.return-top').addClass('display');
				}else{
					$mainmenu.removeClass('menu_fixed');
					$('.menu_fixed_height').remove();
					$('.return-top').removeClass('display');
				}
			}
		}

		jQuery(document).ready(function() {
			Menu_Fixed();
		});

	    $(window).scroll(function(event) {
	    	Menu_Fixed();
	    });
    }

	$('.block-borderbox .title_block').each(function(){

		var str = $(this).text();
		var end_str = '<span>' + str + '</span>';
		$(this).html(end_str);
	});

//carousell
		$('.boxcarousel').bind('slide.bs.carousel', function (e) {
		     $(this).find(".carousel-inner ").css("overflow","hidden");
		 });
		 $('.boxcarousel').bind('slid.bs.carousel', function () {
		    $(this).find(".carousel-inner ").css("overflow","visible");
		 });

	$('.carousel').each(function(){
        $(this).carousel({
            interval: false
        });
    });
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})
	//gototop
	$(window).scroll(function() {
	    if ($(window).scrollTop() >= 200) {
	        $('#to_top').fadeIn();
	    } else {
	        $('#to_top').fadeOut();
	    }
	});
	$("#to_top").click(function(){
		$("body,html").animate({scrollTop:0	},"normal");
		$("#page").animate({scrollTop:0	},"normal");
			return!1
	});

	 $("a.pts-fancybox").fancybox();
	$('#fancybox-map').fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false,
		'type' : 'iframe'
	});
	
	$('.fancybox').fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});

	highdpiInit();
	responsiveResize();
	$(window).resize(responsiveResize);
	if (navigator.userAgent.match(/Android/i))
	{
		var viewport = document.querySelector('meta[name="viewport"]');
		viewport.setAttribute('content', 'initial-scale=1.0,maximum-scale=1.0,user-scalable=0,width=device-width,height=device-height');
		window.scrollTo(0, 1);
	}
	//blockHover();
	if (typeof quickView !== 'undefined' && quickView)
		quick_view();
	dropDown();

	if (typeof page_name != 'undefined' && !in_array(page_name, ['index', 'product']))
	{
		bindGrid();

 		$(document).on('change', '.selectProductSort', function(e){
			if (typeof request != 'undefined' && request)
				var requestSortProducts = request;
 			var splitData = $(this).val().split(':');
 			var url = '';
			if (typeof requestSortProducts != 'undefined' && requestSortProducts)
			{
				url += requestSortProducts ;
				if (typeof splitData[0] !== 'undefined' && splitData[0])
				{
					url += ( requestSortProducts.indexOf('?') < 0 ? '?' : '&') + 'orderby=' + splitData[0] + (splitData[1] ? '&orderway=' + splitData[1] : '');
					if (typeof splitData[1] !== 'undefined' && splitData[1])
						url += '&orderway=' + splitData[1];
				}
				document.location.href = url;
			}
    	});

		$(document).on('change', 'select[name="n"]', function(){
			$(this.form).submit();
		});

		$(document).on('change', 'select[name="currency_payment"]', function(){
			setCurrency($(this).val());
		});
	}
		$(document).on('change', 'select[name="manufacturer_list"], select[name="supplier_list"]', function() {
			if (this.value != '')
				location.href = this.value;
		});


	$(document).on('click', '.back', function(e){
		e.preventDefault();
		history.back();
	});
	
	jQuery.curCSS = jQuery.css;
	if (!!$.prototype.cluetip)
		$('a.cluetip').cluetip({
			local:true,
			cursor: 'pointer',
			dropShadow: false,
			dropShadowSteps: 0,
			showTitle: false,
			tracking: true,
			sticky: false,
			mouseOutClose: true,
			fx: {             
		    	open:       'fadeIn',
		    	openSpeed:  'fast'
			}
		}).css('opacity', 0.8);

	if (!!$.prototype.fancybox)
		$.extend($.fancybox.defaults.tpl, {
			closeBtn : '<a title="' + FancyboxI18nClose + '" class="fancybox-item fancybox-close" href="javascript:;"></a>',
			next     : '<a title="' + FancyboxI18nNext + '" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
			prev     : '<a title="' + FancyboxI18nPrev + '" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'
		});	
	// Close Alert messages
	$(".alert.alert-danger").on('click', this, function(e){
		if (e.offsetX >= 16 && e.offsetX <= 39 && e.offsetY >= 16 && e.offsetY <= 34)
			$(this).fadeOut();
	});
});

function highdpiInit()
{
	if($('.replace-2x').css('font-size') == "1px")
	{		
		var els = $("img.replace-2x").get();
		for(var i = 0; i < els.length; i++)
		{
			src = els[i].src;
			extension = src.substr( (src.lastIndexOf('.') +1) );
			src = src.replace("." + extension, "2x." + extension);
			
			var img = new Image();
			img.src = src;
			img.height != 0 ? els[i].src = src : els[i].src = els[i].src;
		}
	}
}


// Used to compensante Chrome/Safari bug (they don't care about scroll bar for width)
function scrollCompensate() 
{
    var inner = document.createElement('p');
    inner.style.width = "100%";
    inner.style.height = "200px";

    var outer = document.createElement('div');
    outer.style.position = "absolute";
    outer.style.top = "0px";
    outer.style.left = "0px";
    outer.style.visibility = "hidden";
    outer.style.width = "200px";
    outer.style.height = "150px";
    outer.style.overflow = "hidden";
    outer.appendChild(inner);

    document.body.appendChild(outer);
    var w1 = inner.offsetWidth;
    outer.style.overflow = 'scroll';
    var w2 = inner.offsetWidth;
    if (w1 == w2) w2 = outer.clientWidth;

    document.body.removeChild(outer);

    return (w1 - w2);
}


function responsiveResize()
{
	compensante = scrollCompensate();
	if (($(window).width()+scrollCompensate()) <= 992 && responsiveflag == false)
	{
		accordionTop('enable');
		if (($(window).width()+scrollCompensate()) <= 767 && responsiveflag == false)
			{
				accordion('enable');
				accordionFooter('enable');
				accordionTop('enable');
			}
		responsiveflag = true;
	}
	else if (($(window).width()+scrollCompensate()) >= 992) {
		accordionTop('disable');
		if (($(window).width()+scrollCompensate()) >= 768)
			{
				accordion('disable');
				accordionFooter('disable');
				accordionTop('disable');
			}
		responsiveflag = false;
	}

}

function blockHover(status)
{
	$(document).off('mouseenter').on('mouseenter', '.product_list.grid li.ajax_block_product .product-container', function(e){

		if ($('body').find('.container').width() == 1170)
		{
			var pcHeight = $(this).parent().outerHeight();
			var pcPHeight = $(this).parent().find('.button-container').outerHeight() + $(this).parent().find('.comments_note').outerHeight() + $(this).parent().find('.functional-buttons').outerHeight();
			$(this).parent().addClass('hovered').css({'height':pcHeight + pcPHeight, 'margin-bottom':pcPHeight * (-1)});
		}
	});

	$(document).off('mouseleave').on('mouseleave', '.product_list.grid li.ajax_block_product .product-container', function(e){
		if ($('body').find('.container').width() == 1170)
			$(this).parent().removeClass('hovered').css({'height':'auto', 'margin-bottom':'0'});
	});
}

function quick_view()
{
	$(document).on('click', '.quick-view:visible, .quick-view-mobile:visible', function(e) 
	{
		e.preventDefault();
		var url = this.rel;
		var anchor = '';

		if (url.indexOf('#') != -1)
		{
			anchor = url.substring(url.indexOf('#'), url.length);
			url = url.substring(0, url.indexOf('#'));
		}
		if (url.indexOf('?') != -1)
			url += '&';
		else
			url += '?';

		if (!!$.prototype.fancybox)
			$.fancybox({
				'padding':  0,
				'width':    1087,
				'height':   610,
				'type':     'iframe',
				'href':     url + 'content_only=1' + anchor
			});
	});
}

function bindGrid()
{
	var view = $.totalStorage('display');
	
	if (!view && (typeof displayList != 'undefined') && displayList)
		view = 'list';

	if (view && view != 'grid')
		display(view);
	else
		$('.display').find('li#grid').addClass('selected');
	
	$(document).on('click', '#grid', function(e){
		e.preventDefault();
		display('grid');
	});

	$(document).on('click', '#list', function(e){
		e.preventDefault();
		display('list');
	});
}

function display(view)
{
	 
	var left = 'col-sm-4 col-md-4 col-lg-3';
	var right = 'col-sm-8 col-md-8 col-lg-9';
	if (view == 'list')
	{
		$('ul.product_list').removeClass('grid').addClass('list row');
 
		$('ul.product_list > li').each( function(){
			var $li = $(this);
			$li.find( '.left-block' ).addClass( left );
			$li.find( '.right-block' ).addClass( right );
			$li.removeClass( "col-lg-"+$li.data('col-lg') ).removeClass( "col-md-"+$li.data('col-md')   ).removeClass(  "col-sm-"+$li.data('col-sm')  ).removeClass(  "col-xs-"+$li.data('col-xs')  );
		} );

		$('.display').find('li#list').addClass('selected');
		$('.display').find('li#grid').removeAttr('class');
		$.totalStorage('display', 'list');
	}
	else 
	{
		$('ul.product_list').removeClass('list').addClass('grid row');
		 
		 $('ul.product_list > li').each( function(){
			var $li = $(this);
			$li.find( '.left-block' ).removeClass( left );
			$li.find( '.right-block' ).removeClass( right );
			$li.addClass( "col-lg-"+$li.data('col-lg') ).addClass( "col-md-"+$li.data('col-md')   ).addClass(  "col-sm-"+$li.data('col-sm')  ).addClass(  "col-xs-"+$li.data('col-xs')  );
		} );

		$('.display').find('li#grid').addClass('selected');
		$('.display').find('li#list').removeAttr('class');


		$.totalStorage('display', 'grid');
	}	
}

function dropDown() 
{
	elementClick = '#header .current';
	elementSlide =  'ul.toogle_content';       
	activeClass = 'active';			 

	$(elementClick).on('click', function(e){
		e.stopPropagation();
		var subUl = $(this).next(elementSlide);
		if(subUl.is(':hidden'))
		{
			subUl.slideDown();
			$(this).addClass(activeClass);	
		}
		else
		{
			subUl.slideUp();
			$(this).removeClass(activeClass);
		}
		$(elementClick).not(this).next(elementSlide).slideUp();
		$(elementClick).not(this).removeClass(activeClass);
		e.preventDefault();
	});

	$(elementSlide).on('click', function(e){
		e.stopPropagation();
	});

	$(document).on('click', function(e){
		e.stopPropagation();
		var elementHide = $(elementClick).next(elementSlide);
		$(elementHide).slideUp();
		$(elementClick).removeClass('active');
	});
}

function accordionFooter(status)
{
	if(status == 'enable')
	{
		$('#footer .footer-block h4').on('click', function(){
			$(this).toggleClass('active').parent().find('.toggle-footer').stop().slideToggle('medium');
		})
		$('#footer').addClass('accordion').find('.toggle-footer').slideUp('fast');
	}
	else
	{
		$('.footer-block h4').removeClass('active').off().parent().find('.toggle-footer').removeAttr('style').slideDown('fast');
		$('#footer').removeClass('accordion');
	}
}

function accordion(status)
{
	leftColumnBlocks = $('#left_column');
	if(status == 'enable')
	{
		var accordion_selector = '#right_column .block .title_block, #left_column .block .title_block, #left_column #newsletter_block_left h4,' +
								'#left_column .shopping_cart > a:first-child, #right_column .shopping_cart > a:first-child';

		$(accordion_selector).on('click', function(e){
			$(this).toggleClass('active').parent().find('.block_content').stop().slideToggle('medium');
		});
		$('#right_column, #left_column').addClass('accordion').find('.block .block_content').slideUp('fast');
		if (typeof(ajaxCart) !== 'undefined')
			ajaxCart.collapse();
	}
	else
	{
		$('#right_column .block .title_block, #left_column .block .title_block, #left_column #newsletter_block_left h4').removeClass('active').off().parent().find('.block_content').removeAttr('style').slideDown('fast');
		$('#left_column, #right_column').removeClass('accordion');
	}
}
function accordionTop(status)
{
/*	if(status == 'enable')
	{
		$('#header').find('.content_top').addClass('toogle_content');
	}
	else
	{
		$('#header').find('.content_top').removeClass('toogle_content');
	}*/
}

$(document).ready(function(){
	$('.staticontent-item .effect').on('click',function(){
		if($(this).data('href'))
			window.location.href = $(this).data('href');
	});	

	if(!$('.product-block .image').find('.hover-image').length){
		$('.product-block .image').removeClass('swap');
	}
   $('.btn-group.search-focus').bind('click',function(e) {
        if($(this).hasClass('active')){
            $('.nav-search').removeClass('open');
            $(this).removeClass('active');
        }else{
            $(this).addClass('active');
            $('.nav-search').addClass('open');
            $('.nav-search .input-group input[type="text"]').focus();
        }
    });

    $('.nav-search .button-close').bind('click',function(e){
        if($('.btn-group.search-focus').hasClass('active')){
            $('.nav-search').removeClass('open');
            $('.btn-group.search-focus').removeClass('active');
        }
    });

    // /* automatic keep header always displaying on top */
    if( $("body").hasClass("layout-boxed-md") || $("body").hasClass("layout-boxed-lg") ){

    }else if( $("body").hasClass("keep-header") ){
        var mb = parseInt($("#pts-mainnav").css("margin-bottom"));
        var hideheight = 0;
        hideheight =  $("#topbar").height() + mb + mb;   
        var hh =  $("#header").outerHeight(true) + mb;  
        var updateTopbar = function(){
             var pos = $(window).scrollTop();
             
             if( pos > hideheight + $("#header").height()/2){
             	if($("#page").css("padding-top")=='0px'){
             		$("#page").css( "padding-top", hh );
             	}
                $("#header").addClass('hide-bar');
                $("#header").addClass( "navbar navbar-fixed-top");
            }else {
                $("#header").removeClass('hide-bar');
               // $('#index #header').removeClass('navbar-fixed-top');
            } 
        } 
        $(window).scroll(function() {
           updateTopbar();
        });
    }

});