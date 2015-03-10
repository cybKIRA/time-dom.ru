/*
	--------------------------------
	Infinite Scroll Behavior
	Manual / Twitter-style
	--------------------------------
	+ https://github.com/paulirish/infinitescroll/
	+ version 2.0b2.110617
	+ Copyright 2011 Paul Irish & Luke Shumard
	+ Licensed under the MIT license
	
	+ Documentation: http://infinite-scroll.com/
	
*/

(function($, undefined) {
	$.extend($.infinitescroll.prototype,{

		_setup_twitter: function infscr_setup_twitter () {
			var opts = this.options,
				instance = this;

			// Bind nextSelector link to retrieve
			$(opts.nextSelector).click(function(e) {
				if (e.which == 1 && !e.metaKey && !e.shiftKey) {
					e.preventDefault();
					instance.retrieve();
				}
			});

			// Define loadingStart to never hide pager
			instance.options.loading.start = function (opts) {
				opts.loading.msg
					.appendTo('.pagination')
					.slideDown(opts.loading.speed, function () {
						instance.beginAjax(opts);
						
						var $current_page = $('#current_page');
						var $total_pages_num = $('#total_pages_num');
						
						$current_page.val(parseInt($current_page.val()) + 1);
						
						if ($current_page.val() >= $total_pages_num.val() ){
							$('.pagination').html(opts.loading.finishedMsg)
						}
						/*
						var $current_page = $('#current_page');
						var category_url = $('#category_url').val();

						$.ajax({
							type: "POST",
							url: "ajax/pagination.php",
							data: {current_page: $current_page.val(), category_url: category_url},
							success: function(data){
								$('#pagination_f').html(data);
								
								$current_page.val(parseInt($current_page.val()) + 1);
								
							},
							error: function (xhr, ajaxOptions, thrownError, data) {
								alert(xhr.status);
								alert(thrownError);
								alert(data);
								
							  }
						});
						*/
						
						
					});
			}
		},
		_showdonemsg_twitter: function infscr_showdonemsg_twitter () {
			var opts = this.options,
				instance = this;

			//Do all the usual stuff
			opts.loading.msg
				.find('img')
				.hide()
				.parent()
				.find('.pagination .info').html(opts.loading.finishedMsg).animate({ opacity: 1 }, 2000, function () {
					$(this).parent().fadeOut('normal');
					
				});
			
				alert(opts.loading.finishedMsg) // !!!
				
			//And also hide the navSelector
			$(opts.navSelector).fadeOut('normal');

			// user provided callback when done
			opts.errorCallback.call($(opts.contentSelector)[0],'done');

		}

	});
})(jQuery);