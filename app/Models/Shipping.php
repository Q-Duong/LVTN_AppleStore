<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'shipping_first_name','shipping_last_name','shipping_address', 'shipping_phone','shipping_email','shipping_notes','shipping_method','matp','maqh','maxp'
    ];
    protected $primaryKey = 'shipping_id';
 	protected $table = 'tbl_shipping';
}
