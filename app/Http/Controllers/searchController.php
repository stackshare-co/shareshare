<?php

namespace App\Http\Controllers;

use App\Models\Access\User\User;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class searchController extends Controller
{
    public function search(Request $request)
    {
        $text = $request->title;
        $users = User::all();
        $result_question = DB::table('questions')->where('title', 'like', '%' . $text . '%')->get();
        $notification_nav_bars = Notification::where('id_user_passive', \auth()->id())->get();
            return view('frontend/layouts_new/home_page/index', compact('results', 'result_question', 'result_group','users', 'notification_nav_bars'));

        }

}
