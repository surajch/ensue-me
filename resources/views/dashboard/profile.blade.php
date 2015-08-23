@extends('layouts.dashboard')
@section('heading', "PROFILE PAGE")
@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-body">
				{{ Form::open([
						'url' =>'/dashboard/profile-photo/',
						'enctype' => "multipart/form-data",
						'method' => "POST"
					])
				}}
				<div class="text-center">
					<div class="form-group">
						<img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
						<h6>Upload a different photo...</h6>

						<input type="file" name="photo" class="form-control">
					</div>
					<div class="form-group">
						
						<input type="submit" class="btn btn-primary" value="Upload" />
					</div>
				</div>
				{{ 
					Form::close()
				}}
			</div>
		</div>
		

	</div>


	<!-- edit form column -->
	<div class="col-md-9 personal-info">

		{{ Form::open([
			'url' => '/dashboard/profile/'.$user->id,
			'method' => 'PUT',
			'class' => 'form-horizontal',
			'role' => 'form'
			]) 
		}}
			<div class="panel panel-default">
				  <div class="panel-heading">
						<h3 class="panel-title">User Information </h3>
				  </div>
				  <div class="panel-body">
						<div class="form-group">
							<label class="col-lg-3 control-label">Name:</label>
							<div class="col-lg-8">
								<input class="form-control" name="name" type="text" value="{{ $user->name }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label">Email:</label>
							<div class="col-lg-8">
								<input class="form-control" name="email" type="text" value="{{ $user->email }}">
							</div>
						</div>
				  </div>
				  <div class="panel-footer">
						<div class="form-group">
							<label class="col-md-3 control-label"></label>
							<div class="col-md-8 text-right">
								<input type="submit" class="btn btn-primary" value="Save Changes" />
								<span></span>
								<a href="{{ url('/dashboard') }}" class="btn btn-danger" >Cancel
								</a>
							</div>
						</div>  
					</div>

			</div>
					
					<!-- <div class="form-group">
						<label class="col-md-3 control-label">Password:</label>
						<div class="col-md-8">
							<input class="form-control" type="password" value="">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Confirm password:</label>
						<div class="col-md-8">
							<input class="form-control" type="password" value="">
						</div>
					</div>-->
					
				  			
		{{ Form::close() }}
	</div>
</div>

<a class="image-popup-vertical-fit" href="/img/portfolio/4.jpg" title="Caption. Can be aligned to any side and contain any HTML.">
	<img src="/img/portfolio/4.jpg" width="75" height="75">
</a>
<a class="image-popup-vertical-fit" href="/img/portfolio/1.jpg" title="This image fits only horizontally.">
	<img src="/img/portfolio/1.jpg" width="75" height="75">
</a>
<a class="image-popup-no-margins" href="/img/portfolio/2.jpg">
<img src="/img/portfolio/2.jpg" width="107" height="75">
</a>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>
...more buttons...

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>


  <p>select2 select box:</p>
  <p>
    <select id="select2" style="width:300px">
      <optgroup label="Alaskan/Hawaiian Time Zone">
        <option value="AK">Alaska</option>
        <option value="HI">Hawaii</option>
      </optgroup>
      <optgroup label="Pacific Time Zone">
        <option value="CA">California</option>
        <option value="NV">Nevada</option>
        <option value="OR">Oregon</option>
        <option value="WA">Washington</option>
      </optgroup>
      <optgroup label="Mountain Time Zone">
        <option value="AZ" disabled="disabled" >Arizona</option>
        <option value="CO">Colorado</option>
        <option value="ID">Idaho</option>
        <option value="MT">Montana</option>
        <option value="NE">Nebraska</option>
        <option value="NM">New Mexico</option>
        <option value="ND">North Dakota</option>
        <option value="UT">Utah</option>
        <option value="WY">Wyoming</option>
      </optgroup>
      <optgroup label="Central Time Zone">
        <option value="AL">Alabama</option>
        <option value="AR">Arkansas</option>
        <option value="IL">Illinois</option>
        <option value="IA">Iowa</option>
        <option value="KS">Kansas</option>
        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>
        <option value="MN">Minnesota</option>
        <option value="MS">Mississippi</option>
        <option value="MO">Missouri</option>
        <option value="OK">Oklahoma</option>
        <option value="SD">South Dakota</option>
        <option value="TX">Texas</option>
        <option value="TN">Tennessee</option>
        <option value="WI">Wisconsin</option>
      </optgroup>
      <optgroup label="Eastern Time Zone">
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="FL">Florida</option>
        <option value="GA">Georgia</option>
        <option value="IN">Indiana</option>
        <option value="ME">Maine</option>
        <option value="MD">Maryland</option>
        <option value="MA">Massachusetts</option>
        <option value="MI">Michigan</option>
        <option value="NH">New Hampshire</option>
        <option value="NJ">New Jersey</option>
        <option value="NY">New York</option>
        <option value="NC">North Carolina</option>
        <option value="OH">Ohio</option>
        <option value="PA">Pennsylvania</option>
        <option value="RI">Rhode Island</option>
        <option value="SC">South Carolina</option>
        <option value="VT">Vermont</option>
        <option value="VA">Virginia</option>
        <option value="WV">West Virginia</option>
      </optgroup>
    </select>
  </p>

 </br>
  </br>
   </br>
    </br>
    <p>select2 select box:</p>
  <p>
    <select class="js-example-basic-multiple" multiple="multiple" style="width:300px">
      <optgroup label="Alaskan/Hawaiian Time Zone">
        <option value="AK">Alaska</option>
        <option value="HI">Hawaii</option>
      </optgroup>
      <optgroup label="Pacific Time Zone">
        <option value="CA">California</option>
        <option value="NV">Nevada</option>
        <option value="OR">Oregon</option>
        <option value="WA">Washington</option>
      </optgroup>
      <optgroup label="Mountain Time Zone">
        <option value="AZ" disabled="disabled" >Arizona</option>
        <option value="CO">Colorado</option>
        <option value="ID">Idaho</option>
        <option value="MT">Montana</option>
        <option value="NE">Nebraska</option>
        <option value="NM">New Mexico</option>
        <option value="ND">North Dakota</option>
        <option value="UT">Utah</option>
        <option value="WY">Wyoming</option>
      </optgroup>
      <optgroup label="Central Time Zone">
        <option value="AL">Alabama</option>
        <option value="AR">Arkansas</option>
        <option value="IL">Illinois</option>
        <option value="IA">Iowa</option>
        <option value="KS">Kansas</option>
        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>
        <option value="MN">Minnesota</option>
        <option value="MS">Mississippi</option>
        <option value="MO">Missouri</option>
        <option value="OK">Oklahoma</option>
        <option value="SD">South Dakota</option>
        <option value="TX">Texas</option>
        <option value="TN">Tennessee</option>
        <option value="WI">Wisconsin</option>
      </optgroup>
      <optgroup label="Eastern Time Zone">
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="FL">Florida</option>
        <option value="GA">Georgia</option>
        <option value="IN">Indiana</option>
        <option value="ME">Maine</option>
        <option value="MD">Maryland</option>
        <option value="MA">Massachusetts</option>
        <option value="MI">Michigan</option>
        <option value="NH">New Hampshire</option>
        <option value="NJ">New Jersey</option>
        <option value="NY">New York</option>
        <option value="NC">North Carolina</option>
        <option value="OH">Ohio</option>
        <option value="PA">Pennsylvania</option>
        <option value="RI">Rhode Island</option>
        <option value="SC">South Carolina</option>
        <option value="VT">Vermont</option>
        <option value="VA">Virginia</option>
        <option value="WV">West Virginia</option>
      </optgroup>
    </select>
<select class="js-example-basic-multiple" multiple="multiple">
  <option value="AL">Alabama</option>
    ...
  <option value="WY">Wyoming</option>
</select>
 </br> </br> </br> </br>


@stop