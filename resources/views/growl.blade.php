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