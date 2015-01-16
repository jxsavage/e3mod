@extends('layouts.master')

@section('content')
<div class="container">


    <div class="row">
        <div class="col-md-5 e3-front-page-box">
            <a href="/gallery"><img class="logo" src="/img/e3mod-logo.png" alt="E3 Modern Art and Hi-Fi Audio"/></a>
            {{HTML::carousel($id = "e3-carousel-main", $classes = ["large-carousel"], $folder = "e3mod_main");}}
        </div>
        <div class="col-md-5 col-md-offset-1 booze-front-page-box">
            <a href="/boozetique"><img class="logo" src="/img/booze-logo-square.png" alt="The Boozetique"/></a>
            {{HTML::carousel($id = "booze-carousel-main", $classes = ["large-carousel"], $folder = "booze_main");}}
        </div>
    </div>
</div>
@stop