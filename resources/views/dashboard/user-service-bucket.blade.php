@extends('layouts.dashboard')
@section('heading', "HOME PAGE")
@section('content')
	 <div class="container">
  <div class="row">
    <h1>Portfolio</h1>
    <div class="row">
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 1" href="#"><img class="thumbnail img-responsive" src="/img/p1.png"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 2" href="#"><img class="thumbnail img-responsive" src="/img/p1.png"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 3" href="#"><img class="thumbnail img-responsive" src="/img/p1.png"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 4" href="#"><img class="thumbnail img-responsive" src="/img/p1.png"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 5" href="#"><img class="thumbnail img-responsive" src="/img/p1.png"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 6" href="#"><img class="thumbnail img-responsive" src="/img/p1.png"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 8" href="#"><img class="thumbnail img-responsive" src="/img/p1.png"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 9" href="#"><img class="thumbnail img-responsive" src="/img/p1.png"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 10" href="#"><img class="thumbnail img-responsive" src="/img/p1.png"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 11" href="#"><img class="thumbnail img-responsive" src="/img/p1.png"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 12" href="#"><img class="thumbnail img-responsive" src="/img/p1.png"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 13" href="#"><img class="thumbnail img-responsive" src="/img/p1.png"></a></div>
    </div>
  </div>
  </div>
    <div id="help">
        <div class="overlay">
            <div class="well">
            <div class="container">
           	 <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                        <h2 style="visibility: visible; animation-delay: 0.3s; animation-name: rollIn;" data-wow-delay="0.3s" class="wow rollIn animated animated"><strong>HOW YOU CAN HELP ?</strong></h2>
                        <p class="sub-head">Checkout this vedio , which will let you know how you can help us to save the earth and let the earth live long peacefully. </p>
                    </div>
                </div>
                <div class="row ">

                    <div class="col-lg-6 col-lg-offset-1  col-md-6 col-md-offset-1">
                        <iframe style="visibility: visible; animation-delay: 0.4s; animation-name: rotateIn;" src="http://player.vimeo.com/video/18312392" class="vedio-style wow rotateIn animated animated" data-wow-delay="0.4s"></iframe>
                    </div>

                    <div class="col-lg-4 col-md-4" style="padding-top: 50px;">

                        <div style="visibility: visible; animation-delay: 0.5s; animation-name: rotateIn;" class="media wow rotateIn animated animated" data-wow-delay="0.5s">
                            <div class="pull-left">
                                <i class="fa fa-star-o fa-4x  "></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Watch This Vedio</h3>
                                <p>
                                    Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc. 
                                Aenean faucibus luctus enim. 
                                </p>

                            </div>
                        </div>
                        <div style="visibility: visible; animation-delay: 0.6s; animation-name: rotateIn;" class="media wow rotateIn animated animated" data-wow-delay="0.6s">
                            <div class="pull-left">
                                <i class="fa fa-history fa-4x  "></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Donate Some Money </h3>
                                <p>
                                    Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc. 
                                Aenean faucibus luctus enim. 
                                </p>

                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
	</div>
    </div>

    <div class="container">
  <div class="row">
      <div id="map-outer" class="col-md-12">
          <div id="address" class="col-md-4">
            <h2>Our Location</h2>
            <address>
            <strong>Peggy Guggenheim Collection</strong><br>
                Dorsoduro, 701-704<br>
                30123<br>
                Venezia<br>
                Italia<br>
                <abbr>P:</abbr> +39 041 240 5411
           </address>
          </div>
        <div id="map-container" class="col-md-8"></div>
        <script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(25.245011,55.305957),
    zoom:20,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="googleMap" style="width:740px;height:200px;"></div>
<br/>
<br/>
</body>
    
      </div><!-- /map-outer -->
  </div> <!-- /row -->
 
  <div class="row">
  <form class="form-horizontal" name="commentform">
    <div class="form-group">
        <div class="col-md-4">
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name"/>
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"/>
        </div>
        <div class="col-md-4 input-group">
        <span class="input-group-addon">@</span>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <textarea rows="6" class="form-control" id="comments" name="comments" placeholder="Your question or comment here"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            <button type="submit" value="Submit" class="btn btn-warning pull-right">Send</button>
        </div>
    </div>
</form>
</div><!-- /row -->
</div><!-- /container -->

@stop