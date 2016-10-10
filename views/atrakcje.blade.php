@extends('layouts.default')

@section('content')
    <div class="full-image">

	<h1><span>{{ $data->page->title }}</span></h1>   
    
     </div>
    
    @include('includes.sections')
    
   
    <!-- Jeśli w presecie ustawie "show-colors" na true, to powinno to się pojaiwc dopiero -->
    <div class="debug-colors">
	<div class="c-1">@dark-color</div>
    <div class="c-2">@light-color</div>
    <div class="c-3">@brand-primary</div>
    <div class="c-4">@brand-success</div>
	</div>
    
@endsection

