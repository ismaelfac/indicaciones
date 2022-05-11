<?php

namespace App\Http\Controllers;

use App\Models\{ Contract, ContractEstate, Estate };
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class ContractEstateController
 * @package App\Http\Controllers
 */
class ContractEstateController extends Controller
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
        $contractEstates = ContractEstate::paginate();
        return view('contract-estate.index', compact('contractEstates'))
            ->with('i', (request()->input('page', 1) - 1) * $contractEstates->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($contract_id = null)
    {
        $contractEstate = new ContractEstate();
        $contracts = $contract_id ? Contract::find($contract_id) : Contract::where('isActive', true);
        $estates = Estate::where('isActive', true);  
        return view('contract-estate.create', compact('contractEstate', 'contracts','estates'));
    }

    public function createContractEstate($contract_id){
        $this->create($contract_id);
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
        request()->validate(ContractEstate::$rules);

        $contractEstate = new ContractEstate;
        $contractEstate->contract_id = $request->contract_id;
        $contractEstate->estate_id = $request->estate_id;
        $contractEstate->user_id = $user_id;
        $contractEstate->isActive = true;
        $contractEstate->save();

        return redirect()->route('contract-estate.index')
            ->with('success', 'ContractEstate created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contractEstate = ContractEstate::find($id);

        return view('contract-estate.show', compact('contractEstate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contractEstate = ContractEstate::find($id);
        $contracts = Contract::all();
        return view('contract-estate.edit', compact('contractEstate', 'contracts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ContractEstate $contractEstate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContractEstate $contractEstate)
    {
        request()->validate(ContractEstate::$rules);

        $contractEstate->update($request->all());

        return redirect()->route('contract-estate.index')
            ->with('success', 'ContractEstate updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $contractEstate = ContractEstate::find($id)->delete();

        return redirect()->route('contract-estate.index')
            ->with('success', 'ContractEstate deleted successfully');
    }
}
