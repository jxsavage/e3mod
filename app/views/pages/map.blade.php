@extends('layouts.master')

@section('content')
<div class="container e3mod-box">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 about-title">
            <h1>
                <span class="white-e3">Map of</span>
                <span class="orange-e3">E3 Modern</span>
                <span class="white-e3">and</span>
                <span class="pink-booze">The Boozetique</span>
            </h1>
        </div>
        <div class="col-md-8 col-md-offset-2 text-body-e3">
            <p>
                E3 Modern and The Boozetique are located at 315 East Broadway, Salt Lake City, UT, 84111.
            </p>
            <p>
                Hours: 11:00 AM - 7:00 PM Monday through Saturday 
            </p>
            <p>
                Telephone: (801)363-3939
            </p>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 text-body-e3">
            <div id="map-container"></div>
        </div>
    </div>
</div>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="/js/map.js"></script>
@stop