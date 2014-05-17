$(window).load(function() {

	$('.flexslider').flexslider({
		animation: "fade",
		controlNav: false,
		directionNav: false,
		slideshowSpeed: 2400,
		animationSpeed: 800
	});

	/* Page Scroll to id fn call */
	$("#navigation-menu a, a[href='#top'], a[rel='m_PageScroll2id']").mPageScroll2id({
		highlightSelector:"#navigation-menu a"
	});

});