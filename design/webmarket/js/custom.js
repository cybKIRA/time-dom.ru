/*jshint forin:true, noarg:true, noempty:true, eqeqeq:true, bitwise:true, strict:true, undef:true, unused:true, curly:true, browser:true, jquery:true, indent:4, maxerr:50 */
/* global _, Tour */

//  ========== 
//  = Custom JS and jQuery = 
//  ========== 
// variables

var minprice = parseInt( $('#f_minPrice').val() )
var maxprice = parseInt( $('#f_maxPrice').val() )
var currencyBefore =  $('#f_currencyBefore').val() == 'true' ? true : false
var priceStep = parseInt(  $('#f_priceStep').val() )
var currencySymbol = $('#f_currencySymbol').val()


var WebMarketVars = {
    currencyBefore: currencyBefore, // true foe the currencies like USD, where the symbol comes before the number ($123.45). False for the symbol after the number (123,45 €) 
    currencySymbol: currencySymbol,
    priceRange: [ minprice, maxprice ], // minimum and maximum range for the price range selector
    priceStep: priceStep
};

jQuery(document).ready(function($) {
    "use strict";
    
    /**
     * Set the ie10 class to html tag for IE10
     */
    if (/*@cc_on!@*/false) {  
        document.documentElement.className+=' ie10';  
    }  
    
    /**
     * Below the first responsive break we assume touch behaviour
     */
    var isTouch = function() {
        return $(window).width() < 980 ? true : false;
    };
    var determineScreenClass = function() {
        $("html").toggleClass("large-screen", !isTouch());
    };

    //  ========== 
    //  = Smooth scroll to the top of the page & scroll menu = 
    //  ==========
    $("#toTheTop").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 2e3, "easeInOutQuart");
        return false;
    });
	
    //  ========== 
    //  = Carousel = 
    //  ==========
    $(window).load(function() {
        var configuration = {
            debug: false,
            auto: {
                play: false
            },
            width: "100%",
            height: "variable",
            items: {
                height: "variable"
            },
            prev: {},
            next: {},
            pagination: {},
            scroll: {
                duration: 1e3,
                items: 1
            },
            transition: true
        };
        $(".carouFredSel").each(function() {
            var $this = $(this);
            // prev and next buttons
            configuration.prev.button = $("#" + $this.data("nav") + "Left");
            configuration.next.button = $("#" + $this.data("nav") + "Right");
            // responsive param
            if ($this.data("responsive")) {
                configuration.responsive = true;
            } else {
                configuration.responsive = false;
            }
            // autoplay param
            if (true === $this.data("autoplay")) {
                configuration.auto.play = true;
            }
            // onCreate the slides should not be wider than the container, no matter what
            configuration.onCreate = function() {
                $this.find(".slide").css({
                    width: $this.parent().width()
                });
            };
            // RUN THE CAROUSEL
            $this.carouFredSel(configuration);
        });
    });

    //  ========== 
    //  = Revolution Slider = 
    //  ========== 
    if (jQuery().revolution) {
        var $mainSlider = $(".fullwidthbanner").revolution({
            delay: 1e4,
            startheight: 377,
            startwidth: 1400,
            navigationType: "bullet",
            navigationStyle: "round",
            navigationVAlign: "bottom",
            touchenabled: "on",
            onHoverStop: "on",
            navigationArrows: "none",
            soloArrowLeftHalign: "left",
            soloArrowLeftValign: "center",
            soloArrowRightHalign: "right",
            soloArrowRightValign: "center",
            navigationVOffset: $('body').hasClass('boxed') ? 10 : 60,
            navOffsetHorizontal: 0,
            navOffsetVertical: 20,
            // no captions for mobile devices
            hideAllCaptionAtLilmit: 481,
            hideSliderAtLimit: 481,
            stopAtSlide: -1,
            stopAfterLoops: -1,
            shadow: 0,
            fullWidth: "on"
        });
        
        $('#sliderRevLeft').on('click', function() {
            $mainSlider.revprev();
            return false;
        });
        $('#sliderRevRight').on('click', function() {
            $mainSlider.revnext();
            return false;
        });
        
    }
    //  ==========
    //  = Add prettyPhoto for images with class .add-prettyphoto =
    //  ==========
    $(".add-prettyphoto").prettyPhoto({
        default_width: 720,
        default_height: 405
    });
    //  ==========
    //  = Accordion group toggle classes =
    //  ==========
    $(".accordion-group .accordion-toggle").click(function() {
        var $accordionGroup = $(this).parent().parent();
        if ($accordionGroup.hasClass("active")) {
            $accordionGroup.removeClass("active");
        } else {
            $accordionGroup.addClass("active").siblings().removeClass("active");
        }
    });



    //  ========== 
    //  = Nav Search = 
    //  ========== 
    $(document).on("focus", ".large-screen #navSearchInput", function() {
        $(this).parent().parent().addClass("search-mode");
        repositionLine();
    });
    $(document).on("blur", ".large-screen #navSearchInput", function() {
        $(this).parent().parent().removeClass("search-mode");
        repositionLine();
    });
    var repositionLine = function() {
        setTimeout(function() {
            $("#mainNavigation > li.active").trigger("mouseover");
        }, 200);
    };



    //  ========== 
    //  = Scroll inspector = 
    //  ========== 
    var stickyNavbar = function() {
        if (isTouch()) {
            $(window).off("scroll.onlyDesktop");
        } else {
            var $headerHeight = $("#header").height(), $navbarHeight = $("#stickyNavbar").height();
            $(window).on("scroll.onlyDesktop", function() {
                var scrollX = $(window).scrollTop();
                if (scrollX > $headerHeight) {
                    $("#stickyNavbar").removeClass("navbar-static-top").addClass("navbar-fixed-top");
                    $(".large-screen #header").css({
                        marginBottom: $navbarHeight
                    });
                } else {
                    $("#stickyNavbar").removeClass("navbar-fixed-top").addClass("navbar-static-top");
                    $(".large-screen #header").css({
                        marginBottom: 0
                    });
                }
            });
        }
    };



    //  ========== 
    //  = Thumbnail selector = 
    //  ========== 
    $(".product-preview .thumbs a").click(function(ev) {
        ev.preventDefault();
        $($(this).attr("href")).attr("src", $(this).find("img").attr("src"));
        $(this).parent().addClass("active").siblings(".active").removeClass("active");
    });



    //  ========== 
    //  = Forms = 
    //  ==========
    $(".numbered > .clickable").click(function(ev) {
        ev.preventDefault();
        var number = parseInt($(this).siblings('input[type="text"]').val(), 10);
        if (isNaN(number)) {
            number = 1;
        }
        if ($(this).hasClass("add-one")) {
            $(this).siblings('input[type="text"]').val(number + 1);
        } else {
            number = number < 2 ? 2 : number;
            $(this).siblings('input[type="text"]').val(number - 1);
        }
    });

	///////////////////
	var $container = $("#isotopeContainer");
	
	var add_items = function(){
		$container.infinitescroll({
			navSelector      : ".pagination",
			nextSelector     : ".next_page_link",
			itemSelector     : "#isotopeContainer .isotope--target",
			behavior: 'twitter',
			loading: {
				finishedMsg: 'Все товары загружены.',
				msgText: '',
				img: 'design/webmarket/images/loading.gif'
			}
		},
		// call Isotope as a callback
		function( newElements ) {
			$container.isotope( 'appended', $( newElements ) ); 

			setTimeout(updateIsotopeFiltering, 350);
		});
		
	};
	
	
	var updateIsotopeFiltering = function() {
		var selectedElms = $(".sidebar-filters .in").find(".selectable.selected[data-target]").not(".detailed"), 
			detailedElms = $(".sidebar-filters .in").find(".detailed.selected[data-target]"), 
			filterString, filter, types = [];
			
		if (selectedElms.length > 0 || detailedElms.length > 0) {
			$("#removeFilters").fadeIn();
		} else {
			$("#removeFilters").fadeOut();
		}
		if (selectedElms.length < 1) {
			filterString = ".isotope-container .isotope--target";
		} else {
			var filterArr = [];
			selectedElms.each(function() {
				var data = $(this).data("target");
				if ("undefined" !== typeof data) {
					filterArr.push($(this).data("target"));
				}
			});
			filterString = filterArr.join(",");
		}
		// basic filtering
		filter = $(filterString);
		// slider price filtering, after we have the right categories already
		if ($slider.parents(".accordion-body").hasClass("in")) {
			filter = filter.filter(function() {
				var $this = $(this);
				return $this.data("price") >= $slider.slider("values", 0) && $this.data("price") <= $slider.slider("values", 1);
			});
		}
		// more precise filters for the size, color, brand ...
		detailedElms.each(function() {
			types.push($(this).data("type"));
		});
		types = _.uniq(types);
		if (detailedElms.length > 0) {
			_.each(types, function(type) {
				var allowedValues = [];
				
				detailedElms.filter('[data-type="' + type + '"]').each(function() {
					allowedValues.push($(this).data("target"));
					
				});
				filter = filter.filter(function() {
					var $this = $(this);
					
					if ( typeof $this.data(type) === "undefined" )
						return

					return _.some($this.data(type).split("|"), function(val) {
						return _.contains(allowedValues, val);
					});
				});
			});
		}
		
		$container.isotope({
			filter: filter
		});
		
		/*
		if ( $('.isotope--target:not(.isotope-hidden)').length < 6) {
			$container.infinitescroll('retrieve');
		}
		*/
		
		if ( $('.isotope--target:not(.isotope-hidden)').length == 0) {
			$('.noResultsContainer').animate({opacity: 1}); 
		} else { 
			$('.noResultsContainer').animate({opacity: 0}); 
		}
	};
	
	// jQuery UI slider
	var prepareCurrency = function(value) {
		return WebMarketVars.currencyBefore ? WebMarketVars.currencySymbol + value : value + WebMarketVars.currencySymbol;
	};
	var $slider = $(".jqueryui-slider-container > div");
	$slider.slider({
		range: true,
		min: WebMarketVars.priceRange[0],
		max: WebMarketVars.priceRange[1],
		values: WebMarketVars.priceRange,
		step: WebMarketVars.priceStep,
		slide: function(ev, ui) {
			$(this).parent().siblings(".min-val").val(prepareCurrency(ui.values[0]));
			$(this).parent().siblings(".max-val").val(prepareCurrency(ui.values[1]));
		},
		change: function() {
			updateIsotopeFiltering();
		},
		create: function() {
			var $sliderParent = $(this).parents(".accordion-body");
			$sliderParent.find(".min-val").val(prepareCurrency($(this).slider("values", 0)));
			$sliderParent.find(".max-val").val(prepareCurrency($(this).slider("values", 1)));
		}
	});

    //  ========== 
    //  = Isotope = 
    //  ========== 
    (function() {
        $container.imagesLoaded(function() {
            $container.isotope({
                itemSelector: ".isotope--target",
                layoutMode: "fitRows",
                getSortData: {

                    price: function($elm) {
                        return $elm.data("price");
                    },
                    name: function($elm) {
                        return $elm.data("name");
                    }
                    
                }
            });
            
			add_items();

            //  ========== 
            //  = Filters for sidebar = 
            //  ========== 
            var $selectableElms = $(".sidebar-filters .selectable");
            $selectableElms.click(function(ev) {
                ev.preventDefault();
                $(this).toggleClass("selected");
                updateIsotopeFiltering();
            });
            $(".sidebar-filters .accordion-toggle").click(function() {
                setTimeout(updateIsotopeFiltering, 350);
            });
            $("#removeFilters").click(function(ev) {
                ev.preventDefault();
                $selectableElms.removeClass("selected");
                updateIsotopeFiltering();
            });
            
            updateIsotopeFiltering();
            //  ========== 
            //  = Sorting = 
            //  ========== 
            $("#isotopeSorting").change(function() {
                var parameters = jQuery.parseJSON($(this).val());
                parameters.sortAscending = "true" === parameters.sortAscending ? true : false;
                $container.isotope(parameters);
            });
            $("#isotopeSorting").trigger("change");
        });
    })();

    //  ========== 
    //  = Google Maps API with GoMap jQuery plugin = 
    //  ========== 
    $(".add-googlemap").each(function() {
        var $this = $(this);
        $this.css("height", typeof $this.data("height") === "undefined" ? 200 : parseInt($this.data("height"), 10));
        if (jQuery.goMap) {
            $this.goMap({
                markers: [ {
                    address: $this.data("addr"),
                    title: "undefined" === typeof $this.data("title") ? false : $this.data("title")
                } ],
                scrollwheel: false,
                zoom: "undefined" === typeof $this.data("zoom") ? 13 : parseInt($this.data("zoom"), 10),
                maptype: "undefined" === typeof $this.data("type") ? "ROADMAP" : $this.data("type").toUpperCase()
            });
        }
    });

    //  ========== 
    //  = Functions which has to be reinitiated when the window size is changed = 
    //  ==========
    var triggeredOnResize = function() {
        if ($("html").hasClass("lt-ie9")) {
            // do never this for IE8
            return;
        }
        // rebuild carousels
        $(".carouFredSel").each(function() {
            var $this = $(this);
            $this.trigger("configuration", [ "debug", false, true ]);
        });
        //  = Embedded video iframes = 
        // $('iframe[src*="vimeo.com"], iframe[src*="youtube.com"]').each(function() {
        //     var $this = $(this);
        //     if ($this.is(':visible')) {
        //         $this.css("height", parseInt($this.width() * $this.attr("height") / $this.attr("width"), 10));
        //     }
        // });
        // sticky navbar
        stickyNavbar();
        
        
        //  ========== 
        //  = Magic Line = 
        //  ========== 
        /**
         * @see http://css-tricks.com/jquery-magicline-navigation/
         */
        (function() {
            var $el, leftPos, newWidth, $mainNav = $("#mainNavigation");
            if($('#magic-line').length < 1) {
                $mainNav.prepend('<li id="magic-line"></li>');
            }
            var $magicLine = $("#magic-line");
            if ($(".large-screen #mainNavigation > .active").length > 0) {
                $magicLine.width($(".large-screen #mainNavigation > .active").width()).css("left", $("#mainNavigation > .active").position().left).data("origLeft", $magicLine.position().left).data("origWidth", $magicLine.width());
                $(document).on({
                    mouseenter: function() {
                        $el = $(this);
                        leftPos = $el.position().left;
                        newWidth = $el.width();
                        $magicLine.stop().animate({
                            left: leftPos,
                            width: newWidth
                        });
                    },
                    mouseleave: function() {
                        $magicLine.stop().animate({
                            left: $magicLine.data("origLeft"),
                            width: $magicLine.data("origWidth")
                        });
                    }
                }, ".large-screen #mainNavigation > li");
            }
        })();
        // width of carousel slides
        $(".carouFredSel").each(function() {
            var $this = $(this);
            $this.find(".slide").css({
                width: $this.parent().width()
            });
            $this.trigger("configuration", [ "debug", false, true ]);
        });
        // position of the bullets in the slider revolution
        if ($(window).width() < 768) {
            $(".fullwidthbanner-container .tp-bullets").css({
                bottom: 10
            });
        }
        
        
        var recalculateFromBottom = function() {
            if ( !isTouch() ) {
                $('.large-screen #spyMenu').affix({
                    offset : {
                        top: $('.large-screen #spyMenu').offset().top - 70,
                        bottom: function() {
                            return $('footer').outerHeight(true) + 30;
                        }
                    }
                });
            }
            setTimeout(recalculateFromBottom, 2000); // recalculate every 2 seconds
        };
        if($('#spyMenu').length > 0) {
            recalculateFromBottom();
        }
        
    };
    var fromLastResize;
    // counter in miliseconds
    $(window).resize(function() {
        determineScreenClass();
        clearTimeout(fromLastResize);
        fromLastResize = setTimeout(function() {
            triggeredOnResize();
        }, 250);
    });
    
    $(window).on('scroll', function() {
        if( $('#spyMenu').hasClass('affix-bottom') ) {
            $('#spyMenu').css({
                bottom: $('footer').outerHeight(true) + 30
            });
        } else {
            $('#spyMenu').removeAttr('style');
        }
    });
    

    //  ========== 
    //  = The language and currency switcher = 
    //  ========== 
    $('.js-selectable-dropdown').on('click', '.js-possibilities a', function (ev) {
        if( "#" === $(this).attr('href') ) {
            ev.preventDefault();
            var parent = $(this).parents('.js-selectable-dropdown');
            parent.find('.js-change-text').html($(this).html());
        }
    });


    //  ========== 
    //  = Last but not the least - trigger the page scroll and resize = 
    //  ========== 
    $(window).trigger("scroll").trigger("resize");
	
	//////////////////////
	// custom functions //
	//////////////////////
	
	// Login
	$("#loginForm").submit(function() {
		$.ajax({
			type: "POST",
			url: "ajax/login.php",
			data: $("#loginForm").serialize(),
			success: function(data) {
				switch (data) {
					case 'correct' :
						location.reload();
						break;
					case 'user_disabled' :
						$('#loginResult').html('<div class="alert in fade"><button type="button" class="close" data-dismiss="alert">×</button>Ваш аккаунт еще не активирован</div>')
						break;
					case 'login_incorrect' :
						$('#loginResult').html('<div class="alert alert-danger in fade"><button type="button" class="close" data-dismiss="alert">×</button>Неверный логин или пароль</div>')
						break;
				}
			},
			error: function(data){
				alert('Произошла ошибка, повторите попытку позже.')
			}
		});

		return false;
	});

	// Register
	$("#registerForm").submit(function() {
		$.ajax({
			type: "POST",
			url: "ajax/register.php",
			data: $("#registerForm").serialize(),
			success: function(data) {
				if ( data == 'correct') {
					location.reload();
				} else { 
					$('#registerResult').html('<div class="alert alert-danger in fade"><button type="button" class="close" data-dismiss="alert">×</button>' + data + '</div>')
				}
			},
			error: function(data){
				alert('Произошла ошибка, повторите попытку позже.')
			}
		});

		return false;
	});
	
	// Remind Passowrd
	$("#remindForm").submit(function() {
		$.ajax({
			type: "POST",
			url: "ajax/forgot_password.php",
			data: $("#remindForm").serialize(),
			success: function(data) {
				if ( data == 'user_not_found') {
					$('#remindResult').html('<div class="alert alert-danger in fade"><button type="button" class="close" data-dismiss="alert">×</button>Пользователь не найден</div>')
				} else {
					$('#remindResult').html('<div class="alert alert-success in fade">' + data +'</div>')
				}
				
			},
			error: function(data){
				alert('Произошла ошибка, повторите попытку позже.')
			}
		});

		return false;
	});
	
	// Coupon code
	$("input[name='coupon_code']").keypress(function(event){
		if(event.keyCode == 13){
			$("input[name='name']").attr('data-format', '');
			$("input[name='email']").attr('data-format', '');
			document.cart.submit();
		}
	});
	
	// Delivery accordion
	$('body').delegate('.deliveries .accordion-heading', 'click', function() {
		var $accordionGroup = $(this).parent().parent();
		if ($(this).parent().hasClass("open")) {
			return 
		} else {
			$accordionGroup.find('.open').toggleClass("closed open");
			$(this).parent().toggleClass("closed open");
		}
		$('.open > .accordion-body').slideDown(250)
		$('.closed > .accordion-body').slideUp(250)
	});

	$('body').delegate('input[type=radio]', 'click', function(){ 
		var delivery_id = $('.deliveries').find('input:checked').val();
		$.ajax({
			url: "ajax/cart_update.php",
			data: { 'delivery_id': delivery_id},
			success: function(data){
				if(data){
					$('#cart_total').html(data.total_price);
					$('#delivery_cost').html(data.delivery_cost);
				}
			}
		});
		return true
	});

	// Cart informer scroller
	$(".products-box.scroll").mCustomScrollbar({
		theme:"dark",
		scrollInertia: 250
	});
	
	// Выбор вариантов
	$('select[name=variant]').on('change', function() {
		var price = $(this).find('option:selected').data('price');
		var compare_price = '';
		if(typeof $(this).find('option:selected').data('compare_price') == 'string')
			compare_price = $(this).find('option:selected').data('compare_price');
		$(this).closest('.product, .span7').find('.v_price').html(price);
		$(this).closest('.product, .span7').find('.striked').html(compare_price);
		return false;	
	});
});

function scroll2error() {
		setTimeout(
			function(){
				$('html, body').animate({
					scrollTop: $(".tab-content").offset().top -50
				}, 1000);
			}, 1000)
	}
	
function update_cart(variant_id,amount){
	var delivery_id = $('.deliveries').find('input:checked').val();
	$.ajax({
		url: "ajax/cart_update.php",
		data: { 'variant_id':variant_id, 'amount':amount, 'delivery_id': delivery_id},
		success: function(data){
			if(data){
				$('#cart_informer').html(data.informer);
				$('#total_cost_'+variant_id).html(data.total_cost);
				$('#cart_total').html(data.total_price);
				$('.deliveries').html(data.deliveries);
				$('#delivery_cost').html(data.delivery_cost);
				$('#cart_title').html(data.cart_title);
				$(".products-box.scroll").mCustomScrollbar({
					theme:"dark",
					scrollInertia: 250
				});
			}
		}
	});
}

function remove_item_cart(remove_id){
	var delivery_id = $('.deliveries').find('input:checked').val();
	$.ajax({
		url: "ajax/cart_update.php",
		data: { 'remove_id':remove_id, 'delivery_id': delivery_id},
		success: function(data){
			if(data){
				if ( data.incart == 0 ) {
					$('h1.inline').html('<span class="light">Корзина</span> пуста');
					$('#cart').html('<div class="alert in fade push-down-40">В корзине нет товаров</div>');
				}
				$('#cart_informer').html(data.informer);
				$('#item_cart_'+remove_id).remove();
				$('#cart_total').html(data.total_price);
				$('.deliveries').html(data.deliveries);
				$('#delivery_cost').html(data.delivery_cost);
				$('#cart_title').html(data.cart_title);
				$(".products-box.scroll").mCustomScrollbar({
					theme:"dark",
					scrollInertia: 250
				});
			}
		}
	});
}