$(function() {

  $(".navbar-toggle").on( "click", function () {
    if ( $("#opener__menu").hasClass("closed") ) {
      $("#opener__menu").css("display", "block");
      $("#opener__menu").toggleClass("open");
      $("#opener__menu").toggleClass("closed");
      $(".icon-bar").css({'transition' : 'all .2s linear','width' : '22px','border-radius' : '5px'});
      $(".icon-bar:nth-child(1)").css({'transform' : 'translate(0,0) rotate(-45deg) scalex(1.3)','transition' : 'all .2s linear'});
      $(".icon-bar:nth-child(2)").css({'transition' : 'all .05s linear','height' : '0'});
      $(".icon-bar:nth-child(3)").css('transform', 'translate(0,-6px) rotate(45deg) scalex(1.3)');
      $("#opener").css('padding-top','20px');
    } else {
      $("#opener__menu").css("display", "none");
      $("#opener__menu").toggleClass("open");
      $("#opener__menu").toggleClass("closed");
      $(".icon-bar").css({'transition' : 'all .2s linear','width' : '22px','border-radius' : '0px'});
      $(".icon-bar:nth-child(1)").css({'transform' : 'unset','transition' : 'all .2s linear'});
      $(".icon-bar:nth-child(2)").css({'transition' : 'all .05s linear','height' : '2px'});
      $(".icon-bar:nth-child(3)").css('transform', 'unset');
      
      $("#opener").css('padding-top','11px');
    }
  }); 

});