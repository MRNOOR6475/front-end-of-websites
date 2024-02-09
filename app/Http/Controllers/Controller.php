<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    // HOme Pagr view
    public function showhome()
    {
        return view('frontend.home');
    }
    // About-US page View
    public function showabout()
    {
        return view("frontend.about-us");
    }
    // Contact Page View
    public function showcontact()
    {
        return view("frontend.contact-us");
    }
    // Service page View
    public function showservice()
    {
        return view("frontend.service");
    }
    // Reservation page view
    public function showreservation()
    {
        return view('frontend.reservation');
    }
    // Login Page View
    public function showlogin()
    {
        return view('frontend.login');
    }
    // Register PAge View
    public function showregister()
    {
        return view('frontend.register');
    }
}
