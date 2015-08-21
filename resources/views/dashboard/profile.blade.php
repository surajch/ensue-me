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

<div class="row">
	<div class="col-sm-12">
		@section ('cotable_panel_title','Coloured Table')
		@section ('cotable_panel_body')
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Address</th>
				</tr>
			</thead>
			<tbody>
				<tr class="success">
					<td>John</td>
					<td>john@gmail.com</td>
					<td>London, UK</td>
				</tr>
				<tr>
					<td>Wayne</td>
					<td>wayne@gmail.com</td>
					<td>Manchester, UK</td>
				</tr>
				<tr class="info">
					<td>Andy</td>
					<td>andy@gmail.com</td>
					<td>Merseyside, UK</td>
				</tr>
				<tr>
					<td>Danny</td>
					<td>danny@gmail.com</td>
					<td>Middlesborough, UK</td>
				</tr>
				<tr class="warning">
					<td>Frank</td>
					<td>frank@gmail.com</td>
					<td>Southampton, UK</td>
				</tr>
				<tr>
					<td>Scott</td>
					<td>scott@gmail.com</td>
					<td>Newcastle, UK</td>
				</tr>
				<tr class="danger">
					<td>Rickie</td>
					<td>rickie@gmail.com</td>
					<td>Burnley, UK</td>
				</tr>
			</tbody>
		</table>	
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'cotable'))
	</div>
</div>


<div class="row">
              <div class="col-md-6">
                <div class="panel panel-default">
                  <div class="panel-heading panel-heading-gray">
                    <a href="#" class="btn btn-white btn-xs pull-right"><i class="fa fa-pencil"></i></a>
                    <i class="fa fa-fw fa-info-circle"></i> About
                  </div>
                  <div class="panel-body">
                    <ul class="list-unstyled profile-about margin-none">
                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Date of Birth</span></div>
                          <div class="col-sm-8">12 January 1990</div>
                        </div>
                      </li>
                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Job</span></div>
                          <div class="col-sm-8">Specialist</div>
                        </div>
                      </li>
                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Gender</span></div>
                          <div class="col-sm-8">Male</div>
                        </div>
                      </li>
                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Lives in</span></div>
                          <div class="col-sm-8">Miami, FL, USA</div>
                        </div>
                      </li>
                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Credits</span></div>
                          <div class="col-sm-8">249</div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="panel panel-default">
                  <div class="panel-heading panel-heading-gray">
                    <div class="pull-right">
                      <a href="javascript;" class="btn btn-primary btn-xs"
                      data-toggle="modal" data-target="#myModal">Add <i class="fa fa-plus"></i></a>
                    </div>
                    <i class="icon-user-1"></i> Friends
                  </div>
                  <div class="panel-body">
                    <ul class="img-grid">
                     
                        <a class="image-popup-vertical-fit" href="/img/portfolio/2.jpg" title="Caption. Can be aligned to any side and contain any HTML.">
                          <img src="/img/portfolio/2.jpg" height="150" width="150" alt="image">
                        </a>
                      
                      
                        <a href="#">
                          <img src="/img/portfolio/2.jpg" height="150" width="150" alt="image">
                        </a>
                      
                      
                        <a href="#">
                          <img src="/img/portfolio/3.jpg" height="150" width="150" alt="image">
                        </a>
                       
                      
                        <a href="#">
                          <img src="/img/portfolio/4.jpg"  height="150" width="150" alt="image">
                        </a>
                      
                      
                        <a href="#">
                          <img src="/img/portfolio/5.jpg" height="150" width="150" alt="image">
                        </a>
                      
                      
                        <a href="#">
                          <img src="/img/portfolio/6.jpg" height="150" width="150" alt="image">
                        </a>
                     
                     
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <img id= " img1" src="/img/portfolio/3.jpg" height="150" width="150" alt="image">
            <button>Click me</button>


							<div class="popup-gallery">
					<a href="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_b.jpg" title="The Cleaner"><img src="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_s.jpg" width="75" height="75"></a>
					<a href="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_b.jpg" title="Winter Dance"><img src="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_s.jpg" width="75" height="75"></a>
					<a href="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_b.jpg" title="The Uninvited Guest"><img src="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_s.jpg" width="75" height="75"></a>
					<a href="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_b.jpg" title="Oh no, not again!"><img src="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_s.jpg" width="75" height="75"></a>
					<a href="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_b.jpg" title="Swan Lake"><img src="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_s.jpg" width="75" height="75"></a>
					<a href="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_b.jpg" title="The Shake"><img src="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_s.jpg" width="75" height="75"></a>
					<a href="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_b.jpg" title="Who's that, mommy?"><img src="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_s.jpg" width="75" height="75"></a>
				</div>
<a class="popup-gmaps" href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom">Open Google Map</a>


</br>

</br>
</br>
</br>
</br>
	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
       Demo Modal
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


</br>
</br>
</br>
</br>
</br>
</br>

@stop