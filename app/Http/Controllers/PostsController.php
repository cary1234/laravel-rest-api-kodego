<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Customer;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function search(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $posts = Attendance::select('*')
            ->where('employee_id_pk', '=', "$search")
            ->orderBy('created_at', 'desc')
            ->get();
        \Log::info($posts);









        // Return the search view with the resluts compacted
        return response()->json($posts);
    }


    public function login(Request $request)
    {
        // Get the search value from the request
        $email = $request->input('email');
        $password = $request->input('password');

        // Search in the title and body columns from the posts table
        $posts = Customer::query()
            ->where('email', '=', "$email")
            ->where('password', '=', "$password")
            ->get();

        // Return the search view with the resluts compacted
        return response()->json($posts);
    }
}
