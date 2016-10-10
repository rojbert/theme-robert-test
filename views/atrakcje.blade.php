@extends('layouts.default')

<div class="debug-colors">
	<div class="c-1">@dark-color</div>
    <div class="c-2">@light-color</div>
    <div class="c-3">@brand-primary</div>
    <div class="c-4">@brand-success</div>
</div>

@section('content')
	<h1>{{ $data->page->title }}</h1>   
    @include('includes.sections')
@endsection

