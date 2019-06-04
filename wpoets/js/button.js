$(document).ready(function() {
  //document.getElementsById("collapseExample").hidden = true;

  // $(window)
  //   .resize(function() {
  //     document.getElementsById("collapseExample").hidden = true;

  //     if ($(window).width() > 800) {
  //       document.getElementsById("collapseExample").hidden = true;
  //     } else {
  //       document.getElementsById("collapseExample").hidden = false;
  //     }
  //   })
  //   .resize();
  var $carousel = $("#dynamicImage");
  var ajaxResult = [];
  $carousel.carousel();
  $("body").on("click", ".buttons", function(event) {
    var dataImage = "";
    event.preventDefault();
    var btnId = $(this).attr("btnId");
    var val = $(this).val();

    //console.log(val);
    //display employee
    $.ajax({
      type: "post",
      method: "post",
      url: "../controller/showImages.php",
      data: { btnId: btnId, val: val },
      success: function(data) {
        $("#carousel_slider").html(data);
        $(".carouselSlider").html(data);
      }
    }); //ajax ends
    $.ajax({
      type: "post",
      method: "post",
      url: "../controller/showImages2.php",
      data: { btnId: btnId, val: val },
      success: function(data) {
        $("#carouselslider").html(data);
      }
    }); //ajax ends
    $.ajax({
      type: "post",
      method: "post",
      url: "../controller/showIndicator.php",
      data: { btnId: btnId, val: val },
      success: function(data) {
        $("#indicator").html(data);
        // if ($(window).width() < 800) {
        //   $(".hidebox").html(data);
        // }
      }
    }); //ajax ends
  });
});
