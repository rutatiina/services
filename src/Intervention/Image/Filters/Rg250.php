<?php

namespace App\Intervention\Image\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class Rg250 implements FilterInterface
{
    public function applyFilter(Image $image)
    {
        return $image->fit(250, 250);//->greyscale();
    }
}
