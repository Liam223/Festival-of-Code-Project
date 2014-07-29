<?php
	require_once ('core/init.php');
?>

<!DOCTYPE html>
<html lang="en">
  <?php
	require_once ('templates/head.php');
	?>
<!-- NAVBAR
================================================== -->
  <body>
    <?php
		require_once ('templates/header.php');
		?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="/festival-of-code-project/media/fibreoptic.jpg" alt="First slide" style="height: 800px;">
          <div class="container">
            <div class="carousel-caption">
              <h1>What does our map do?</h1>
              <p>Our interactive map provides information on global mobile and broadband speeds.</p>
              <p><a class="btn btn-lg btn-primary" href="/festival-of-code-project/map.php/" role="button">View our map</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/festival-of-code-project/media/server.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>What kind of data can you view?</h1>
              <p>You can easily view information on global broadband and mobile upload and download speeds.</p>
              <p><a class="btn btn-lg btn-primary" href="/festival-of-code-project/map.php/" role="button">View our map</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/festival-of-code-project/media/matrix.jpg" alt="Third slide style="height: 800px;">
          <div class="container">
            <div class="carousel-caption">
              <h1>What else can you do?</h1>
              <p>You can easily switch between or select multiple sets of data to find the area with the best speeds, quality and whether or not providers live up to their promises!</p>
              <p><a class="btn btn-lg btn-primary" href="/festival-of-code-project/map.php/" role="button">View our map</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Speed</h2>
          <p>What is the average upload and download speed where I live? Where can I get the best speeds?</p>
          <p><a class="btn btn-default" href="/festival-of-code-project/map.php/" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Quality</h2>
          <p>How consistent is the service provided by your internet or mobile provider?</p>
          <p><a class="btn btn-default" href="/festival-of-code-project/map.php/" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Promise</h2>
          <p> Does your internet or mobile provider live up to their promises?</p>
          <p><a class="btn btn-default" href="/festival-of-code-project/map.php/" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/festival-of-code-project/js/bootstrap.min.js"></script>
    <script src="/festival-of-code-project/js/docs.min.js"></script>

  </body>
</html>
