@extends('sections.layouts.one-column')

@section('section-content-col1') 

    @foreach($section->atrakcje as $atrakcja)
    
        <div>
            {{ $atrakcja->name }}<br />
            {{ $atrakcja->subtitle }}
        </div>
        
    @endforeach
    
@overwrite