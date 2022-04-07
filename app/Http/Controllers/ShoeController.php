<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Shoe;

class ShoeController extends Controller
{
    public function edit(Request $request)
    {
        $user = auth()->user();

        return view('edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required|min:1|max:255',
            'lastname' => 'required|min:1|max:255',
            'username' => 'required|min:1|max:20',
            'password' => 'required|min:10',
        ]);

        $user = auth()->user();

        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $username = $request->username;
        $password = $request->password;

        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->username = $username;
        $user->password = bcrypt($password);

        $user->save();

        return redirect('/');
    }

    public function like(Request $request) 
    {
        $id = auth()->user()->id;

        $shoe = new Shoe();

        $shoe->user_id = $id;
        $shoe->shoe = $request->shoe;
        $shoe->sole = $request->sole;
        $shoe->logo = $request->logo;
        $shoe->outer1 = $request->outer;
        $shoe->exterior = $request->exterior;

        $shoe->save();

        return redirect('/shoes');
    }

    public function delete(int $shoeId) {
        $shoe = Shoe::find( $shoeId );
        $shoe->delete();

        return redirect('/like');
    }
    
}