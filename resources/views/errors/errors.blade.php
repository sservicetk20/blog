@if(count($errors) > 0)
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
	@foreach($errors->all() as $error)
 		<a href="javascript:void(0)" class="alert-link">{{$error}}<br></a> 
	@endforeach
	</div>
@endif