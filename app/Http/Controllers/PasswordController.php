<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;


class PasswordController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('generator.password');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          /* Generating random number of passwords */
          $generator = new ComputerPasswordGenerator();
          $generator
              ->setUppercase()
              ->setLowercase()
              ->setNumbers()
              ->setSymbols(true)
              ->setLength(rand(5,10));
          $pass="";
          $pas = $generator->generatePasswords(rand(1,15));
          for ($i = 0; $i < count($pas); $i++) {
              $pass.= $pas[$i]."<br>";
          }

          /* Passing the random passwords to the view(show3.blade.php) */
          return view('generator.show3')->with(['pass' => $pass]);

    }

}
