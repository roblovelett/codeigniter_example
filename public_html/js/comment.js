$(document).ready(() => {
	var clicked = false;
	var removed = false;
	var comment_name = $('#comment-name').html();
	var comment_email = $('#comment-email').html();

	$('#comment-anon-checkbox').change(function () {
		clicked = this.checked ? true : false;
		
		if (!clicked) {
			$("#field-comment-name").show();
			$("#field-comment-email").show();
		} else {
			$("#field-comment-name").hide();
			$("#field-comment-email").hide();
		};
	});
});
