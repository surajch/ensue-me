@extends('layouts.dashboard')

@section('content')
		<div id="contact">
        <!-- Section: about -->
    <section id="about" class="home-section text-center bg-gray">
        <div class="heading-about marginbot-50">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
        
                    <div class="section-heading">
                    <h2><strong>About us</strong></h2>
                    <p>Lorem ipsum dolor sit amet, no nisl mentitum recusabo per, vim at blandit qualisque dissentiunt. Diam efficiantur conclusionemque ut has</p>
                    </div>
            
                </div>
            </div>
            </div>
        </div>
        <div class="container">

        <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3">

                <div class="team boxed-grey">
                    <div class="inner"><div class="well"
                        <h5>Anna Hanaceck</h5>
                        <p class="subtitle">Pixel Crafter</p>
                        <div class="avatar"><img src="/img/team/1.jpg" alt="" class="img-responsive" /></div>
                    </div>
                </div>
        
            </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">

                <div class="team boxed-grey">
                    <div class="inner"><div class="well"
                        <h5>Maura Daniels</h5>
                        <p class="subtitle">Ruby on Rails</p>
                        <div class="avatar"><img src="/img/team/2.jpg" alt="" class="img-responsive" /></div>
                    </div>

                </div>
            </div>
        </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
        
                <div class="team boxed-grey">
                    <div class="inner"><div class="well"
                        <h5>Jack Briane</h5>
                        <p class="subtitle">jQuery Ninja</p>
                        <div class="avatar"><img src="/img/team/3.jpg" alt="" class="img-responsive" /></div>
                    </div>
                </div>
        
            </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
        
                <div class="team boxed-grey">
                    <div class="inner"><div class="well"
                        <h5>Tom Petterson</h5>
                        <p class="subtitle">Typographer</p>
                        <div class="avatar"><img src="/img/team/4.jpg" alt="" class="img-responsive" /></div>
                    </div>
                </div>
    
            </div>
            </div>
        </div>      
        </div>
    </section>
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <h2 style="visibility: visible; animation-delay: 0.3s; animation-name: rollIn;" data-wow-delay="0.3s" class="wow rollIn animated animated"><strong>CONTACT US </strong></h2>
                    <p class="sub-head">Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

                    <p style="visibility: visible; animation-delay: 0.4s; animation-name: rotateIn;" class="sub-head  wow rotateIn animated animated" data-wow-delay="0.4s"><strong>ADDRESS :</strong> 2234/908, Newyork City , USA - 002309</p>
                </div>
            </div>
            <hr>
            <div style="visibility: visible; animation-delay: 0.4s; animation-name: rotateIn;" class="row  text-center wow rotateIn animated animated" data-wow-delay="0.4s">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <a href="#">  <img src="/img/facebook.png" alt=""> </a>
                     <a href="#"> <img src="/img/google-plus.png" alt=""></a>
                     <a href="#"> <img src="/img/instagram.png" alt=""></a>
                     <a href="#"> <img src="/img/twitter.png" alt=""></a>


                    </div>
                </div>
                <hr>
            <div class="row pad-top-botm">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <form>
                        <div class="form-group">
                            <input style="visibility: visible; animation-delay: 0.5s; animation-name: rotateIn;" class="form-control wow rotateIn animated animated" data-wow-delay="0.5s" required="required" placeholder="Your Name" type="text">
                        </div>
                        <div class="form-group">
                            <input style="visibility: visible; animation-delay: 0.6s; animation-name: rotateIn;" class="form-control wow rotateIn animated animated" required="required" data-wow-delay="0.6s" placeholder="Your Email" type="text">
                        </div>
                        <div class="form-group">
                            <input style="visibility: visible; animation-delay: 0.7s; animation-name: rotateIn;" class="form-control wow rotateIn animated animated" required="required" data-wow-delay="0.6s" placeholder="State" type="text">
                        </div>
                        <div class="form-group">
                            <input style="visibility: visible; animation-delay: 0.8s; animation-name: rotateIn;" class="form-control wow rotateIn animated animated" required="required" data-wow-delay="0.6s" placeholder="Country" type="text">
                        </div>
                        <div class="form-group">
                            <textarea name="message" required="required" data-wow-delay="0.7s" class="wow rotateIn animated form-control animated" style="min-height: 150px; visibility: visible; animation-delay: 0.7s; animation-name: rotateIn;" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button style="visibility: visible; animation-delay: 0.8s; animation-name: rotateIn;" type="submit" class="btn btn-success btn-block btn-lg wow rotateIn animated  animated" data-wow-delay="0.8s">SUBMIT REQUEST</button>
                        </div>

                    </form>
                </div>

            </div>
            
        </div>
    </div>
@stop