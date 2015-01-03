@extends('layouts.master')

@section('content')
<div class="container">


    <div class="row">
        <div class="col-md-5 e3-front-page-box">
            <a href="/gallery"><img class="logo" src="/img/e3mod-logo.png" alt="E3 Modern Art and Hi-Fi Audio"/></a>
            <!-- id = e3-carousel-main class = large-carousel -->
            {{$e3Carousel}}
        </div>
        <div class="col-md-5 col-md-offset-1 booze-front-page-box">
            <a href="/boozetique"><img class="logo" src="/img/booze-logo-square.png" alt="The Boozetique"/></a>
            <!-- id = booze-carousel-main class = large-carousel -->
            {{$boozeCarousel}}
        </div>
    </div>
</div>
@stop