<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class ImageHelper {
    public static function folderContents($folder) {
        $images = glob(public_path() . '/img/'.$folder.'/*.{jpg,png,jpeg,gif}', GLOB_BRACE);
        $imgArray = [];
        foreach ($images as $image) {
            array_push($imgArray, '/img/'.$folder.'/'.basename($image));
        }
        return $imgArray;
    }
}
