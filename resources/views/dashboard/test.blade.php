@extends('layouts.dashboard')
@section('heading', "Test")
@section('content')


<select style="width:200px;"></select>


@section('scripts')
	<script type="text/javascript">
		$(function(){
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
	</script>
@endsection

@stop