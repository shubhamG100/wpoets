<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../css/background.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/tab.css">
    <link rel="stylesheet" href="../css/image.css">
    <script src="../js/button.js"></script>
     


    <!--  -->
    <script>
  $(document).ready(function(){
    $(window)
    .resize(function() {
     // document.getElementsById("collapseExample").hidden = true;

      if ($(window).width() > 800) {
        //document.getElementsById("collapseExample").hidden = true;

      } else {
         //  $(".card-body").toggleClass("collapse");
        //document.getElementsById("collapseExample").hidden = false;
      }
    })
    .resize();
    });
</script>
<style>
/* .collapse {
  display: none;
} */

</style>

     <!--  -->





  </head>
  <body id='background'>
    <div id='main'>
        <div id='header'>
        <center><h3>DelphianLogic in Action</h3></center>
        </div>
        <div id='subHeader'>
        <center><h6>lorem ipsum dolor sit amet consectetur adipiscing elit. aenean commodo</h6></center>
        </div>
        <div id='container'>
          <div class="row row1 justify-content-md-center">
               <div class="col-md-2 offset-md-1 column">
                    <div id="tab">
                      <div id='buttons'>
                       <div class='row row2' id='learning ' >
                       <button class="tablinks btn btn-light btn-sm buttons  " type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample" id="defaultOpen" value="learning" btnId='1'><img src="../images/DL-learning.svg" id='learn'>Learning <img src="../images/plus-01.svg" id='plus'> </button>
                       </div>
                       <div class="collapse" id="collapseExample" >
                         <div class='card'>
                           <div class='card-body'>
                           <div id="dynamic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators" id="indicator">
                            
                            </ol>

                            <div class="carousel-inner cs1 carouselSlider" id="carouselSlider">
                            </div>
                            <a class="carousel-control-prev" href="#dynamic" role="button" data-slide="prev">
                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                             </a>
                            <a class="carousel-control-next" href="#dynamicImage" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                           </a> 
                          </div>






                           </div>
                         </div>
                        </div>
                       <div class='row row2' id='technology'>
                       <button class="tablinks btn btn-light btn-sm buttons"type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="true" aria-controls="collapseExample1" value="technology" btnId='2'><img src="../images/DL-technology.svg" id='learn'>  Technology<img src="../images/plus-01.svg" id='plus'></button>
                       </div>
                       <div class="collapse" id="collapseExample1">
                        <div class="card card-body">
                        <div id="dynamic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators" id="indicator">
                            
                            </ol>

                            <div class="carousel-inner cs1 carouselSlider" id="carouselSlider">
                            </div>
                            <a class="carousel-control-prev" href="#dynamic" role="button" data-slide="prev">
                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                             </a>
                            <a class="carousel-control-next" href="#dynamicImage" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                           </a> 
                          </div>
                         
                         </div>
                        </div>
                       <div class='row row2' id='communication'>
                       <button class="tablinks btn btn-light btn-sm buttons"type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="true" aria-controls="collapseExample2" value="communication" btnId='3'><img src="../images/DL-communication.svg" id='learn'> Communication<img src="../images/plus-01.svg" id='plus'></button>
                       </div>
                       <div class="collapse" id="collapseExample2">
                       <div class='card'>
                           <div class='card-body'>
                             <div id="dynamic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators" id="indicator">
                            
                            </ol>

                            <div class="carousel-inner cs1 carouselSlider" id="carouselSlider">
                            </div>
                            <a class="carousel-control-prev" href="#dynamic" role="button" data-slide="prev">
                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                             </a>
                            <a class="carousel-control-next" href="#dynamicImage" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                           </a> 
                          </div>
                            </div>
                         </div>
                        </div>
                       </div>
                    </div>
                </div>
               <div class="col-md-4 column" > 
                      <div class="slider">
                          <div id="dynamicImage" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators" id="indicator">
                            
                            </ol>

                            <div class="carousel-inner cs1" id="carousel_slider">
                            </div>
                            <a class="carousel-control-prev" href="#dynamicImage" role="button" data-slide="prev">
                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                             </a>
                            <a class="carousel-control-next" href="#dynamicImage" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                           </a> 
                          </div>
                      </div>  
               </div>
               <div class="col-md-4 column">
               <div class="s1">
               <div id="dynamicImage" class="carousel slide" data-ride="carousel">
                            

                            <div class="carousel-inner cs2" id="carouselslider">
                            </div>
                             
                          </div>
                <div>  
               </div>
               
          </div>
        </div>
    </div>

     <div class="footer py-3">
        <div class="container">
          <span class="text-muted"><b>Posted by: Shubham Gangwani</b>
          Contact information: <a href="mailto:shubhamgangwani100@gmail.com">shubhamgangwani100@gmail.com</a>
          </span>
        </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  </body>
  
</html>