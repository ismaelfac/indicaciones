<?php

namespace App\Http\Controllers;

use App\Models\Garage;
use Illuminate\Http\Request;

/**
 * Class GarageController
 * @package App\Http\Controllers
 */
class GarageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $garages = Garage::paginate();

        return view('garage.index', compact('garages'))
            ->with('i', (request()->input('page', 1) - 1) * $garages->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $garage = new Garage();
        return view('garage.create', compact('garage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Garage::$rules);

        $garage = Garage::create($request->all());

        return redirect()->route('garages.index')
            ->with('success', 'Garage created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $garage = Garage::find($id);

        return view('garage.show', compact('garage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $garage = Garage::find($id);

        return view('garage.edit', compact('garage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Garage $garage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Garage $garage)
    {
        request()->validate(Garage::$rules);

        $garage->update($request->all());

        return redirect()->route('garages.index')
            ->with('success', 'Garage updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $garage = Garage::find($id)->delete();

        return redirect()->route('garages.index')
            ->with('success', 'Garage deleted successfully');
    }
}
