@extends('layouts.main')

@section('title')
	<title>Signby.me &ndash; Pennan är mäktigare än svärdet</title>
@stop

@section('content')
	
	
	<div class="jumbotron">
		<h1>{{{ $collection->collection_heading }}}</h1>
		<p>
			{{ str_replace("\n", '</p><p>', $collection->intro) }}
		</p>
		<p>
			<a class="btn btn-warning btn-lg" role="button" href="/argument/{{{ $collection->id }}}">Till argumenten / To the arguments</a>
		</p>
	</div>

@stop

@section('contactform')
	<div class="well">
		<div class="row">
			<div class="col-md-10">
				<img style="margin: 10px; padding: 0px; box-shadow:4px 4px 2px 2px #CCCCCC; width: 260px;" class="pull-right img-responsive" src="http://signby.me/spacelab/img/{{{ $collection->image }}}">
			</div>
		</div>
	</div>
	
	<div class="panel panel-info">
		<div class="panel-heading">
			<h2 class="panel-title">Contribute:</h2>
		</div>
		<div class="panel-body">
			<form class="form-horizontal" role="form">
				<label class="col-sm-12">Suggest a new argument</label>
				<label class="col-sm-12">Suggest a new argument</label>
				<div class="form-group">
	    			<label class="col-sm-4 control-label">Link here:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="form-group">
	    			<label class="col-sm-6 control-label">Spread the word:</label>
					<div class="col-sm-5">
						
					</div>
				</div>
			</form>
		</div>
	</div>
	
	<div class="panel panel-success">
		<div class="panel-heading">
			<h2 class="panel-title">Gör skillnad - Skapa en kampanj:</h2>
		</div>
		<div class="panel-body">
			<p>Har du en fråga du brinner för? Du kan lätt skapa din egen kampanj och påverka beslutsfattare. Det är gratis.</p>
			<form class="form-horizontal" role="form">
				<div class="form-group">
	    			<div class="col-sm-8">
	    				<input type="text" class="form-control">
	    			</div>
					<div class="col-sm-4">
						<button type="submit" class="btn btn-default">Sign in</button>
					</div>
				</div>
				<div class="form-group">
	    			<label class="col-sm-12">Epostadressen blir ditt användarnamn</label>
				</div>
			</form>
		</div>
	</div>
	
@stop
