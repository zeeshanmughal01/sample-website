<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $user = Registration::create([
            'phoneNo' => $request->phoneNo,
            'providerId' => $request->providerId,
            'ownerName' => $request->ownerName,
            'emailAddress' => $request->emailAddress,
            'idNumber' => $request->idNumber,
            'idExpiryDate' => $request->idExpiryDate,
            'idPicture' => $request->file('idPicture')->store('userid'),
            'storeName' => $request->storeName,
            'storeCategory' => $request->storeCategory,
            'shopeAddress' => $request->shopeAddress,
            'shopeLatitude' => $request->shopeLatitude,
            'shopeLongitude' => $request->shopeLongitude,
            'shopeLogo' => $request->file('shopeLogo')->store('shopeLogo'),
            'shopeCoverPicture' => $request->file('shopeCoverPicture')->store('shopeCoverPicture'),
        ]);
        // $user->save();
        dd($user->save());
    }
}
