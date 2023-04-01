<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class MessageController extends Controller
{
    public function view()
    {
        $contacts = Contact::all();
        return view('backend.message', compact('contacts'));
    }
    public function delete($id){
        $message = Contact::find($id);
        if (!is_null($message)){
            $message->delete();
        }
        return redirect()->back();
    }
}
