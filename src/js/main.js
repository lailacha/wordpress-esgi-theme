/*
$(document).ready(function(){

	ajaxizePageLinks();


	//toogle element when click on it
	$('.toggle-item').click(function(){
		$('.toggle-item').toggleClass('close');
		$('.burger-menu').toggleClass('burger-open');
	}
	);

})

function showPage(page){
	console.log(page)
	$.ajax({
		url: esgi.ajaxURL,
		type: 'POST',
		data: {
			'action': 'load_posts',
			'page' : page
		}
	}).done(function(reponse){
		$('#post-list-wrapper').html(reponse);
	})
}


function ajaxizePageLinks(){
	var page = 1;
	$('.page-numbers').click(function(e){
		e.preventDefault();

		var currentPage = $('.page-numbers.current').html();
		if($(this).hasClass('next')){
			page = Number(currentPage) + 1;
		}
		else if($(this).hasClass('prev')){
			page = Number(currentPage) - 1;
		}
		else{
			page = $(this).html();
		}
		showPage(page);


		const nextState = {};
		const nextTitle = 'Page - ' + page;
		const nextURL = $(this).attr('href');
		window.history.replaceState(nextState, nextTitle, nextURL);

	})
}
*/
