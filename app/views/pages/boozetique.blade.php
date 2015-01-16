@extends('layouts.master')

@section('content')
<div class="container boozetique-box">
    <div class="row ">
        <div class="col-md-4">
            <img src="/img/booze-logo-square.png" alt="The Boozetique">
        </div>
        <div class="col-md-8 ">
            
            {{HTML::carousel($id = "booze-carousel-main", $classes = ["large-carousel"], $folder = "booze_main");}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-7 col-md-offset-1">
            <h1 class="about-title"><span class="white-e3">Welcome to</span> <span class="pink-booze">The Boozetique</span> <span class="white-e3">@</span><span class="orange-e3">E3 Modern</span></h1>
            <p class='text-body-e3'>The Boozetique, located inside E3 Modern, is a boutique where you can purchase booze related accessories and gifts including flasks, wine bags, cocktail mixing supplies, and more! The Boozetique is the brainchild of local independent business owner Ivonna Earnest who has been actively involved with many local SLC independent businesses and artists for many years. The Boozetique was created to bring booze related accessories, gifts, and games to the public after Ivonna realized that no such place existed in SLC. E3 Modern is right next to the State Wine store, making it a convenient place to purchase a diverse array of accoutrements. From cute and quirky cocktail accessories to chic and classy wine bags and aerators, the Boozetique at E3 Modern has everything you need for parties, events, and get togethers!</p>

            
        </div>
        <div class="col-md-4" >
<!--            <h2><span class="white-e3">Featured</span> <span class="pink-booze">Item</span></h2>-->
            <img  class='booze-side-img' src="/img/booze_main/woodtable-with-stuff.jpg" alt="Table with drink shakers">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 ">
            <!--<h2><span class="white-e3">Item</span> <span class="pink-booze">Type</span></h2>-->
            
            {{HTML::carousel($id = "booze-carousel-small-1", $classes = ["small-carousel"], $folder = "booze_small_1");}}
        </div>
        <div class="col-md-4 ">
<!--            <h2><span class="white-e3">Item</span> <span class="pink-booze">Type</span></h2>-->
            
            {{HTML::carousel($id = "booze-carousel-small-2", $classes = ["small-carousel"], $folder = "booze_small_2");}}
        </div>
        <div class="col-md-4 ">
<!--            <h2><span class="white-e3">Item</span> <span class="pink-booze">Type</span></h2>-->
            
            {{HTML::carousel($id = "booze-carousel-small-3", $classes = ["small-carousel"], $folder = "booze_small_3");}}
        </div>
    </div>
</div>
@stop
