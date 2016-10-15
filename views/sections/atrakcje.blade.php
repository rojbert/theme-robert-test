@extends('sections.layouts.one-column')

@section('section-content-col1') 
 
 	<div class="imgLiquidFill imgLiquid" style="width:50%; height:60vh;">
    	<img alt="image liquid test" src="http://img.wallpaperfolder.com/f/6AA7939A3317/landscape-nature-animals-2000.jpg" />
	</div>
 
    @foreach($section->atrakcje as $atrakcja)
    
        <div>
            {{ $atrakcja->name }}<br />
            {{ $atrakcja->subtitle }}
        </div>
        
    @endforeach
    
@overwrite