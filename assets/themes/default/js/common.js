/* Open menu icon */
jQuery(document).ready(function(){
	jQuery('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		jQuery(this).toggleClass('open');
	});
});

/* Click menu icon */
jQuery(function(){
	jQuery('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		jQuery("#header").toggleClass("active");
		jQuery("#header .navigation-overlay").fadeToggle();
	});
});

/* Search bar */
jQuery(function(){
	jQuery(".search-icon a").click(function(){
		jQuery(this).toggleClass("active");
		jQuery(".search-bar").toggleClass("active");
		return false
	});
});

/* Refine Search */
jQuery(function(){
	jQuery(".refine-search > a").click(function(){
		jQuery(this).next(".refinesearch-content").slideToggle();
		jQuery(this).toggleClass("active");
		return false
	});
});

/* Home form tabs */
jQuery(function(){
	jQuery(".homecontent-tab li a").click(function(){
		jQuery(".homecontent-wrap .home-tabs").hide();
		jQuery(this.hash).show();
		jQuery(".homecontent-tab li").removeClass("active");
		jQuery(this).parent().addClass("active");
		return false
	});
});

/* Flight type tabs */
jQuery(function(){
	jQuery(".flights-type li a").click(function(){
		jQuery(".search-flights").hide();
		jQuery(this.hash).show();
		jQuery(".flights-type li").removeClass("active");
		jQuery(this).parent().addClass("active");
		return false
	});
});

/* Login Dropdown */
jQuery(function(){
	// jQuery(".right-section > ul li a").click(function(){
	// 	jQuery(this).next(".login-dropdown").fadeToggle();
	// 	jQuery(this).parent().toggleClass("active");
	// 	return false
	// });
	
	// jQuery("body").click(function() {
	// 	jQuery(".right-section > ul li").removeClass("active");
	// 	jQuery(".login-dropdown").fadeOut();
	// });
	// jQuery(".login-dropdown").click(function(e) {
	// 		e.stopPropagation();
	// });
	
	jQuery(".login-bottom a").click(function(){
		jQuery(".login-section").hide();
		jQuery(this.hash).show();
		return false
	});
});

/* Signup button */
// jQuery(function(){
// 	jQuery(".slider-content h3 a").click(function(){
// 		jQuery(".login-dropdown").show();
// 		return false
// 	});
// });

/* Date picker (Calender) */
jQuery(function(){
	jQuery('#datepicker,#datepicker-2,#datepicker-3,#datepicker-4,#datepicker-5,#datepicker-6,#datepicker-7,#datepicker-8,#datepicker-9').datepicker({
		numberOfMonths: 2,
		showButtonPanel: true,
		dateFormat: 'dd-mm-yy'
		
	});
});

/* Range Slider */
jQuery( function() {
	jQuery( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 30000,
		values: [ 10000, 15000 ],
		slide: function( event, ui ) {
			jQuery( "#amount" ).val( "PKR " + ui.values[ 0 ] + " - PKR " + ui.values[ 1 ] );
		}
	});
	jQuery( "#amount" ).val( "PKR " + jQuery( "#slider-range" ).slider( "values", 0 ) +
		" - PKR " + $( "#slider-range" ).slider( "values", 1 ) );
} );

/* Home Slider */
jQuery(function(){
  jQuery('.main-slider .bxslider').bxSlider({
	  pager:false,
	  controls:false,
	  auto:true,
	  pause:10000,
  });
});

/* Hotels Thumbnail Slider */
jQuery(document).ready(function(){
		 var jQueryj = jQuery.noConflict();

var realSlider= jQueryj("ul#bxslider").bxSlider({
      speed:1000,
      pager:false,
      nextText:'',
      prevText:'',
      infiniteLoop:true,
      hideControlOnEnd:true,
      onSlideBefore:function($slideElement, oldIndex, newIndex){
        changeRealThumb(realThumbSlider,newIndex);
        
      }
      
    });
    
    var realThumbSlider=jQueryj("ul#bxslider-pager").bxSlider({
      minSlides: 6,
      maxSlides: 6,
      slideWidth: 80,
      slideMargin: 12,
      moveSlides: 1,
      pager:false,
      speed:1000,
      infiniteLoop:true,
      hideControlOnEnd:true,
      nextText:'<span></span>',
      prevText:'<span></span>',
      onSlideBefore:function(jQueryslideElement, oldIndex, newIndex){
        /*$j("#sliderThumbReal ul .active").removeClass("active");
        $slideElement.addClass("active"); */

      }
    });
    
    linkRealSliders(realSlider,realThumbSlider);
    
    if(jQueryj("#bxslider-pager li").length<7){
      jQueryj("#bxslider-pager .bx-next").hide();
    }

// sincronizza sliders realizzazioni
function linkRealSliders(bigS,thumbS){
  
  jQueryj("ul#bxslider-pager").on("click","a",function(event){
    event.preventDefault();
    var newIndex=jQueryj(this).parent().attr("data-slideIndex");
        bigS.goToSlide(newIndex);
  });
}

//slider!=$thumbSlider. slider is the realslider
function changeRealThumb(slider,newIndex){
  
  var jQuerythumbS=jQueryj("#bxslider-pager");
  jQuerythumbS.find('.active').removeClass("active");
  jQuerythumbS.find('li[data-slideIndex="'+newIndex+'"]').addClass("active");
  
  if(slider.getSlideCount()-newIndex>=6)slider.goToSlide(newIndex);
  else slider.goToSlide(slider.getSlideCount()-6);

}
	});


/* More li */
jQuery(function(){
	jQuery("#sidebar .more-detial a").click(function(){
		jQuery("#sidebar .more-li").fadeToggle();
		jQuery("#sidebar .more-detial a").addClass("active");
		jQuery(this).removeClass("active");
		return false
	});
});

/* More Features */
jQuery(function(){
	jQuery(".about-hotel > a").click(function(){
		jQuery(".more-features").toggleClass("active");
		return false
	});
});

/* FAQ */
jQuery(function(){
	jQuery(".faq li a").click(function(){
		jQuery(".faq .answer").slideUp();
		jQuery(this).parent().next(".answer").slideToggle();
		return false
	});
});

/* Logged Area */
jQuery(function(){
	jQuery(".loggedin-area > a").click(function(){
		jQuery(this).next().fadeToggle();
		return false
	});
});

/* Profile editable area */
jQuery(function(){
	jQuery(".dashboard-pages .head > a").click(function(){
		jQuery(".profile-detail > .editable-content").show();
		jQuery(".profile-detail > .actual-content").hide();
		return false
	});
	
	jQuery(".editable-content > .button-wrap .btn-profile").click(function(){
		jQuery(".profile-detail > .editable-content").hide();
		jQuery(".profile-detail > .actual-content").show();
		return false
	});
});
