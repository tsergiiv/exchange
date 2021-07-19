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
  // $(document).ready(function () {
  //    setTimeout(function () {
  //        $('.preloader').css({
  //            display: 'none',
  //        });
  //    }, 2200);
  //    setTimeout(function () {
  //        $('body').removeClass('modal-active');
  //    }, 1500);
  // });
  // Preloader - end
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
      setTimeout(function () {
        parent.find('.form-custom-select-search').focus();
      }, 350);
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
      var modalInput = showModal.find('.modal-input');

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
  }); // Article slider - end
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
  // Form validate

  $('.form-validate').on('submit', function (e) {
    e.preventDefault();
    var $this = $(this);
    var action = $this.attr('action');

    if (!action) {
      console.log('У формы отсутствует атрибут action, не знаю куда посылать данные');
      return false;
    }

    ;

    if (validation.verificationFields($this)) {
      var formBtn = $this.find('.form-btn');
      var formBtnText = $this.find('.btn-text');
      var formBtnArrow = $this.find('.btn-arrow');
      formBtn.addClass('success');
      formBtnText.text('Done');
      validation.resetForm($this);
    }

    ;
    return false;
  }); // Form validate - end
});