// Аяксовая корзина
$(document).on('submit', 'form.variants',function(e) {
	e.preventDefault();
	button = $(this).find('input[type="submit"]');
	if($(this).find('input[name=variant]:checked').size()>0)
		variant = $(this).find('input[name=variant]:checked').val();
	if($(this).find('select[name=variant]').size()>0)
		variant = $(this).find('select').val();
		
	amount = $(this).find('input[name=amount]').val();	
	
	$.ajax({
		url: "ajax/cart.php",
		data: {variant: variant, amount: amount},
		dataType: 'json',
		success: function(data){
			$('#cart_informer').html(data);
			if(button.attr('data-result-text'))
				button.val(button.attr('data-result-text'));
			
			setTimeout(function () {
				$('#cart_informer').addClass('opened-via-js');
			}, 100);
			
			setTimeout(function () {
				$('#cart_informer').removeClass('opened-via-js');
			}, 1500);
			
			$(".products-box.scroll").mCustomScrollbar({
				theme:"dark",
				scrollInertia: 250
			});
		}
	});
	return false;
});