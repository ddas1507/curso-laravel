@extends('site.templates.template1')

@section('content')

	<h1>Página Inícial</h1>

	@if($var1 == 123)
		<p>é igual</p>
	@else
		<p>é diferente</p>
	@endif

	@unless($var1 == 1234)
		<p>Não é igual</p>
	@endunless

	@for($i = 0;  $i < 10; $i++)
		<p>For: {{$i}}</p>
	@endfor

	@if (count($arrayData > 0))
		@foreach($arrayData as $array)
			<p>Foreach: {{$array}}</p>
		@endforeach
	@else
		<p>Não existem itens no foreach</p>
	@endif

	@forelse($arrayData as $array)
		<p>Foreach: {{$array}}</p>
	@empty
		<p>Não existem itens no forelse</p>
	@endforelse


@endsection

