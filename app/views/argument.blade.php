@extends('layouts.1-column')

@section('title')
	<title>Signby.me &ndash; Pennan är mäktigare än svärdet</title>
@stop

@section('content')
	<div class="panel panel-success">
		<div class="panel-heading">
			<h2>{{{ $campaign->collection_heading }}}</h2>
		</div>
		<div class="panel-body">
			<form role="form">
				@foreach($arguments as $item)
					@if ($item->paragraph_type == 'selectable')
						<div class="checkbox">
							<label>
								<input type="checkbox">
								{{{ $item->paragraph_text }}} </label>
						</div>
					@elseif ($item->paragraph_type == 'unselectable')
						<label style="margin: 20px 0 0;" class="text-primary">
							{{{ $item->paragraph_text }}}
						</label>
					@elseif ($item->paragraph_type == 'textarea')
						<div class="form-group">
							<label>{{{ $item->paragraph_text }}}</label>
							<input type="text" class="form-control" style="width: 200px;">
						</div>
					@endif
				@endforeach
			</form>
		</div>
	</div>
    
	<p align="center">
		<button type="submit" class="btn btn-warning">Till argumenten / To the arguments</button>
	</p>

@stop

@section('contactform')
@stop
