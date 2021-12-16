<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $fillables = [
        'phoneNo',
        'providerId',
        'ownerName',
        'emailAddress',
        'idNumber',
        'idExpiryDate',
        'idPicture',
        'storeName',
        'storeCategory',
        'shopeAddress',
        'shopeLatitude',
        'shopeLongitude',
        'shopeLogo',
        'shopeCoverPicture',
    ];
}
