$(document).ready(function () {

	//header
	// floatHeader();

	function floatHeader() {
		var header = $('.header'),
			scrollPrev = 0;

		$(window).scroll(function () {
			var scrolled = $(window).scrollTop();

			if (scrolled > 70 && scrolled > scrollPrev) {
				header.addClass('out');
			} else {
				header.removeClass('out');
			}
			scrollPrev = scrolled;
		});
	}
	//End header

	$('.btn-menu-mobile').on('click', function (event) {
		$(this).toggleClass('active');
		$('.menu-main').toggleClass('show');
		$('body').toggleClass('body-no-scroll');
	});

	$('.has-submenu').on('click', function (event) {
		if (window.matchMedia("(max-width: 1199px)").matches) {
			$(this).find('ul').slideToggle();
			$(this).toggleClass('show');
		}
	});

	$('.member-thumbs').on('click', function (event) {
		$('.member-thumbs').removeClass('active')
		$(this).addClass('active');
		var nameMember = $(this).find('.name').text();
		var statusMember = $(this).find('.status').text();
		var imgMember = $(this).find('img').attr("src");

		$('.member-item__title').text(nameMember);
		$('.member-item__description').text(statusMember);
		$('.member-item__img').find('img').attr("src", imgMember);
	});


	var memberSlider = new Swiper('.member-slider', {
		slidesPerView: 1,
		spaceBetween: 0,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		navigation: {
			nextEl: '.member-slider  .swiper-button-next',
			prevEl: '.member-slider  .swiper-button-prev',
		},
	});

	//tabs
	$('.tabs-nav li').on('click', function (event) {
		$('.tabs-nav li').removeClass('active');
		$(this).addClass('active');
		event.preventDefault();
		$(".tabs-content .tab").removeClass('show');
		$(".tabs-content .tab").eq($(this).index()).addClass('show');
	});
	//End tabs

	var companySlider = new Swiper('.company-slider', {
		slidesPerView: 5,
		spaceBetween: 0,

		observer: true,
		observeParents: true,
		navigation: {
			nextEl: '.company-slider .swiper-button-next',
			prevEl: '.company-slider .swiper-button-prev',
		},
		breakpoints: {
			1199: {
				slidesPerView: 4,
			},
			991: {
				slidesPerView: 3,
			},
			767: {
				slidesPerView: 2,
			},
			575: {
				slidesPerView: 1,
			},
		},
	});


	var showroomSlider = new Swiper('.showroom-slider', {
		slidesPerView: 3,
		spaceBetween: 0,
		observer: true,
		observeParents: true,
		navigation: {
			nextEl: '.showroom-slider .swiper-button-next',
			prevEl: '.showroom-slider .swiper-button-prev',
		},
		breakpoints: {
			1199: {
				slidesPerView: 2,
			},
			991: {
				slidesPerView: 2,

			},
			767: {
				slidesPerView: 1,
			},
		},
	});

	var certificateSlider = new Swiper('.certificate-slider', {
		slidesPerView: 6,
		spaceBetween: 15,
		observer: true,
		observeParents: true,
		navigation: {
			nextEl: '.certificate-slider .swiper-button-next',
			prevEl: '.certificate-slider .swiper-button-prev',
		},
		breakpoints: {
			1199: {
				slidesPerView: 5,
			},
			991: {
				slidesPerView: 4,
			},
			767: {
				slidesPerView: 2,
			},
			575: {
				slidesPerView: 1,
			},
		},
	});

	var cardSlider = new Swiper('.card-slider ', {
		slidesPerView: 2,
		spaceBetween: 30,
		speed: 800,
		navigation: {
			nextEl: '.our-projects-section .swiper-button-next',
			prevEl: '.our-projects-section .swiper-button-prev',
		},
		breakpoints: {
			1199: {
				slidesPerView: 2,
			},
			991: {
				slidesPerView: 2,
			},
			767: {
				slidesPerView: 1,
			},

		},
	});

	var brendSlider = new Swiper('.brend-slider', {
		slidesPerView: 6,
		spaceBetween: 30,
		navigation: {
			nextEl: '.brend-slider .swiper-button-next',
			prevEl: '.brend-slider .swiper-button-prev',
		},
		breakpoints: {
			1199: {
				slidesPerView: 5,
			},

			767: {
				slidesPerView: 4,
			},
			575: {
				slidesPerView: 3,
			},
			480: {
				slidesPerView: 1,
			},
		},
	});

	/*________ .articles-slider ________*/
	const breakpoint = window.matchMedia('(min-width: 992px)');

	let mySwiper;
	//////////////////////////////////////////////////////////////////
	const breakpointChecker = function () {

		// if larger viewport and multi-row layout needed
		if (breakpoint.matches === true) {

			// clean up old instances and inline styles when available
			if (mySwiper !== undefined) mySwiper.destroy(true, true);

			// or/and do nothing
			return;

			// else if a small viewport and single column layout needed
		} else if (breakpoint.matches === false) {

			// fire small viewport version of swiper
			return enableSwiper();
		}
	};

	//////////////////////////////////////////////////////////////////

	const enableSwiper = function () {
		mySwiper = new Swiper('.articles-slider', {
			slidesPerView: 2,
			spaceBetween: 30,
			navigation: {
				nextEl: '.articles-section .swiper-button-next',
				prevEl: '.articles-section .swiper-button-prev',
			},
			breakpoints: {
				767: {
					slidesPerView: 1,
				},
			},
		});

	};

	//////////////////////////////////////////////////////////////////

	// keep an eye on viewport size changes
	breakpoint.addListener(breakpointChecker);

	// kickstart
	breakpointChecker();
	/*________ End services-slider ________*/

	// Yandex map in bottom of page
	// if ($('#map').length) {
	// 	ymaps.ready(function () {
	// 		var myMap = new ymaps.Map('map', {
	// 			center: [55.981188, 37.258753],
	// 			zoom: 13,
	// 			controls: []
	// 		}, {
	// 			searchControlProvider: 'yandex#search'
	// 		}),

	// 			myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
	// 				hintContent: 'A custom placemark icon',
	// 				balloonContent: 'This is a pretty placemark'
	// 			}, {
	// 				iconLayout: 'default#imageWithContent',
	// 				iconImageHref: 'img/map-icon.png',
	// 				iconImageSize: [40, 40],
	// 				// iconContentOffset: [-35, -50],
	// 			});
	// 		myMap.geoObjects.add(myPlacemark);
	// 	});
	// }
	// MAP INIT and logic
	$(function () {
		const secondPoint = [59.844728, 30.280070];
		const firstPoint = [55.981188, 37.258753];

		if ($('#map').length) {
			ymaps.ready(function () {
				var myMap = new ymaps.Map('map', {
					center: firstPoint,
					zoom: 13,
					controls: []
				})

				var myPlacemark1 = new ymaps.Placemark(secondPoint);
				var myPlacemark2 = new ymaps.Placemark(firstPoint);
				myMap.geoObjects.add(myPlacemark1);
				myMap.geoObjects.add(myPlacemark2);

				$('.btn-def__contacts').click(function () {
					$('.btn-def__contacts').removeClass("active");
					$(this).addClass('active');
					if ($(this).hasClass('btn-def__contacts_first')) {
						myMap.setCenter(firstPoint);
					} else {
						myMap.setCenter(secondPoint);
					}
				});
			});
		}

	});
});

/*Page-articles*/

/* Show/hide side-bar list */

$('.side-bar__title').on('click', function () {

	if ($(window).outerWidth() < 992) {
		$(this).find('.side-bar__show-btn').toggleClass('open');
		$(this).parents('.side-bar').find('.side-bar__list').slideToggle();
	}
})

/*Show button 'to-top' with scroll */

$(window).on('scroll', function () {

	if ($(window).scrollTop() > $(window).outerHeight() / 2) {
		$('.btn-to-top').removeClass('hidden');
	} else {
		$('.btn-to-top').addClass('hidden');
	}
})

$('.btn-to-top').on('click', function (e) {
	e.preventDefault();
	$('html, body').animate({
		scrollTop: 0,
		duration: 500
	});
})
/*End Page-articles*/

/*Page-cond*/
$(document).ready(function () {

	var brandSlider = new Swiper('.cond-brands__list', {
		loop: false,
		slidesPerView: 4,
		spaceBetween: 0,
		watchOverflow: true,
		observer: true,
		observeParents: true,
		navigation: {
			prevEl: '.cond-brands__button-prev',
			nextEl: '.cond-brands__button-next'
		},
		breakpoints: {
			991: {
				slidesPerView: 2
			},
			767: {
				slidesPerView: 1
			}
		}
	});

	var advantagesSlider = new Swiper('.cond-advantages__list', {
		loop: false,
		slidesPerView: 6,
		spaceBetween: 0,
		watchOverflow: true,
		observer: true,
		observeParents: true,
		navigation: {
			prevEl: '.cond-advantages__button-prev',
			nextEl: '.cond-advantages__button-next'
		},
		breakpoints: {
			1199: {
				slidesPerView: 3
			},
			991: {
				slidesPerView: 2
			},
			575: {
				slidesPerView: 1
			}
		}
	})

	var appropriatesSlider = new Swiper('.appropriates-list', {
		loop: false,
		slidesPerView: 4,
		spaceBetween: 0,
		watchOverflow: true,
		observer: true,
		observeParents: true,
		navigation: {
			prevEl: '.appropriates__button-prev',
			nextEl: '.appropriates__button-next'
		},
		breakpoints: {
			991: {
				slidesPerView: 2
			},
			767: {
				slidesPerView: 1
			}
		}
	})

	var objectsSlider = new Swiper('.cond-objects__list', {
		loop: false,
		slidesPerView: 3,
		spaceBetween: 0,
		watchOverflow: true,
		observer: true,
		observeParents: true,
		navigation: {
			prevEl: '.cond-objects__button-prev',
			nextEl: '.cond-objects__button-next'
		},
		breakpoints: {
			1199: {
				slidesPerView: 2
			},
			991: {
				slidesPerView: 1
			}
		}
	})

	/*Validate form*/

	$('input[type="tel"]').mask("+7 (999) 999-99-99");
	
	$('input').on('focus', function () {
		$(this).parent().parent().find('.contact-form__label--placeholder').addClass('focus')
	})
/*
	let validName, validTel, validEmail;
	let invalidMsg = '<span class="invalid-msg"></span>';



	$('input').on('blur', function () {
		if (!$(this).val().length) {
			$(this).parent().find('.contact-form__label--placeholder').removeClass('focus')
		}
	})

	$('input[name="name"]').on('input', function () {
		validateName(this)
	})

	$('input[name="email"]').on('input', function () {
		validateEmail(this)
	})

	$('input[name="tel"]').on('input', function () {
		validateTel(this)
	})

	function validateName(input) {
		$(input).parent().find('.invalid-msg').remove()
		if (!$(input).val().length) {
			$(input).after($(invalidMsg).text("Введите ваше имя"))
			$(input).parents('.contact-form__row').removeClass('valid')
			$(input).parents('.contact-form__row').addClass('invalid')
			return false
		} else {
			$(input).parents('.contact-form__row').removeClass('invalid')
			$(input).parents('.contact-form__row').addClass('valid')
			return true
		}
	}

	function validateEmail(input) {
		$(input).parent().find('.invalid-msg').remove()
		if (!$(input).val().length) {
			$(input).after($(invalidMsg).text("Введите ваш email"))
			$(input).parents('.contact-form__row').removeClass('valid')
			$(input).parents('.contact-form__row').addClass('invalid')
			return false
		} else {
			let regExp = /^\w+([\.-]?\w+)*@(((([a-z0-9]{2,})|([a-z0-9][-][a-z0-9]+))[\.][a-z0-9])|([a-z0-9]+[-]?))+[a-z0-9]+\.([a-z]{2}|(com|net|org|edu|int|mil|gov|arpa|biz|aero|name|coop|info|pro|museum))$/i;
			let valid = regExp.test($(input).val())

			if (!valid) {
				$(input).after($(invalidMsg).text("Введите email в формате name@domain.com"))
				$(input).parents('.contact-form__row').removeClass('valid')
				$(input).parents('.contact-form__row').addClass('invalid')
				return false
			} else {
				$(input).parents('.contact-form__row').removeClass('invalid')
				$(input).parents('.contact-form__row').addClass('valid')
				return true
			}
		}
	}

	function validateTel(input) {
		$(input).parent().find('.invalid-msg').remove()
		if (!$(input).val().length) {
			$(input).after($(invalidMsg).text("Введите ваш телефон"))
			$(input).parents('.contact-form__row').removeClass('valid')
			$(input).parents('.contact-form__row').addClass('invalid')
			return false
		} else {
			$(input).parents('.contact-form__row').removeClass('invalid')
			$(input).parents('.contact-form__row').addClass('valid')
			return true
		}
	}

	$('[data-fancybox]').fancybox({
		afterClose: function () {
			$('.contact-form__success').removeClass('show');
			let form = document.querySelector('.modal-contact-form .contact-form');
			form.reset()
		}
	})

	$('.contact-form').on('submit', function (e) {
		e.preventDefault()

		let name = $(this).find('[name="name"]');
		let email = $(this).find('[name="email"]');
		let tel = $(this).find('[name="tel"]');

		validName = validateName(name)
		validTel = validateTel(tel)
		validEmail = validateEmail(email)

		if (validEmail && validTel && validName) {
			$(this)[0].reset();
			$(this).find('.contact-form__success').addClass('show')
			// $(this).find('input').removeClass('valid').removeClass('invalid')

			if ($(this).parents('.fancybox-container').length) {

			}

			return true
		}

		return false

	})

	$('.contact-form').on('reset', function () {
		$(this).find('.contact-form__row').removeClass('valid').removeClass('invalid')
		$(this).find('.contact-form__label--placeholder').removeClass('focus')
		$(this).find('.invalid-msg').remove()
	})

	$('.contact-form__success-btn').on('click', function () {
		$(this).parents('.contact-form__success').removeClass('show')
	})
*/



	// New Scripts

	if ($(window).width() < 576) {
		$('.recommendations-list').slick({
			dots: false,
			infinite: true
		});
		$('.danger-list').slick({
			dots: false,
			infinite: true
		});
		$('.plus-list').slick({
			dots: false,
			infinite: true
		});
		$('.stages-list').slick({
			dots: false,
			infinite: false
		});
	}
	// СПОЙЛЕР
	$('.hedding-title__comp').click(function (event) {
		$('.comp-list').toggleClass('active');
		$('.hedding-img').toggleClass('rotate');
	})
	// СПОЙЛЕР
	$('#projects__filter').click(function (event) {
		$('.projects__list').toggleClass('active');
		$('.projects__tag_img-filter').toggleClass('rotate');
	})
})

/*
jQuery(function($){
	$('#filter').change(function() {
		var filter = $('#filter');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			type:filter.attr('method'), // POST
			beforeSend:function(xhr){
				filter.find('button').text('Processing...'); // changing the button label
			},
			success:function(data){
				filter.find('button').text('Apply filter'); // changing the button label back
				$('#response').html(data); // insert data
			}
		});
		return false;
	});
});
*/