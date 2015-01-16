@extends('layouts.master')

@section('content')

<div class="container e3mod-box">
    <div class="row ">
        <div class="col-md-4">
            <img src="/img/e3mod-logo.png" alt="E3 Modern">
        </div>
        <div class="col-md-8 ">
            {{HTML::carousel($id = "e3-carousel-main", $classes = ["large-carousel"], $folder = "e3mod_main");}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-7 col-md-offset-1 ">
            <h1 class="about-title"><span class="white-e3">Welcome to</span> <span class="orange-e3">E3 Modern</span></h1>
            <p class="text-body-e3">E3 Modern is a multi sensory gallery experience, showcasing the work of a diverse group of local Salt Lake City artists, craftsmen, and entrepreneurs. E3 Modern specializes in renting out its unique modern venue for events such as wedding receptions, parties, and business events, as well as providing affordable artist spaces in a central SLC location. Come on in and enjoy sitting in the handcrafted artisan furniture by Sol Adams and listen to the custom built Hi-Fi speaker and vacuum tube audio system by Josh Stippich. You can personally select what music you want to hear by choosing from the vast collection of vintage vinyl, or you can bring any of your own music from home. Prepare to be blown away by the aesthetic beauty and pure, warm sound like nothing you’ve heard before! Take a stroll through the gallery and marvel at the selection of fine art and modern furniture from various local artists. You can also purchase all of your wine, beer & cocktail accessories, gifts, and more from the Boozetique located inside!</p>
        </div>
        <div class="col-md-4" >
            <h2><span class="white-e3">Can you</span> <span class="orange-e3">Draw?</span></h2>
            <img  src="/img/entry-call.png" alt="Call for Entries.">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 ">
            <h2><span class="white-e3">Modern</span> <span class="orange-e3">Furniture</span></h2>
            {{HTML::carousel($id = "e3-carousel-small-1", $classes = ["small-carousel"], $folder = "e3mod_small_1");}}

        </div>
        <div class="col-md-4 ">
            <h2><span class="white-e3">Unique</span> <span class="orange-e3">Fixtures</span></h2>
            {{HTML::carousel($id = "e3-carousel-small-2", $classes = ["small-carousel"], $folder = "e3mod_small_2");}}
        </div>
        <div class="col-md-4 ">
            <h2><span class="white-e3">Local</span> <span class="orange-e3">Art</span></h2>
            {{HTML::carousel($id = "e3-carousel-small-3", $classes = ["small-carousel"], $folder = "e3mod_small_3");}}
        </div>
    </div>
</div>
@stop