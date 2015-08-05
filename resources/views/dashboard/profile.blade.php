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
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Personal Information</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Common Settings</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Specific Settings</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Messages</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home"><div class="panel panel-default">
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
								<a href="{{ url('/home') }}" class="btn btn-danger" >Cancel
								</a>
							</div>
						</div>  
					</div>
			</div></div>
    <div role="tabpanel" class="tab-pane" id="profile">
    <div class="panel panel-default">
				<div class="panel-heading">
					Privacy
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
    <div role="tabpanel" class="tab-pane" id="messages">
    <div class="panel panel-default">
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
    <div role="tabpanel" class="tab-pane" id="settings">
   		<h3 style="text-align: justify;"><a href="#">Life Messages</a></h3>
  		 <p style="text-align: justify;">God never promised a happy and easy life but he did promise that you can bring a beautiful change to it by your consistent efforts. Life is beautiful but there are some terms and conditions attached with it. It is a journey and not a destination, so make sure that you enjoy every moment to its optimum levels so that there are no regrets later. Every life has a purpose and discovering that purpose should be the goal of life because that is the gift of God.</p>
   		<p style="text-align: justify;">Here are some of sweet life messages examples for different situations and relations which can help you add new energy to the lives of the people around you.</p>
   		<h3 style="text-align: justify;"><a href="#">Life Messages for Friends</a></h3>
   		<p style="text-align: justify;">Friends are life. And sometimes when your dear friend feels rejected from life and feels completely discourages then you must explain him the importance and wonderful aspects of life which he still needs to explore and enjoy.</p>
   		<blockquote>
		<p style="text-align: justify;"><span style="color: #333333;">“Life never pleases us by giving us what we want but it always surprises us with things that we deserve. So never underestimate yourself as you deserve the best.”</span></p>
</blockquote>

</div>




			
			
		{{ Form::close() }}
	</div>
</div>





@stop