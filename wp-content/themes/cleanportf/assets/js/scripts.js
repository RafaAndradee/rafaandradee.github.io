///Debounce
		debounce = function(func, wait, immediate) {
		var timeout;
		return function() {
			var context = this, args = arguments;
			var later = function() {
				timeout = null;
				if (!immediate) func.apply(context, args);
			};
			var callNow = immediate && !timeout;
			clearTimeout(timeout);
			timeout = setTimeout(later, wait);
			if (callNow) func.apply(context, args);
		};
	};


////Botão de rolagem piscando
$(document).ready(function(){
	setInterval(function(){
	$('.iconScroll').fadeOut();
	$('.iconScroll').fadeIn();
},1050);
});

///Scrollanime
(function(){
		var $target = $('.anime, .anime2'),
		 animationClass = 'anime-start';



		function animeScroll() {
			var documentTop = $(document).scrollTop();

			$target.each(function(){
				var itemTop = $(this).offset().top;
				if(documentTop > itemTop -500) {
					$(this).addClass(animationClass);
				} else {
					$(this).removeClass(animationClass);
				}
			})
		}

	animeScroll();

	$(document).scroll(debounce(function(){
		animeScroll();
	}, 200));
})();

//Botão de rolagem
$(document).ready(function(){
	      var link = $(".linkScroll");
      var subir = $(".btn");

      link.on("click", function() {
        var seletor = $(this).attr("href");
        var posicao = $("#grid").offset().top;
        $("html, body").animate({scrollTop: posicao-60,},1000);
      })

});



//Efeitos dos títulos
$(document).ready(function(){
		var areaMouse = $('.jobSquare');
	areaMouse.hover( function(){
			$(this).closest('.jobSquare').find('.titleJob').fadeIn(800).show()
		}, function(){
			$(this).closest('.jobSquare').find('.titleJob').fadeOut(800).hide()
		}

	);
});



//Hotjar Tracking Code for http://rafandrade.com.br/
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1129166,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'http://static.hotjar.com/c/hotjar-','.js?sv=');


/*
$(document).ready(function(){
function createli(){
	$('.jobsgrid').append($("<li />", {
				class: "placeholder",
				}));

}



$('.placeholder').append($("<img src='wp-content/themes/bootest/assets/images/placeholder.jpeg'/>"));
});
*/
