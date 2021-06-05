<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $fillable = ["name"];

    public function customers()
    {
        return $this->belongsTo(Customers::class,"cust_id","id");
    }
    
}
