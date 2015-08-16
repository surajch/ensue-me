@extends('layouts.dashboard')

@section('content')
@if (\Session::has('flash_notification.message'))
    <div class="alert alert-{{ \Session::get('flash_notification.level') }}">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        {{ \Session::get('flash_notification.message') }}

    </div>
@endif

@if($errors->has())
	<div class="alert alert-danger">
		<ul>

			@foreach($errors->getMessages() as $messages)
				@foreach($messages as $message)
					<li>
						{{ $message }}
					</li>
				@endforeach
			@endforeach
		</ul>
	</div>
@endif
<div class="page-header">
	<h1>User Profile<small></small></h1>
</div>
<div class="row">
	<!-- left column -->
	<div class="col-md-3">

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


	<!-- edit form column -->
	<div class="col-md-9 personal-info">

		{{ Form::open([
			'url' => '/dashboard/profile/'.$user->id,
			'method' => 'PUT',
			'class' => 'form-horizontal',
			'role' => 'form'
			]) 
		}}


				<div class="panel-heading">
				User Information
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
			
		{{ Form::close() }}
	</div>
</div>





@stop