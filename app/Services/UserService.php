<?php

namespace App\Services;

use App\Models\Url;
use App\Models\User;
use App\Services\QrCodeService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class UserService
{
    public function __construct() {}


    public function Logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        
    }

    public function all_user()
    {
        return User::all()->count();
    }
}
