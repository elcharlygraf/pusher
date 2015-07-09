$(function(){
	var pusher = new Pusher('0b1d4bb7107452a41b59');
	var channel = pusher.subscribe('comments');

	channel.bind('comment', function(data){
		//alert(data.name);
		var html = '<div style="display:none;" class="comment last"><span class="name">'+data.name+'</span><p class="msg">'+data.comment+'</p></div><hr>';
		var comment = $("#comments");
		comment.prepend(html);
		comment.find('.last').slideDown(300).removeClass('last');
	});
	$('#comment').on('submit', function(){
		
		var data = $(this).serialize();
		$.post('post.php', data, function() {
			$('#msg').val('').focus();
			return true;
		});
		return false;
	});
	
});