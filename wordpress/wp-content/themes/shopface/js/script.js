//jQuery no-conflict wrapper - would affect Wordpress otherwise
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

//Cart Preview Div on hover on Cart Icon
//Adds previewActive class when screen is larger than 960px wide
if ($(window).width() >= 960) {
  console.log("window is greater than 960");
  $("i.fa-shopping-cart").addClass("previewActive");
  $("div.cartPreview").addClass("previewActive");
}

//If window is resized below 960px, it will remove previewActive class, thus disabling the hover feature intended only for desktop
$(window).resize(function() {
  if ($(window).width() <= 960) {
    console.log("window has been resized and is less than than 960");
      $("i.fa-shopping-cart").removeClass("previewActive");
      $("div.cartPreview").removeClass("previewActive");
} else {
  $("i.fa-shopping-cart").addClass("previewActive");
  $("div.cartPreview").addClass("previewActive");
}
});

//adding event handlers to previewActive class added and remove by code above
$("body").on( "mouseover", "i.previewActive", function (evt) {
  $("div.cartPreview").fadeIn('fast');
  $("html").css('overflow', 'scroll');
});

$("body").on( "mouseleave", "div.previewActive", function (evt) {
  $("div.previewActive").fadeOut('slow');
  $("html").css('overflow', 'scroll');
});


//Lightbox accessed via the 'Quick View' button on the product post types on primary pages
  $("div.addlInfo").click(function (evt) {
  	  $("> div", this).slideToggle('fast');
  });
});
