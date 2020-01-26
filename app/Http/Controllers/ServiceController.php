<?php


namespace App\Http\Controllers;

class ServiceController extends Controller
{
    /**
     * Display a listing of the hosting
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('pages.services.index');
    }
}
