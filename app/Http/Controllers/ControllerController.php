<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Controller as ConsoleController;
use App\Models\Shoe;
use Illuminate\Support\Facades\DB;

class ControllerController extends Controller
{
    public function index() {
        $id = auth()->user()->id;

        $shoes = Shoe::where('user_id', $id)->get();
        $controllers = ConsoleController::where('user_id', $id)->get();

        return view('like', [
            'shoes' => $shoes, 
            'controllers' => $controllers
        ]);
    }

    public function like(Request $request) 
    {
        $id = auth()->user()->id;

        $controller = new ConsoleController();

        $controller->user_id = $id;
        $controller->controller = $request->controller;
        $controller->button = $request->button;
        $controller->pad = $request->pad;
        $controller->middle = $request->middle;
        $controller->sides = $request->sides;

        $controller->save();

        return redirect('/controllers');
    }

    public function delete(int $controllerId) {
        $controller = ConsoleController::find( $controllerId );
        $controller->delete();

        return redirect('/like');
    }
}
