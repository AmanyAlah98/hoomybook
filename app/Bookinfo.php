<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookinfo extends Model
{
    public function category(){

    	return $this -> belongsTo ('APP\category','category_id')
    }
}
