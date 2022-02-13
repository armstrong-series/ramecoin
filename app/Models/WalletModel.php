<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalletModel extends Model
{
    use HasFactory;
    protected $table = "wallet";


    protected $appends = [
        'created_date'
    ];



    public function getCreatedDateAttribute(){
        return time_elapsed_string($this->created_at);
    }
}
