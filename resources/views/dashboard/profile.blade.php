@extends('layouts.dashboard')

@section('content')
<div class="page-header">
	<h1>User Profile<small></small></h1>
</div>
<div class="row">
	<!-- left column -->
	<div class="col-md-3">

		{{ Form::open([
				'url' =>'/profile-photo/',
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
			'url' => '/profile/'.$user->id,
			'method' => 'PUT',
			'class' => 'form-horizontal',
			'role' => 'form'
			]) 
		}}
		<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
    <div role="tabpanel" class="tab-pane" id="profile">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</div>
    <div role="tabpanel" class="tab-pane" id="messages"><div class="panel panel-default">
				<div class="panel-heading">
					Personal Information
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
								<a href="{{ url('/home') }}" class="btn btn-danger" >Cancel
								</a>
							</div>
						</div>  
					</div>
			</div></div>
    <div role="tabpanel" class="tab-pane" id="settings"><div class="panel panel-default">
				<div class="panel-heading">
					Security
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
								<a href="{{ url('/home') }}" class="btn btn-danger" >Cancel
								</a>
							</div>
						</div>  
					</div>
			</div></div>
  </div>

</div>


			
			
		{{ Form::close() }}
	</div>
</div>





@stop