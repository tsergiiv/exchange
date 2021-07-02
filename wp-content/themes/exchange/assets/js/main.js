"use strict";

console.log("ready");

jQuery(document).ready(function () {
  // Form select
  jQuery('.form-select').niceSelect(); // Form select - end
  // Tab

  jQuery('body').on('click', '.tab-nav-link', function () {
    var tabVal = jQuery(this).data('tab-link');
    var tabElem = jQuery('.tab-content').find("[data-tab-elem='".concat(tabVal, "']"));
    jQuery(this).addClass('active').siblings().removeClass('active');
    tabElem.addClass('active').siblings().removeClass('active');
  }); // Tab - end
  // Blog rating

  function ratingVal(elem, maxVal) {
    elem.each(function () {
      var elemRating = jQuery(this).data('rating');
      var maxRating = maxVal;
      var ratingPrecent = elemRating / maxRating * 100;
      var ratingFill = jQuery(this).find('.blog-elem-rating-fill');
      var ratingVal = jQuery(this).find('.blog-elem-rating-val');
      ratingFill.css({
        'width': ratingPrecent + "%"
      });
      ratingVal.html(elemRating);
      console.log(maxRating);

      if (maxRating == 5) {
        if (elemRating < 3) {
          jQuery(this).addClass('bad');
        } else if (elemRating >= 3 && elemRating < 4) {
          jQuery(this).addClass('fine');
        } else if (elemRating >= 4) {
          jQuery(this).addClass('good');
        }
      } else if (maxRating == 10) {
        if (elemRating < 6) {
          jQuery(this).addClass('bad');
        } else if (elemRating >= 6 && elemRating < 8) {
          jQuery(this).addClass('fine');
        } else if (elemRating >= 8) {
          jQuery(this).addClass('good');
        }
      }
    });
  }

  jQuery(window).ready(function () {
    // jQuery('.blog-elem').each(function() {
    // 	let elemRating = jQuery(this).data('rating');
    // 	let maxRating = 5;
    // 	let ratingPrecent = (elemRating / maxRating) * 100;
    // 	let ratingFill = jQuery(this).find('.blog-elem-rating-fill');
    // 	let ratingVal = jQuery(this).find('.blog-elem-rating-val');
    // 	ratingFill.css({
    // 		'width': ratingPrecent + "%"
    // 	})
    // 	ratingVal.html(elemRating);
    // 	if(elemRating < 3) {
    // 		jQuery(this).addClass('bad')
    // 	} else if(elemRating >= 3 && elemRating < 4) {
    // 		jQuery(this).addClass('fine')
    // 	} else if(elemRating >= 4) {
    // 		jQuery(this).addClass('good')
    // 	}
    // })
    ratingVal(jQuery('.blog-default').find('.blog-elem'), 5);
    ratingVal(jQuery('.blog-country').find('.blog-elem'), 10);
  }); // Blog rating - end
  // Article link

  jQuery('.article-sidebar-link').click(function (e) {
    e.preventDefault();
    jQuery(this).toggleClass('active').siblings().removeClass('active');
  }); // Article link - end
  // Article accordion

  jQuery('.article-accordion-title').click(function () {
    console.log('here');
    var parent = jQuery(this).parent();
    parent.toggleClass('active').siblings().removeClass('active');
    jQuery('.article-accordion-dropdown').slideUp();

    if (parent.hasClass('active')) {
      parent.find('.article-accordion-dropdown').slideDown();
    }
  }); // Article accordion - end
  // Modal

  function initModal(button) {
    button.click(function (event) {
      var buttonVal = jQuery(this).data("modal-btn");
      var showModal = jQuery('.modal').filter('[data-modal = "' + buttonVal + '"]');
      var modalInput = showModal.find('.modal-input');

      if (button.hasClass('disabled')) {
        jQuery(this).addClass('showMsg');
      } else {
        jQuery('body').addClass('modal-active');
        showModal.fadeIn();
        modalInput[0].focus();
      }
    });
  }

  initModal(jQuery('.modal-o-btn'));
  jQuery('.modal-cancel, .modal-close, .modal-bg').click(function () {
    closeModal();
  });
  jQuery(document).keyup(function (e) {
    if (e.keyCode === 27) {
      closeModal();
    }
  });

  function closeModal() {
    jQuery('.modal').fadeOut();
    jQuery('body').removeClass('modal-active');
  }

  ; // Modal - end
  // Article slider

  jQuery('.article-slider-wrap').slick({
    dots: true,
    infinite: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    prevArrow: jQuery('.article-slider-prev'),
    nextArrow: jQuery('.article-slider-next'),
    appendDots: jQuery('.article-slider-nav-dots')
  }); // Article slider - end
});