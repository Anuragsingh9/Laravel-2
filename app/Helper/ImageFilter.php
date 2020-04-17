<?php

namespace App\Helper;
use Intervention\Image\Filters\FilterInterface;
use Intervention\Image\Image;


class ImageFilter implements FilterInterface{
    public function applyFilter (Image $image){
        return $image->fit(500)->blur(1)->greyscale()->colorize(0, 30, 0);
    }

}