$(document).ready(function () {
    var scroll_pos = 0;
    $(document).scroll(function () {
      scroll_pos = $(this).scrollTop();
      if (scroll_pos > 100) {
        $("#navbar").addClass("md:h-[100px]");
        $("#navbar").addClass("md:drop-shadow-2xl");
        $("#navbar").addClass("md:bg-darkgreen");
        $("#navbar").removeClass("md:bg-transparentr");
        $("#navbar").removeClass("md:h-[150px]");
        $("#logo").addClass("md:h-[110px]");
        $("#logo").removeClass("md:h-[150px]");
      } else {
        $("#navbar").removeClass("md:bg-darkgreen");
        $("#navbar").addClass("md:bg-transparentr");
        $("#navbar").addClass("md:h-[150px]");
        $("#navbar").removeClass("md:h-[100px]");
        $("#navbar").removeClass("md:drop-shadow-2xl");
        $("#logo").removeClass("md:h-[110px]");
        $("#logo").addClass("md:h-[150px]");
      }
    });
  });

    $(document).ready(function() {
      $('a[href*=#]').bind('click', function(e) {
          e.preventDefault(); // prevent hard jump, the default behavior
  
          var target = $(this).attr("href"); // Set the target as variable
  
          // perform animated scrolling by getting top-position of target-element and set it as scroll target
          $('html, body').stop().animate({
              scrollTop: $(target).offset().top
          }, 600, function() {
              location.hash = target; //attach the hash (#jumptarget) to the pageurl
          });
  
          return false;
      });
  });
  
  $(window).scroll(function() {
      var scrollDistance = $(window).scrollTop();
  

    
      // Assign active class to nav links while scolling
      $('.section').each(function(i) {
        console.log(scrollDistance)
        console.log('a')
        console.log($(this).position().top-80)
        console.log('n')
          if ($(this).position().top-80 <= scrollDistance) {
         $("nav li.active").removeClass("active");
            $("nav li").eq(i).addClass("active");
          }
      });
  }).scroll();
  
