(function(){
	function ready(fn){ if(document.readyState !== 'loading'){ fn(); } else { document.addEventListener('DOMContentLoaded', fn); } }

	ready(function(){
		var navToggle = document.getElementById('navToggle');
		var nav = document.getElementById('site-navigation');
		if (navToggle && nav) {
			navToggle.addEventListener('click', function(){
				var expanded = this.getAttribute('aria-expanded') === 'true';
				this.setAttribute('aria-expanded', String(!expanded));
				nav.classList.toggle('open');
			});
		}

		if (window.AOS) { AOS.init({ duration: 600, once: true }); }

		var slider = document.getElementById('heroSlider');
		if (slider) {
			var slides = slider.querySelectorAll('.hero-slide');
			var index = 0;
			function show(i){
				for (var j = 0; j < slides.length; j++) {
					slides[j].style.display = j === i ? 'block' : 'none';
				}
			}
			show(index);
			setInterval(function(){
				index = (index + 1) % slides.length;
				show(index);
			}, 4500);
		}
	});
})();