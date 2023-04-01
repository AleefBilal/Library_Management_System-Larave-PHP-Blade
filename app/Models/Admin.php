<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

//     protected $fillable = ['name', 'email', 'password'];

//     public function authenticate($email, $password)
//     {
//         $admin = Admin::where('email', $email)->first();

//         if (!$admin) {
//             return false;
//         }

//         if (password_verify($password, $admin->password)) {
//             return true;
//         }

//         return false;
// }
}