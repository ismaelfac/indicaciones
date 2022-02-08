<?php

namespace App\Http\Controllers;

use App\Models\{ Contract, ContractPerson, Person };
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class ContractPersonController
 * @package App\Http\Controllers
 */
class ContractPersonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        $people = Person::all();
        $contracts = Contract::all();
        return view('contract-person.create', compact('contractPerson', 'people', 'contracts'));
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
        request()->validate(ContractPerson::$rules);

        $contractPerson = new ContractPerson;
        $contractPerson->contract_id = $request->contract_id;
        $contractPerson->person_id = $request->person_id;
        $contractPerson->typePerson = $request->typePerson;
        $contractPerson->user_id = $user_id;
        $contractPerson->isActive = true;
        $contractPerson->save();

        return redirect()->route('contract-person.index')
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
        $people = Person::all();
        $contracts = Contract::all();
        return view('contract-person.edit', compact('contractPerson', 'people', 'contracts'));
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
