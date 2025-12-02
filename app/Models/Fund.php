<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    protected $fillable = [
        'fund_id', 'fund_name', 'category'
    ];
}

?>
