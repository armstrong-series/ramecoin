<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\WalletModel;
use App\Helpers\Paths;
use FFI\Exception;
use Validator;
use Illuminate\Support\Facades\Hash;

class TransactionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    
}
