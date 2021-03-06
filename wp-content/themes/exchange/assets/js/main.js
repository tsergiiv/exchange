"use strict";

// Blog rating star
function ratingVal(elem, maxVal) {
    elem.each(function () {
        var elemRating = $(this).data('rating');
        var maxRating = maxVal;
        var ratingPrecent = elemRating / maxRating * 100;
        var ratingFill = $(this).find('.blog-elem-rating-fill');
        var ratingVal = $(this).find('.blog-elem-rating-val');
        ratingFill.css({
            'width': ratingPrecent + "%"
        });
        ratingVal.html(elemRating);
        console.log(maxRating);

        if (maxRating == 5) {
            if (elemRating < 3) {
                $(this).addClass('bad');
            } else if (elemRating >= 3 && elemRating < 4) {
                $(this).addClass('fine');
            } else if (elemRating >= 4) {
                $(this).addClass('good');
            }
        } else if (maxRating == 10) {
            if (elemRating < 6) {
                $(this).addClass('bad');
            } else if (elemRating >= 6 && elemRating < 8) {
                $(this).addClass('fine');
            } else if (elemRating >= 8) {
                $(this).addClass('good');
            }
        }
    });
}

"use strict";

$(document).ready(function () {
  // Preloader
  $(document).ready(function () {
    setTimeout(function () {
      $('.preloader').css({
        display: 'none'
      });
    }, 1000);
    setTimeout(function () {
      $('body').removeClass('modal-active');
    }, 650);
  }); // Preloader - end
  // Choose pair btn

  // Show book message 

	// function showBook() {
	// 	let wH = $(window).height();
	// 	let wS = $(window).scrollTop();
	// 	let bookMsg = $('.book');
		
	// 	if(wS >= wH) {
	// 		bookMsg.show();
	// 		setTimeout(function() {
	// 			bookMsg.addClass('active');
	// 		}, 500);
	// 	}
	// }

	// $(window).scroll(function() {
  //   clearTimeout($.data(this, 'scrollTimer'));

	// 	$('.book').removeClass('active');
	// 	setTimeout(function() {
	// 		$('.book').hide();
	// 	}, 600);
		
	// 	if(!$('.book').hasClass('close')) {
	// 		$.data(this, 'scrollTimer', setTimeout(function() {
	// 			showBook();
	// 		}, 1100));
	// 	}
	// });

	// Show book message - end
  // Close book message 

	// $('.book-close-btn').click(function() {
	// 	$('.book').fadeOut();
	// 	$('.book').addClass('close');
	// });

	// Close book message - end
  // Close cookies message

  // $('.cookie-close-btn').click(function() {
  //   $('.cookie').fadeOut();
  //   localStorage.setItem('cookiesAccepted', 'close');
  // })

  // $(window).on('load', function() {
  //   let cookies = localStorage.getItem('cookiesAccepted');
  //   if(cookies == "close") {
  //     $('.cookie').fadeOut();
  //   } else {
  //     $('.cookie').fadeIn();
  //   }
  // });

	// Close cookies message - end

	// Choose pair btn

  $('.choose-pair-btn').click(function () {
    $('html, body').animate({
      scrollTop: $('.main-head-wrap').offset().top - 50
    }, 2000);
  }); // Choose pair btn - end

  // Form custom select

  $('.form-custom-select-chosen').click(function (e) {
    var parent = $(this).closest('.form-custom-select');
    parent.toggleClass('active');
    $('.form-custom-select').not(parent).removeClass('active');
    $('.form-custom-select-dd').fadeOut();
    $('.form-select').removeClass('open');

    function clearSearch() {
      parent.find('.form-custom-select-search').val('');
      parent.find('.form-custom-select-elem').show();
    }

    if (parent.hasClass('active')) {
      parent.find('.form-custom-select-dd').fadeIn();
      parent.find('.form-custom-select-search').focus();
      clearSearch();
    }
  });
  $('.form-custom-select, .form-search-input').click(function (e) {
    e.stopPropagation();
  });
  $('body').click(function () {
    $('.form-custom-select').removeClass('active');
    $('.form-custom-select-dd').fadeOut();
    $('.form-custom-select-empty').removeClass('active');
  }); // Form custom select - end 
  // Form custom select search

  $('.form-custom-select-search').keyup(function () {
    var parent = $(this).closest('.form-custom-select');
    var elem = parent.find('.form-custom-select-elem');
    var empty = parent.find('.form-custom-select-empty');
    var searchVal = $(this).val().toLowerCase();
    elem.filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(searchVal) > -1);
    });

    if (parent.find('.form-custom-select-elem:visible').length == 0) {
      empty.addClass('active');
    } else if (parent.find('.form-custom-select-elem:visible').length > 0) {
      empty.removeClass('active');
    }
  }); // Form custom select search - end
	// Choose pair btn

	$('.choose-pair-btn').click(function() {
		$('html, body').animate({
			scrollTop: $('.main-head-wrap').offset().top - 50
		}, 2000);
	});

	// Choose pair btn - end
  // Tab 

  $('body').on('click', '.tab-nav-link', function () {
    var tabVal = $(this).data('tab-link');
    var tabElem = $('.tab-content').find("[data-tab-elem='".concat(tabVal, "']"));
    $(this).addClass('active').siblings().removeClass('active');
    tabElem.addClass('active').siblings().removeClass('active');
  }); // Tab - end
  // Blog nav

  $('.blog-nav-link').click(function () {
    var linkData = $(this).data('blog-nav');
    var blogElem = $('.blog-elem');
    var blogElemData = blogElem.filter('[data-blog-elem = "' + linkData + '"]');
    $(this).addClass('active').siblings().removeClass('active');
    blogElem.hide();
    blogElemData.show();

    if (linkData === 'all') {
      blogElem.show();
    }
  }); // Blog nav - end
  // Blog rating star

  function ratingVal(elem, maxVal) {
    elem.each(function () {
      var elemRating = $(this).data('rating');
      var maxRating = maxVal;
      var ratingPrecent = elemRating / maxRating * 100;
      var ratingFill = $(this).find('.blog-elem-rating-fill');
      var ratingVal = $(this).find('.blog-elem-rating-val');
      ratingFill.css({
        'width': ratingPrecent + "%"
      });
      ratingVal.html(elemRating);

      if (maxRating == 5) {
        if (elemRating < 3) {
          $(this).addClass('bad');
        } else if (elemRating >= 3 && elemRating < 4) {
          $(this).addClass('fine');
        } else if (elemRating >= 4) {
          $(this).addClass('good');
        }
      } else if (maxRating == 10) {
        if (elemRating < 6) {
          $(this).addClass('bad');
        } else if (elemRating >= 6 && elemRating < 8) {
          $(this).addClass('fine');
        } else if (elemRating >= 8) {
          $(this).addClass('good');
        }
      }
    });
  }

  $(window).ready(function () {
    ratingVal($('.blog-default'), 5);
    ratingVal($('.blog-country'), 10);
  }); // Blog rating star - end
  // Article rating

  $(window).ready(function () {
    $('.article-rating-elem').each(function () {
      var elemVal = $(this).find('.article-rating-point-val').html();
      var ratingMaxVal = $(this).parent().parent().data('max');

      if (ratingMaxVal == 5) {
        if (elemVal <= 3) {
          $(this).addClass('bad');
        } else if (elemVal = 4 && elemVal < 5) {
          $(this).addClass('fine');
        } else if (elemVal = 5) {
          $(this).addClass('good');
        }
      } else if (ratingMaxVal == 10) {
        if (elemVal < 6) {
          $(this).addClass('bad');
        } else if (elemVal >= 6 && elemVal < 8) {
          $(this).addClass('fine');
        } else if (elemVal >= 8) {
          $(this).addClass('good');
        }
      }
    });
  }); // Article rating - end 
  // Article link

  $('.article-sidebar-link').click(function () {
    var anchor = $(this).attr('href');
    var anchorPosition = $('.article-content').find(anchor);
    $(this).addClass('active').siblings().removeClass('active');
    $('html, body').stop().animate({
      scrollTop: anchorPosition.offset().top - 25
    }, 1000);
  });
  var lastId,
      articleMenuItem = $('.article-sidebar-link'),
      scrollItems = articleMenuItem.map(function () {
    var item = $($(this).attr('href'));

    if (item.length) {
      return item;
    }
  });
  $(window).scroll(function () {
    var windowTop = $(this).scrollTop() + 150;
    var articleCurrentItem = scrollItems.map(function () {
      if ($(this).offset().top < windowTop) {
        return this;
      }
    });
    articleCurrentItem = articleCurrentItem[articleCurrentItem.length - 1];
    var id = articleCurrentItem && articleCurrentItem.length ? articleCurrentItem[0].id : "";

    if (lastId !== id) {
      lastId = id;
      $('.article-sidebar-link').filter("[href='#" + id + "']").addClass('active').siblings().removeClass('active');
    }
  }); // Article link - end
  // Article accordion

  $('.article-accordion-title').click(function () {
    var parent = $(this).parent();
    parent.toggleClass('active').siblings().removeClass('active');
    parent.parent().find('.article-accordion-dropdown').slideUp();

    if (parent.hasClass('active')) {
      parent.find('.article-accordion-dropdown').slideDown();
    }
  });
  $(window).on('load', function () {
    $('.article-accordion.active').find('.article-accordion-dropdown').slideDown();
  }); // Article accordion - end
  // Modal

  function initModal(button) {
    button.click(function (event) {
      var buttonVal = $(this).data("modal-btn");
      var showModal = $('.modal').filter('[data-modal = "' + buttonVal + '"]');
      var modalInput = $('.modal-contact').find('.form-input');

      if (button.hasClass('disabled')) {
        $(this).addClass('showMsg');
      } else {
        $('body').addClass('modal-active');
        showModal.fadeIn();
        modalInput[0].focus();
      }
    });
  }

  initModal($('.modal-o-btn'));
  $('.modal-cancel, .modal-close, .modal-bg').click(function () {
    closeModal();
  });
  $(document).keyup(function (e) {
    if (e.keyCode === 27) {
      closeModal();
    }
  });

  function closeModal() {
    $('.modal').fadeOut();
    $('body').removeClass('modal-active');
  }

  ; // Modal - end
  // Article slider

	if($('.article-slider-wrap').length) {
		$('.article-slider-wrap').slick({
			slidesToShow: 2,
			slidesToScroll: 1,
			dots: true,
			infinite: false,
			prevArrow: $('.article-slider-prev'),
			nextArrow: $('.article-slider-next'),
			appendDots: $('.article-slider-nav-dots'),
			responsive: [{
				breakpoint: 631,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}]
		});
	} 
	// Article slider - end
  // Article sidebar height

  $(document).ready(resizeSidebar);
  $(window).resize(resizeSidebar);

  function resizeSidebar() {
    var windowHeight = $(window).height();
    var sidebar = $('.article-sidebar');
    var sidebarHeight = sidebar.outerHeight();

    if (sidebarHeight > windowHeight) {
      sidebar.addClass('full-height');
    } else if (sidebarHeight < windowHeight) {
      sidebar.removeClass('full-height');
    }
  } // Article sidebar height - end
  // First time tab height


  function firstWrapHeight() {
    var firstTabElem = $('.first-tab').find('.first-tab-elem');
    var elementHeights = firstTabElem.map(function () {
      return $(this).outerHeight();
    }).get();
    var maxHeight = Math.max.apply(null, elementHeights);
    firstTabElem.css({
      'min-height': maxHeight
    });
  }

  $(window).on('load', firstWrapHeight);
  $(window).resize(firstWrapHeight); // First time tab height - end 
	// Top page info height

	function topInfoHeight() {
		let topInfoElem = $('.top-page-info').find('.top-page-info-content-elem');

		let elementHeights = topInfoElem.map(function() {
			return $(this).outerHeight();
		}).get();
	
		let maxHeight = Math.max.apply(null, elementHeights);

		$('.top-page-info-content').css({'min-height': maxHeight})
	}

	$(window).on('load', topInfoHeight);
	$(window).resize(topInfoHeight);

	// Top page info height - end 
  // Form validate

  $('.form-validate').on('submit', function (e) {
    e.preventDefault();
    var $this = $(this);

    if (validation.verificationFields($this)) {
      var formAction = $this.find('.form-action').val();
      var formBtn = $this.find('.form-btn');
      var formBtnText = $this.find('.btn-text');
      var formBtnArrow = $this.find('.btn-arrow');
      formBtn.addClass('success');
      formBtnText.text('Done');

      let email = jQuery('.ig_es_form_field_email').val();
      let action = $this.find('.action').val();

      if (formAction == 'contact-us') {
        let formData = new FormData();
        formData.append('name', $('#contact-name').val());
        formData.append('email', $('#contact-email').val());
        formData.append('message', $('#contact-message').val());

        jQuery.ajax({
          url: action,
          type: 'POST',
          dataType: 'json',
          processData: false,
          contentType: false,
          data: formData,
          success: function (data) {
            console.log(data);
          },
          error: function (error) {
            console.log('error' + error);
          },
        });
      }

      if (formAction == 'e-book') {
        let email = jQuery('#book-email').val();
        console.log(email);
        jQuery('.ig_es_form_field_email').val(email);

        sendBook();
      }

      validation.resetForm($this);
    }

    return false;
  }); // Form validate - end
});