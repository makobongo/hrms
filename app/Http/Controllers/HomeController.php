<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application employees.
     *
     * @return Renderable
     */
    public function employees()
    {
        return  view('employees');
    }

    /**
     * Show the application reporting.
     *
     * @return Renderable
     */
    public function reporting()
    {
        return view('reporting');
    }

    /**
     * Show the application benefits.
     *
     * @return Renderable
     */
    public function benefits()
    {
        return view('benefits');
    }

    /**
     * Show the application applicants.
     *
     * @return Renderable
     */
    public function applicants()
    {
        return view('applicants');
    }

    /**
     * Show the application shortlisted.
     *
     * @return Renderable
     */
    public function shortlisted()
    {
        return view('shortlisted');
    }

    /**
     * Show the application profile.
     *
     * @return Renderable
     */
    public function profile()
    {
        return view('profile');
    }

}
