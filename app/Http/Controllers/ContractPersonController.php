<?php

namespace App\Http\Controllers;

use App\Models\ContractPerson;
use Illuminate\Http\Request;

/**
 * Class ContractPersonController
 * @package App\Http\Controllers
 */
class ContractPersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contractPeople = ContractPerson::paginate();

        return view('contract-person.index', compact('contractPeople'))
            ->with('i', (request()->input('page', 1) - 1) * $contractPeople->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contractPerson = new ContractPerson();
        return view('contract-person.create', compact('contractPerson'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ContractPerson::$rules);

        $contractPerson = ContractPerson::create($request->all());

        return redirect()->route('contract-people.index')
            ->with('success', 'ContractPerson created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contractPerson = ContractPerson::find($id);

        return view('contract-person.show', compact('contractPerson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contractPerson = ContractPerson::find($id);

        return view('contract-person.edit', compact('contractPerson'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ContractPerson $contractPerson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContractPerson $contractPerson)
    {
        request()->validate(ContractPerson::$rules);

        $contractPerson->update($request->all());

        return redirect()->route('contract-people.index')
            ->with('success', 'ContractPerson updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $contractPerson = ContractPerson::find($id)->delete();

        return redirect()->route('contract-people.index')
            ->with('success', 'ContractPerson deleted successfully');
    }
}
