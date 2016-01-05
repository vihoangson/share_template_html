/*
    Template Name: HAIR - Responsive Clear HTML Template
    Author: HugNeigh
*/

(function($){

    "use strict";
    
	function initHair() {
   
/* Isotop filter Portfolio 
----------------------------------------------------------- */
        
		var container = $('.portfolio-wrap');
	        container.isotope({
	            animationEngine : 'best-available',
	            animationOptions: {
	                duration: 200,
	                queue: false
	            },
	            layoutMode: 'fitRows'
	        });
	        $('.filter li:eq(0) a').addClass('selected');
	        $('.filter a').click(function(){
	            $('#filter a').removeClass('selected');
	            $(this).addClass('selected');
	            var selector = $(this).attr('data-filter');
	            container.isotope({ filter: selector });
	            setProjects();
	            return false;
	        });
            $('.portfolio-item').addClass('col-md-4');
	    // Responsive Column
        function splitColumns() {
            var winWidth = $("#portfolio-wrap").width(),
            columnNumb = 1;

            if (winWidth > 1200) {
                columnNumb = 3;
            } else if (winWidth > 992) {
                columnNumb = 3;
            } else if (winWidth > 470) {
                columnNumb = 2;
            } else if (winWidth > 200) {
                columnNumb = 1;
            }
            return columnNumb;
        }
        function setColumns() {
            var winWidth = $("#portfolio-wrap").width(),
                columnNumb = splitColumns(),
                postWidth = Math.floor(winWidth / columnNumb);
           // console.log(winWidth);


            $("#portfolio-wrap").find('.portfolio-item').each(function () {
                $(this).css( {
                    width : postWidth + 'px'
                });
            });

        }
        function setProjects() {
            setColumns();
            container.isotope('reLayout');
        }
        container.imagesLoaded(function () {
            setColumns();
        });
        $(window).bind('resize', function () {
            setProjects();
        });

        document.getElementById("all").click();


/* Ajax Load Popup 
----------------------------------------------------------- */
        
        //  Popup contain Ajax Content
        $('.ajax-popup').magnificPopup({
                type: 'ajax',
                overflowY: 'scroll' ,
                fixedContentPos: false,
                fixedBgPos: true,
                closeBtnInside: true,
                midClick: false,
                removalDelay: 600,
                mainClass: 'mfp-fade',
                callbacks: {
                    elementParse: function(item) {
                        item.src = item.el.attr('data-url');
                    },
                    ajaxContentAdded: function() {
                        $("#project-slider").owlCarousel({
                            navigation : true,
                            pagination:true,
                            slideSpeed : 300,
                            paginationSpeed : 400,
                            singleItem:true,
                            transitionStyle : "backSlide",
                            autoHeight : true
                        });

                    }
                }
            });

        //  Popup contain IMAGE
        $('.image-popup, .ajax-image').magnificPopup({
            type: 'image',
            overflowY: 'scroll',
            fixedContentPos: false,
            closeOnContentClick: true,
            removalDelay: 600,
            mainClass: 'my-mfp-slide-bottom',
            image: {
                verticalFit: true
            }
        });

        //  Popup contain VIDEO
        $('.video-popup').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            removalDelay: 600,
            mainClass: 'my-mfp-slide-bottom'
        });


        $('.gallery-popup').on("click",function() {
            var arrGallery = [];
            $(this).closest(".portfolio-item").find(".list-gallery img").each(function(){
                arrGallery.push( {
                    src: $(this).attr("src")
                } );
            });
            $.magnificPopup.open({
                items: arrGallery,
                type: 'image',
                overflowY: 'scroll',
                fixedContentPos: false,
                gallery: {
                    enabled: true
                }
            });
            return false;
        });


/* Slider Carousel Testimonial 
----------------------------------------------------------- */
        $(".hairTestimonial").owlCarousel({
            autoPlay: false,
            slideSpeed : 1000,
            navigation: true,
            pagination: false,
            singleItem: true,
            autoHeight: true,
            navigationText : ["", ""],
        });

        $(".team-list").owlCarousel({
            autoPlay: true,
            slideSpeed : 1000,
            navigation: true,
            pagination: false,
            autoHeight: true,
            itemsDesktop: [1300,5],
            itemsDesktopSmall: [992,3],
            navigationText : ["", ""],
        });


/* Slider Carousel RecentPost 
----------------------------------------------------------- */
        $(".hairRecenpost").owlCarousel({
            autoPlay: true,
            slideSpeed : 1000,
            navigation: true,
            pagination: false,
            autoHeight: true,
            items: 4,
            itemsDesktop: [1300,4],
            itemsDesktopSmall: [992,3],
            navigationText : ["", ""],
        });


/* Scroll Mouse to change position of iphone
----------------------------------------------------------- */
        var posIphone = $('.iphone');
        $(window).scroll(function(){
            // posIphone.css('display','inline');
        });

/* Scroll menu 
----------------------------------------------------------- */      
    var topmenu = $('#feature').height();
        //console.log(topmenu);
        var nav = $('.navbar');

        $(window).scroll(function () {
            if ($(this).scrollTop() > topmenu) {
                nav.addClass("f-nav");
            } else {
                nav.removeClass("f-nav");
            }
        });

/* Event click button Search Form
----------------------------------------------------------- */ 
        var clickSearch = $('.js_btn_search');
        if(clickSearch.length > 0) {
            clickSearch.click(function(e){
                e.preventDefault();
                $(this).parent().find('input.form-control').toggleClass('show');
            });
        }

/* Go top
----------------------------------------------------------- */ 
            
        $('.scrollTop').click(function () {
            $("html,body").animate({scrollTop: 0}, 1500);
        });



/* Menu Direction  
----------------------------------------------------------- */ 
        var menuItem = $('.hair.nav').find('li.active');
        if(menuItem.length==0)
        $('.hair.nav li:eq(0)').addClass('active');
        $('.hair-header .navbar').onePageNav({
            currentClass: 'active',
            changeHash: false,
            scrollSpeed: 1000,
            scrollOffset: 30,
            scrollThreshold: 0.5,
            filter: '',
            easing: 'swing'
        });
        $('.mouseScroll').onePageNav({
           // currentClass: 'active',
            changeHash: false,
            scrollSpeed: 1000,
            scrollOffset: 30,
            scrollThreshold: 0.5,
            filter: '',
            easing: 'swing'
        });



	};

	$(document).ready(function(){
		initHair();
	})
})(jQuery);

