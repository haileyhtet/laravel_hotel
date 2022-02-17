<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'address',
        'job',
        'birthdate',
        'user_id',
        'gender'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
   
  

    
    public static function getAllCustomer(){
        $records = DB::table('customers')->select('name','address','job')->get()->toArray();
        return $records;
    }
}
