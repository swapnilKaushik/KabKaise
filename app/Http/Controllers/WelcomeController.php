<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $photos = [
            (object) [
                'image' => "https://quomodosoft.com/html/newsprk/assets/img/bg/black_white1.jpg",
                'title' => "Success is not a good food",
                'description' => "dskjfhksd dlfkjds fdkjgskfd ldkfjgbdsfk dkfjgkldfjgkjd lkjfgdkfb dgkjdfgd fgdkfjgdf gdflkjgdkfjgdf gldkf gdfjng ldfgjdfg df"
            ], (object) [
                'image' => 'https://quomodosoft.com/html/newsprk/assets/img/bg/black_white2.jpg',
                'title' => "Success is not a good food",
                'description' => "dskjfhksd dlfkjds fdkjgskfd ldkfjgbdsfk dkfjgkldfjgkjd lkjfgdkfb dgkjdfgd fgdkfjgdf gdflkjgdkfjgdf gldkf gdfjng ldfgjdfg df"
            ],(object)[
                'image' => 'https://quomodosoft.com/html/newsprk/assets/img/video/video1.jpg',
                'title' => "Success is not a good food",
                'description' => "dskjfhksd dlfkjds fdkjgskfd ldkfjgbdsfk dkfjgkldfjgkjd lkjfgdkfb dgkjdfgd fgdkfjgdf gdflkjgdkfjgdf gldkf gdfjng ldfgjdfg df"
            ]
        ]; 
        
        return view('welcome', [
            'photos' => $photos
        ]);
    }
}
