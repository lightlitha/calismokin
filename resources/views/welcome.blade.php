@extends('layouts.app')

@section('content')

<link href="{{ asset('css/carousel.css') }}" rel="stylesheet" type="text/css" >

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="first-slide" src="https://lightroom.adobe.com/v2c/spaces/9ebd03d7243948f69c595a3de98abb97/assets/18f819d02b8519890a01ea82a71ea352/revisions/0343664c1d934cd282dae06a87a8c359/renditions/9ee38beab51d854cf537cd47d2007f29" alt="First slide">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="second-slide" src="https://lightroom.adobe.com/v2c/spaces/9ebd03d7243948f69c595a3de98abb97/assets/5ee72a428ebf6b896f9e8717d218f1ae/revisions/c8e5e321af6442d88e7d630477fd3218/renditions/5df18cbf7386f21dc5ad04eb9c2cf62c" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="third-slide" src="https://lightroom.adobe.com/v2c/spaces/9ebd03d7243948f69c595a3de98abb97/assets/cdc9b3ae9dad7d1ab4e25201ff2c5a17/revisions/7b8fbc31f442427ab6c724218c2f7cd7/renditions/7c2c8d76544017fd086d3250c41968fe" alt="Third slide">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="rounded-circle" src="https://lightroom.adobe.com/v2c/spaces/9ebd03d7243948f69c595a3de98abb97/assets/e2c9bba8a1ca3b89678afe48c304172a/revisions/7721fe9617484b279c03738ef11e76cd/renditions/e19b66e02a3b85fb8c8d21cc6a214943" alt="IMG" width="140" height="140">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="rounded-circle" src="https://lightroom.adobe.com/v2c/spaces/9ebd03d7243948f69c595a3de98abb97/assets/913f3f66ba9d6317bb943233cd17ce6f/revisions/4055b17868ee4040b4fe3d7abff048e8/renditions/6648cef4d1d8e5376b7eea8e6115725e" alt="Generic placeholder image" width="140" height="140">
        <h2>Heading</h2>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="rounded-circle" src="https://lightroom.adobe.com/v2c/spaces/9ebd03d7243948f69c595a3de98abb97/assets/cdc9b3ae9dad7d1ab4e25201ff2c5a17/revisions/7b8fbc31f442427ab6c724218c2f7cd7/renditions/7c2c8d76544017fd086d3250c41968fe" alt="Generic placeholder image" width="140" height="140">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
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
        <img class="featurette-image img-fluid mx-auto" src="https://lightroom.adobe.com/v2c/spaces/9ebd03d7243948f69c595a3de98abb97/assets/7ecb806f66f622a808cf3dc05b7cb4ca/revisions/d35c37c108b740158419151b60a079a5/renditions/86e72755a671703bd405306c2a2585a6" alt="image">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="featurette-image img-fluid mx-auto" src="https://lightroom.adobe.com/v2c/spaces/9ebd03d7243948f69c595a3de98abb97/assets/a966c4e6fe678b97120be276def4eba5/revisions/32e6485ff85d43a7a12ec1cec12caa82/renditions/803033e914372ca194a5ef071a884417" alt="image">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" src="https://lightroom.adobe.com/v2c/spaces/9ebd03d7243948f69c595a3de98abb97/assets/67262c867b475da3eb65d4f5b580f6f8/revisions/9d977267c7ca4c7b92db6897a36c6cfe/renditions/c232a033216cf486f18d4cfe9f178cbe" alt="image">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
@endsection