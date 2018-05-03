window.onload = function() {
       console.log('Hello World!');
   }


$("h5.showMore").click(function (evt) {
	  $(this).next().slideToggle("slow");
});
