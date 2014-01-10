$(function (){
	$(document).on('click touchstart', '.task-all', function(){
		$(this).children('.task-option').fadeIn();
	});		
})