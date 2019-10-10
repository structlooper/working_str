<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>HomePage</title>
  
    <style><?php include('layouts/style.php') ?></style>
   
  </head>
  <body>
<!-- NAVIGATION BAR..................................... -->
           <?php
            include('layouts/nav.php'); 
            ?>
  

 <!-- SLIDE COROUSEL.................................... -->
  <div class="bd-example">
       <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                  <!-- <li data-target="#carouselExampleCaptions" data-slide-to="3"></li> -->
          </ol>
              <div class="carousel-inner">
                  <div class="carousel-item">
                    <img src="images/img1.jpg" class="d-block w-100" alt="First slide" width='1146px' height='650px'>
                      <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                      </div>
                  </div>
              <div class="carousel-item">
                  <img src="images/img4.png" class="d-block w-100" alt="Second slide" width='1146px' height='650px'>
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                  </div>
              </div>
              <div class="carousel-item active">
                    <img src="images/img3.jpg" class="d-block w-100" alt="Third slide" width='1146px' height='650px'>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                    </div>
                  </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
      </div>
 </div>
<br><br>

<!-- second block............. -->

<div class='container marketing'>
    <div class="row">
           
          <!-- features assment informer........... -->
              <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading">About NGO_name Foundation </h2><span class="text-muted">Since @2016</span>
                  <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                <img src="images/img2.jpg" alt=""  width='500px' height='400px'>
                  <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                </div>
              </div>
          <br>

      <!-- Cards portion for informations.............................. -->

          <div class="col-lg-4 mt-4">
            <svg class="bd-placeholder-img rounded-circle " width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                <h2>Education for every child</h2>
                  <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4 mt-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                    <h2>Feeding the hungry people</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4 mt-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                    <h2>Providing cloth people</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
    </div>  
</div> 
    
  </body>

  <!-- INCLUDING FOOTER................................ -->

  <?php
 include('layouts/footer.php');
 ?>
</html>