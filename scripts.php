
    

    <script>
      $(document).foundation();
    </script>

    <script>


$(window).load(function() {
      // Animate loader off screen
      $("#loader-home").fadeOut( "slow" );
    });








function isElementVisible(elementToBeChecked)
{
    var TopView = $(window).scrollTop();
    var BotView = TopView + $(window).height();
    var TopElement = $(elementToBeChecked).offset().top;
    var BotElement = TopElement + $(elementToBeChecked).height();
    return ((BotElement <= BotView) && (TopElement >= TopView));
}


$(window).scroll(function () {
       isOnView = isElementVisible("#stats");
       if(isOnView){

 $( "#red" ).animate({width: "95%"}, 1500 );
 $( "#green" ).animate({width: "93%"}, 1500 );
 $( "#blue" ).animate({width: "85%"}, 1500 );
 $( "#purple" ).animate({width: "75%"}, 1500 );
 $( "#orange" ).animate({width: "80%"}, 1500 );





       }

});










$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top -  $(".top-bar").height()

        }, 1500);
        return false;
      }
    }
  });
});


 $(function() {
    $(document).ready(function(){

        $(window).scroll(function(){
            if ($(this).scrollTop() > 200) {
                $('.menu-right').fadeIn(500);
            } else {
                $('.menu-right').fadeOut(500);
            }
        });

    });
});










</script>

    <div id="loader-home"></div>
