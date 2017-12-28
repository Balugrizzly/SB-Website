// onload body bounce effect for signup
function shake() {
    $("#shake").effect( "bounce" );
}

$(document).ready(function() {

  // stats page table filtering

  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

// button hover event for all buttons maybe change if more buttons are added
  $(":button").hover(function () {
      $(this).toggleClass("btn-outline-secondary");
  });

// navlink hover event
  $(".nav-link").hover(function () {
   $(this).toggleClass("btn-outline-primary");
  });






// one time shake on hover disabled
  $("#shake").data("shakeit", false);
  $("#shake").hover(function(){
      if ($("#shake").data("shakeit"))
        $($(this)).effect( "shake" );
      $("#shake").data("shakeit", false);
  });

  // Smooth scrolling
  var scrollLink = $('.scroll');
  scrollLink.click(function(e) {
    e.preventDefault();
    $('body,html').animate({
      scrollTop: $(this.hash).offset().top
    }, 1000 );
  });

  // Active link switching not aktive right now
  $(window).scroll(function() {
    var scrollbarLocation = $(this).scrollTop();

    scrollLink.each(function() {

      var sectionOffset = $(this.hash).offset().top - 20;

      if ( sectionOffset <= scrollbarLocation ) {
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
      }
    })
  })


  // document rdy ends here
})
