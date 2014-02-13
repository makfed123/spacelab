@extends('layouts.main')

@section('title')

	<title>Signby.me &ndash; Pennan är mäktigare än svärdet</title>
	
@stop

@section('well')

	<div class="alert alert-info">
		<h1>Signby.me hjälper dig att skriva brev till beslutsfattare</h1>
		<p>
			Välj en kampanj för att engagera dig och kommunicera din åsikt till beslutsfattarna. Du kan skapa din egen kampanj för att driva din egen fråga. Vår unika metod gör det lättare att göra sin röst hörd och att sammarbeta med likasinnade för att engagera sig i stora och små frågor.
		</p>
		<p>
			Så fungerar det:
		</p>
		<img src="http://signby.me/spacelab/img/sbm_process.png" class="img-responsive" alt="Responsive image" >
	</div>

@stop

@section('contactform')

	<div class="alert alert-success">
		<h4>Kontakta Signby.me</h4>
		<h5>Boka demo, eller om du har frågor om tjänsten? Ange ditt ärende och hur du vill bli kontaktad:</h5>
		<form role="form" action="">
			<div class="form-group">
				<label class="sr-only" for="subject">Namn</label>
				<div class="form-group">
					<input type="name" class="form-control" id="name" placeholder="Namn">
				</div>
	
				<label class="sr-only" for="">Epost</label>
				<div class="form-group">
					<input type="email" class="form-control" id="subject" placeholder="Epost">
				</div>
	
				<label class="sr-only" for="subject">Telefon</label>
				<div class="form-group">
					<input type="tel" class="form-control" id="phone" placeholder="Tel">
				</div>
	
				<label class="sr-only" for="subject">Meddelande</label>
				<div class="form-group">
					<textarea type="text" class="form-control" rows="2" id="subject" placeholder="Meddelande: Demo? Ring tillbaka?"></textarea>
				</div>
				
				<span class="btn-group">
					<button type="submit" class="btn btn-warning">
						Skicka
					</button> 
				</span>
			</div><!-- /form-group -->
		</form>
	</div><!-- /well -->

@stop

@section('content')
	
	<div class="bs-example">
		<ul class="media-list">
			@foreach($collections as $collection)
			<li class="media" style="margin: 15px; border-bottom: 2px solid #BCE8F1; padding-bottom: 10px;">
	        	<a href="#" class="pull-right">
	            	<img style="margin: 0 10px 10px 0; padding: 0px; box-shadow:4px 4px 2px 2px #CCCCCC; width: 260px;" class="pull-right img-responsive img-rounded" src="http://signby.me/spacelab/img/{{{ $collection->image }}}">
	          	</a>
	          	<div class="media-body">
	            	<h2 class="media-heading"><a href="campaign/{{{ $collection->id }}}">{{{ $collection->collection_heading }}}</a></h2>
	            	<p>
	            		{{{ $collection->preintro }}}
	            	</p>
	            	<a style="padding-bottom: 10px;" class="btn btn-primary" href="campaign/{{{ $collection->id }}}">Till kampanjen<span class="glyphicon glyphicon-chevron-right"></span></a>
	          	</div>
	        </li>
	        @endforeach
		</ul>
	</div>

@stop
