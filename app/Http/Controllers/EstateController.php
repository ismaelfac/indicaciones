<?php

namespace App\Http\Controllers;

use App\Models\Estate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class EstateController
 * @package App\Http\Controllers
 */
class EstateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estates = Estate::select('id','address')->get();
        return response()->json($estates);
        //return view('estate.index', compact('estates'))->with('i', (request()->input('page', 1) - 1) * $estates->perPage());
    }

    public function findEstateAddress($address){
        $estates = Estate::where('address',$address)->get();
        return response()->json($estates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estate = new Estate();
        return view('estate.create', compact('estate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();
        dd($request->all());
        request()->validate(Estate::$rules);
        $estate = Estate::create($request->all());
        return response()->json($estate);        
        //return redirect()->route('estates.index')->with('success', 'Estate created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estate = Estate::find($id);
        $garages = $estate->garages;
        return response()->json([
            'estate' => $estate,
            'garages' => $garages
        ]);
        //return view('estate.show', compact('estate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estate = Estate::find($id);

        return view('estate.edit', compact('estate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Estate $estate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estate $estate)
    {
        request()->validate(Estate::$rules);

        $estate->update($request->all());

        return redirect()->route('estates.index')
            ->with('success', 'Estate updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estate = Estate::find($id)->delete();

        return redirect()->route('estates.index')
            ->with('success', 'Estate deleted successfully');
    }
}
