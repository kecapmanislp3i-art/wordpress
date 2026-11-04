/**
 * Veloura Lite hero slider.
 * Manual controls only: no autoplay or forced motion.
 */
(function () {
	'use strict';

	function initSlider(slider) {
		var slides = Array.prototype.slice.call(slider.querySelectorAll('.veloura-slide'));
		var dots = Array.prototype.slice.call(slider.querySelectorAll('.veloura-slider-dot'));
		var previous = slider.querySelector('.veloura-slider-prev');
		var next = slider.querySelector('.veloura-slider-next');
		var current = 0;

		if (slides.length < 2) {
			return;
		}

		function showSlide(index) {
			current = (index + slides.length) % slides.length;

			slides.forEach(function (slide, slideIndex) {
				var active = slideIndex === current;
				slide.classList.toggle('is-active', active);
				slide.setAttribute('aria-hidden', active ? 'false' : 'true');
			});

			dots.forEach(function (dot, dotIndex) {
				var active = dotIndex === current;
				dot.classList.toggle('is-active', active);
				if (active) {
					dot.setAttribute('aria-current', 'true');
				} else {
					dot.removeAttribute('aria-current');
				}
			});
		}

		if (previous) {
			previous.addEventListener('click', function () {
				showSlide(current - 1);
			});
		}

		if (next) {
			next.addEventListener('click', function () {
				showSlide(current + 1);
			});
		}

		dots.forEach(function (dot) {
			dot.addEventListener('click', function () {
				showSlide(parseInt(dot.getAttribute('data-slide-to'), 10));
			});
		});

		slider.addEventListener('keydown', function (event) {
			if (event.key === 'ArrowLeft') {
				showSlide(current - 1);
			}
			if (event.key === 'ArrowRight') {
				showSlide(current + 1);
			}
		});

		showSlide(0);
	}

	document.addEventListener('DOMContentLoaded', function () {
		Array.prototype.forEach.call(document.querySelectorAll('.veloura-hero-slider'), initSlider);
	});
}());
