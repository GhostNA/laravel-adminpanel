<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function index()
    {
        return view('alerts.search');
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = "";
            $products = DB::table('users')->where('id', '=', "$request->search")->get();
            if ($products) {
                foreach ($products as $key => $product) {
                    $output .= '<tr>' .
                        '<td>' . $product->id . '</td>' .
                        '<td>' . $product->name . '</td>' .
                        '<td>' . $product->role_id . '</td>' .
                        '</tr>';
                }
                return Response($output);
            }
        }
    }
}
