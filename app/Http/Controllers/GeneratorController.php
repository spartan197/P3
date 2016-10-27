<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GeneratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('generator.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('generator.loremipsum');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'NoOfParagraphs' => 'required|min:1|max:99|numeric',
        ]);
        $NoOfParagraphs = $request->input('NoOfParagraphs');
        $generator = new \Badcow\LoremIpsum\Generator();
        $txt = $generator->getParagraphs($NoOfParagraphs);
        $text = implode('<p>',$txt);
        return view('generator.show1')->with(['text' => $text]);
    }
}
