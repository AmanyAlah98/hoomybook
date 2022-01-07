<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function bookinfos () {
    	return $this -> hasMany ('APP\Bookinfo' , 'category_id');


    }
}
