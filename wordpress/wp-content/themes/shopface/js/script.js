
jQuery(document).ready(function($) {

//Sticky Cateogory Menu for Desktop where the Catlegory list will clone and scroll with the window
  $("ul.desktopCatList")
    .addClass("original")
    .clone()
    .insertAfter("ul.desktopCatList")
    .addClass("cloned")
    .css("position","fixed")
    .css("top","0")
    .css("margin-top","0")
    .css("z-index","500")
    .removeClass("original")
    .hide();

    scrollIntervalID = setInterval(stickIt, 10);

  function stickIt() {

    var orgElementPos = $(".original").offset();
    orgElementTop = orgElementPos.top;

    if ($(window).scrollTop() >= (orgElementTop)) {
      // scrolled past the original position; now only show the cloned, sticky element.

      // Cloned element should always have same left position and width as original element.
      orgElement = $(".original");
      coordsOrgElement = orgElement.offset();
      leftOrgElement = coordsOrgElement.left;
      widthOrgElement = orgElement.css("width");
      $(".cloned").css("left",leftOrgElement+"px").css("top",0).css("widt",widthOrgElement).show();
      $(".original").css("visibility","hidden");
    } else {
      // not scrolled past the menu; only show the original menu.
      $(".cloned").hide();
      $(".original").css("visibility","visible");
    }
  }

//Lightbox accessed via the 'Quick View' button on the product listings
  $("div.addlInfo").click(function (evt) {
  	  $("> div", this).slideToggle('fast');
  });

});
