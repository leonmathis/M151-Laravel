<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Controller as ConsoleController;
use App\Models\Shoe;

class AdminController extends Controller
{
    public function index() {
        $shoes = Shoe::all();
        $controllers = ConsoleController::all();
        $users = User::all();

        return view('admin', [
            'shoes' => $shoes, 
            'controllers' => $controllers, 
            'users' => $users
        ]);
    }

    public function deleteCont(int $controllerId) {
        $controller = ConsoleController::find( $controllerId );
        $controller->delete();

        return redirect('/admin');
    }

    public function deleteShoe(int $shoeId) {
        $shoe = Shoe::find( $shoeId );
        $shoe->delete();

        return redirect('/admin');
    }

    public function deleteUser(int $userId) {
        $user = User::find( $userId );
        $shoe = Shoe::where('user_id', $userId)->get();
        $controller = ConsoleController::where('user_id', $userId)->get();

        if (isset($shoe)) {
            $shoe->each->delete();
        }

        if (isset($controller)) {
            $controller->each->delete();
        }

        $user->delete();

        return redirect('/admin');
    }

    public function editController(int $controllerId) {
        $controller = ConsoleController::find( $controllerId );

        return view('editAdmin', [
            'controller' => $controller
        ]);
    }

    public function editUser(int $userId) {
        $user = User::find( $userId );

        return view('editAdmin', [
            'user' => $user
        ]);
    }

    public function editShoe(int $shoeId) {
        $shoe = Shoe::find( $shoeId );

        return view('editAdmin', [
            'shoe' => $shoe
        ]);
    }

    public function updateUser(Request $request, int $userId)
    {
        $validated = $request->validate([
            'firstname' => 'required|min:1|max:255',
            'lastname' => 'required|min:1|max:255',
            'username' => 'required|min:1|max:20',
            'password' => 'required|min:10',
        ]);

        $user = User::find( $userId );

        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $username = $request->username;
        $password = $request->password;

        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->username = $username;
        $user->password = bcrypt($password);

        $user->save();

        return redirect('/admin');
    }

    public function updateShoe(Request $request, int $shoeId)
    {
        $validated = $request->validate([
            'shoe' => 'required|min:1|max:255',
            'sole' => 'required|min:1',
            'logo' => 'required|min:1',
            'outer1' => 'required|min:1',
            'exterior' => 'required|min:1',
        ]);

        $shoe = Shoe::find( $shoeId );

        $name = $request->shoe;
        $sole = $request->sole;
        $logo = $request->logo;
        $outer1 = $request->outer1;
        $exterior = $request->exterior;

        $shoe->shoe = $name;
        $shoe->sole = $sole;
        $shoe->logo = $logo;
        $shoe->outer1 = $outer1;
        $shoe->exterior = $exterior;

        $shoe->save();

        return redirect('/admin');
    }

    public function updateController(Request $request, int $controllerId)
    {
        $validated = $request->validate([
            'controller' => 'required|min:1|max:255',
            'button' => 'required|min:1',
            'pad' => 'required|min:1',
            'middle' => 'required|min:1',
            'sides' => 'required|min:1',
        ]);

        $controller = ConsoleController::find( $controllerId );

        $name = $request->controller;
        $button = $request->button;
        $pad = $request->pad;
        $middle = $request->middle;
        $sides = $request->sides;

        $controller->controller = $name;
        $controller->button = $button;
        $controller->pad = $pad;
        $controller->middle = $middle;
        $controller->sides = $sides;

        $controller->save();

        return redirect('/admin');
    }
}
