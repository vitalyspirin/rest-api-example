<?php

namespace App\Models;

class DataModel extends Model
{
    public function get()
    {
        $now = new \DateTime();
        return $now->format('Y-m-d H:i:s'); 
    }
    
}
