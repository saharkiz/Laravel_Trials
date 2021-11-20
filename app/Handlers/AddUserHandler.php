<?php 
namespace App\Handlers;

use Illuminate\Http\Request;

use App\Models\Useraccount;
class AddUserHandler
{
    public function addUser()
    {
        return Useraccount::all();
    }
}