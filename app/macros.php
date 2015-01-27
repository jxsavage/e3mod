<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

HTML::macro('contactForm', function(){
    return " ";
});

HTML::macro('carousel', function($id, $classes = [''], $folder ){
    $images = glob(public_path() . '/img/'.$folder.'/*.{jpg,png,jpeg,gif}', GLOB_BRACE);
    $imgArray = [];
    foreach ($images as $image) {
        array_push($imgArray, '/img/'.$folder.'/'.basename($image));
    }

    $indicators = "";

    for($i = 0; $i < count($imgArray); $i++){
        if($i != 0){
            $indicators .= "<li data-target=\"#".$id."\" data-slide-to=\"".$i."\"></li>\n";
        }
        else{
            $indicators .= "<li data-target=\"#".$id."\" data-slide-to=\"".$i."\" class=\"active\"></li>\n";
        }
    }

    $wrappers = "";

    for($i = 0; $i < count($imgArray); $i++){
        if($i != 0){
            $wrappers .= "<div class=\"item\">
                            <img src=\"".$imgArray[$i]."\" alt=\"...\">
                            <div class=\"carousel-caption\">
                                <!--Picture caption-->
                            </div>
                          </div>";
        }
        else{
            $wrappers .= "<div class=\"item active\">
                            <img src=\"".$imgArray[$i]."\" alt=\"...\">
                            <div class=\"carousel-caption\">
                                <!--Picture caption-->
                            </div>
                          </div>";
        }
    }

    $htmlClasses = "";

    foreach($classes as $class){
        $htmlClasses .= " ".$class;
    }

    $html = "<div id=\"".$id."\" class=\"carousel slide".$htmlClasses."\" data-ride=\"carousel\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">".
            $indicators   
            ."</ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">".
            $wrappers
                ."<!--Picture caption-->
            </div>

            <!-- Controls -->
            <a class=\"left carousel-control\" href=\"#".$id."\" role=\"button\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"right carousel-control\" href=\"#".$id."\" role=\"button\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>";

    return $html;
});