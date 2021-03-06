if (typeof pistol88 == "undefined" || !pistol88) {
    var pistol88 = {};
}

pistol88.orders_list = {
	elementsUrl: null,
    init: function() {
        $('.order-index tr').on('click', function(e) {
			//alert($(e.target.tagName).parent().html());
			if($(e.target.tagName).parent().get(0).tagName == 'A' | e.target.tagName == 'A') {
				return null;
			}
			if($(this).next('tr').hasClass('order-detail')) {
				$(this).next('tr').remove();
			}
			else {
				var id = $(this).data('key');
				
				if(id) {
					$(tr).find('td').css('opacity', '0.3');
					
					$.post(pistol88.orders_list.elementsUrl, {ajax: true, orderId: id},
						function(json) {
							$(tr).after('<tr class="order-detail"><td colspan="100">'+json.elementsHtml+'</td></tr>');
							$(tr).find('td').css('opacity', '1');
						}, "json");
				}
				
				var tr = $(this);
			}
		});
    },
};

pistol88.orders_list.init();
