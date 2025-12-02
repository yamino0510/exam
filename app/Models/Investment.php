<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $fillable = [
        'investment_id', 'investor_id', 'fund_id', 'amount'
    ];
}

?>
