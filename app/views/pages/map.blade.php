@extends('layouts.master')

@section('content')
<div class="container e3mod-box">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 about-title">
            <h1><span class="white-e3">Map of</span> <span class="orange-e3">E3 Modern</span> <span class="white-e3">and</span> <span class="pink-booze">The Boozetique</span></h1>
        </div>
        <div class="col-md-10 col-md-offset-1 text-body-e3">
            <div id="map-container"></div>
        </div>
    </div>
</div>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="/js/map.js"></script>
@stop