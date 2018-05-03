window.onload = function() {
       console.log('Hello?');
   }



jQuery(document).ready(function($) {

  $("div.addlInfo").click(function (evt) {
  	  $("> div", this).slideToggle('fast');
  });

});
