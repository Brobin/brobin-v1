<div class="row">
	<div class="col-md-12">
		@if($errors->first())
			<div class="alert alert-danger" role="alert">
				<p>{{ $errors->first('title') }}</p>
				<p>{{ $errors->first('url') }}</p>
				<p>{{ $errors->first('content') }}</p>
			</div>
		@endif
	</div>
</div>