<?php

namespace App\Http\Controllers;

use App\Models\{Contract, Document, Estate};
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PDF;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contracts = Contract::paginate();
        $documents = Document::paginate();
        //$estate = Estate::find($contracts->id);
        //dd($estate->garages);
        return view('home', compact('contracts', 'documents'))
            ->with('i', (request()->input('page', 1) - 1) * $contracts->perPage());
    }
}
