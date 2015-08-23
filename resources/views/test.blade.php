@extends('layouts.dashboard')
@section('heading', "Test")
@section('content')
<div class="page-header">
	<h1>User Profile<small></small></h1>
</div>

<select style="width:200px;"></select>






<p id="test">This is some <b>bold</b> text in a paragraph.</p>

<button id="btn1">Show Text</button>
<button id="btn2">Show HTML</button>
<br>
<br>

<div class="container">

      @foreach($users as $user)
        <tr>

          <th scope="row">{{ $user->id }}</th>
          <td>{{ $user->fname }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->role_id }}</td>
          
          
          <br/>
        </tr>
        @endforeach

        
      </tbody>
    </table>
   
</div>




<div class="container">
  <h2>Data Table</h2>
  <p>The table displays the data from the user table</p>            
  <table class="table">
    <thead>
      <tr>
       <th>id</th>
        <th>Firstname</th>
        <th>Email Id</th>
        <th>Role id</th>
      </tr>
    </thead>

    <tbody> @foreach($users as $user)
        <tr>

          <th scope="row">{{ $user->id }}</th>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->role_id }}</td>
          
          
          <br/>
        </tr>
        @endforeach
        
      </tbody>
    
  </table>

         {{ $users->render() }}
</div>


















<a class="image-popup-vertical-fit" href="javascript:;" title="Caption. Can be aligned to any side and contain any HTML.">
	<img src="/img/portfolio/1.jpg" width="150" height="150">
</a>
<a class="image-popup-fit-width" href="/img/portfolio/2.jpg" title="This image fits only horizontally.">
	<img src="/img/portfolio/2.jpg" width="150" height="150">
</a>
<a class="image-popup-no-margins" href="/img/portfolio/3.jpg">
	<img src="/img/portfolio/3.jpg" width="150" height="150">
</a>


<p>Demonstrate fadeToggle() with different speed parameters.</p>

<button id="togglefade">Click to fade in/out boxes</button><br><br>

<div id="div1" ><img src="/img/portfolio/1.jpg" width="150" height="150"></div>

<div id="div2" ><img src="/img/portfolio/2.jpg" width="150" height="150"></div>

<div id="div3" ><img src="/img/portfolio/3.jpg" width="150" height="150"></div>
<br><br>

<p>Demonstrate fadeTo() with different parameters.</p>

<button id ="fadeto">Click to fade boxes</button><br><br>

<div id="div3" ><img src="/img/portfolio/1.jpg" width="150" height="150"></div>

<div id="div4" ><img src="/img/portfolio/2.jpg" width="150" height="150"></div>

<div id="div5" ><img src="/img/portfolio/3.jpg" width="150" height="150"></div>

@section('scripts')
	<script type="text/javascript">
	/*	$(function(){
			$("select").select2({
				placeholder: "Search for an Item",
	            ajax: { 
	                url: "/api/v1/country", 
	                dataType: 'json', 
	                type: "GET", 
	                quietMillis: 50, 
	                params: {
			            contentType: 'application/json; charset=utf-8'
			        },
			        dataType: 'json',
			        processResults: function (data, page) {
			        	console.log(data.result.data);
				      // parse the results into the format expected by Select2.
				      // since we are using custom formatting functions we do not need to
				      // alter the remote JSON data
				      return {
				        results: data.result.data
				      };
				    },
			        results: function (data) {
			        	console.log(data, "dldld");
			            return {results: data};
			        },
			        formatResult: function(data) {
			        },
    				formatSelection: function (argument) {
    					console.log(argument, "dd");
    				},
	            } 
			});
		});
	*/

	//Jquery 
		$(document).ready(function(){
		    $("#btn1").click(function(){
		        alert("Text: " + $("#test").text());
		    });
		    $("#btn2").click(function(){
		        alert("HTML: " + $("#test").html());
		    });
		     $("#togglefade").click(function(){
	        $("#div1").fadeToggle();
	        $("#div2").fadeToggle("slow");
        	$("#div3").fadeToggle(3000);
    		});



		    $("#fadeto").click(function(){
		        $("#div4").fadeTo("slow", 0.15);
		        $("#div5").fadeTo("slow", 0.4);
		        $("#div6").fadeTo("slow", 0.7);
    		});

    		$('.image-popup-vertical-fit').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
			verticalFit: true
		}
		
	});

	$('.image-popup-fit-width').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		image: {
			verticalFit: false
		}
	});

	$('.image-popup-no-margins').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		}
	});
	 $('element_to_pop_up').bPopup({
	    easing: 'easeOutBack', //uses jQuery easing plugin
            speed: 450,
            transition: 'slideDown'
        });

		});
	</script>
@endsection

@stop