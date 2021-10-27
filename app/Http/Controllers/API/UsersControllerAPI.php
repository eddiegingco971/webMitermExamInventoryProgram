<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Flash;
use Response;

class UsersControllerAPI extends Controller {

    public $successStatus = 200;

    public function usersAPI() {
        $users = User::all();

        if (count($users) > 0) {
            return response()->json($users, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no posts in the database'], 404);
        }        
    }
}

?> 