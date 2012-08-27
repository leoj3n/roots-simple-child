$(document).ready(function() {
	$('.hook').hide();
	
	$('.menu-showhide-hooks a').click(function(e) {
		$('.hook').toggle();
		$(this).popover('hide');
		e.preventDefault();
	});
	
	$('.menu-showhide-hooks a').popover({
		"title":"Important!",
		"content":"Click this to show indicators.",
		"placement":"right",
		"trigger":"manual"
	}).popover('show');
});