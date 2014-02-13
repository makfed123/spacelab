@extends('layout')

@section('title')
<title>Signby.me &ndash; Pennan är mäktigare än svärdet</title>
@stop

@section('content')
<form method="post" action="k/{{{ $collection->collection_link }}}/spara">
	<p>
		Kampanjnamn:
		<input name="collection_name" />
	</p>
	<p>
		Kampanjlänk (URL):
		<input name="collection_link" />
	</p>
</form>
<?php $collection->save ?>
@stop
