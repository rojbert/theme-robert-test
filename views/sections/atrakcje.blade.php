@extends('sections.layouts.one-column')

@section('section-content-col1') 



<!--Thumbnail Navigation-->
	<div id="prevthumb"></div>
	<div id="nextthumb"></div>
	
	<!--Arrow Navigation-->
	<a id="prevslide" class="load-item"></a>
	<a id="nextslide" class="load-item"></a>
	
	<div id="thumb-tray" class="load-item">
		<div id="thumb-back"></div>
		<div id="thumb-forward"></div>
	</div>
	
	<!--Time Bar-->
	<div id="progress-back" class="load-item">
		<div id="progress-bar"></div>
	</div>
	
	<!--Control Bar-->
	<div id="controls-wrapper" class="load-item" >
		<div id="controls">
			
			<a id="play-button"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
		
			<!--Slide counter-->
			<div id="slidecounter">
				<span class="slidenumber"></span> / <span class="totalslides"></span>
			</div>
			
			<!--Slide captions displayed here-->
			<div id="slidecaption"></div>
			
			<!--Thumb Tray button-->
			<a id="tray-button"><i class="fa fa-spinner" aria-hidden="true"></i></a>
			
			<!--Navigation-->
			<ul id="slide-list"></ul>
			
		</div>
	</div>
    


 
 	<div class="imgLiquidFill imgLiquid" style="width:50%; height:60vh;">
    	<img alt="" src="http://img.wallpaperfolder.com/f/6AA7939A3317/landscape-nature-animals-2000.jpg" />
	</div>
 
    @foreach($section->atrakcje as $atrakcja)
    
        <div>
            {{ $atrakcja->name }}<br />
            {{ $atrakcja->subtitle }}
        </div>
        
    @endforeach
    
@overwrite