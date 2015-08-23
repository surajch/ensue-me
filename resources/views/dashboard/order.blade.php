@extends('layouts.dashboard')
@section('heading', "ORDER PAGE")
@section('content')
	
	
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="/img/slider-1.png" class="img-responsive" alt="Chania">
        <div class="carousel-caption">
          <h3>Clean & Fast</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit donec mer lacinia.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Learn More</a>
        </p>
        </div>
      </div>

      <div class="item">
        <img src="/img/slider-2.jpg" class="img-responsive" alt="Chania">
        <div class="carousel-caption">
          <h3>Modern Design</h3>
          <p>Duis fermentum auctor ligula ac malesuada. Mauris et metus odio, in pulvinar urna</p>
          <p><a class="btn btn-lg btn-primary" href="#">Learn More</a>
        </p>
        </div>
      </div>
    
      <div class="item">
        <img src="/img/slider-3.jpg" class="img-responsive" alt="Flower">
        <div class="carousel-caption">
          <h3>Fully Responsive</h3>
          <p>Sodales neque vitae justo sollicitudin aliquet sit amet diam curabitur sed fermentum.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Learn More</a>
        </p>
        </div>
      </div>

      <div class="item">
        <img src="/img/slider-4.jpg" class="img-responsive" alt="Flower">
        <div class="carousel-caption">
          <h3>Clean & Fast</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit donec mer lacinia.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Learn More</a>
        </p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  <section class="callaction">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="big-cta">
          <div class="cta-text">
            <h2><span>Moderna</span> HTML Business Template</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <section id="content">
  <div class="container">
    <div class="well">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-3">
            <div class="box">
              <div class="box-gray aligncenter">
                <h4>Fully responsive</h4>
                <div class="icon">
                <i class="fa fa-desktop fa-3x"></i>
                </div>
                <p>
                 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
                </p>
                  
              </div>
              <div class="box-bottom">
                <a href="#">Learn more</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="box">
              <div class="box-gray aligncenter">
                <h4>Modern Style</h4>
                <div class="icon">
                <i class="fa fa-pagelines fa-3x"></i>
                </div>
                <p>
                 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
                </p>
                  
              </div>
              <div class="box-bottom">
                <a href="#">Learn more</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="box">
              <div class="box-gray aligncenter">
                <h4>Customizable</h4>
                <div class="icon">
                <i class="fa fa-edit fa-3x"></i>
                </div>
                <p>
                 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
                </p>
                  
              </div>
              <div class="box-bottom">
                <a href="#">Learn more</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="box">
              <div class="box-gray aligncenter">
                <h4>Valid HTML5</h4>
                <div class="icon">
                <i class="fa fa-code fa-3x"></i>
                </div>
                <p>
                 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
                </p>
                  
              </div>
              <div class="box-bottom">
                <a href="#">Learn more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    </div>
    </section>

    <!-- divider -->
    <div class="row">
      <div class="col-lg-12">
        <div class="solidline">
        </div>
      </div>
    </div>
    <!-- end divider -->
<div class="container">
  <h2>service Progress Bars</h2>
  <p>The contextual classes colors the progress bars:</p> 
  <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
      40% Complete (success)
    </div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
      50% Complete (info)
    </div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
      60% Complete (warning)
    </div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
      70% Complete (danger)
    </div>
  </div>
</div>
@stop