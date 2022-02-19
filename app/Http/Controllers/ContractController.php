<?php

namespace App\Http\Controllers;

use App\Models\{Contract, Document};
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PDF;
/**
 * Class ContractController
 * @package App\Http\Controllers
 */
class ContractController extends Controller
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
        $contracts = Contract::paginate();
        $documents = Document::paginate();
        return view('contract.index', compact('contracts'))
            ->with('i', (request()->input('page', 1) - 1) * $contracts->perPage());
    }

    public function printPDF($contract_id)
    {
        $contract = Contract::find($contract_id);
        //dd($contract->estates);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('contract.pdf', ['contract'=>$contract]);
    
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contract = new Contract();
        return view('contract.create', compact('contract'));
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
        request()->validate(Contract::$rules);
        
        $contract = new Contract;
        $contract->asegurable = $request->asegurable;
        $contract->domus = $request->domus;
        $contract->cannonLease = $request->cannonLease;
        $contract->adminValue = $request->adminValue;
        $contract->increment = $request->increment;
        $contract->contractRights = $request->contractRights;
        $contract->deliveryDate = $request->deliveryDate;
        $contract->gracePeriod = $request->gracePeriod;
        $contract->clause = $request->clause;
        $contract->user_id = $user_id;
        $contract->isActive = true;

        $contract->save();
        if($contract->id) {
            //pendiente, filtro para escanear si existe el directorio
            Storage::makeDirectory($contract->asegurable);
            //Storage::putFileAs($contract->asegurable, new File('/contracts'), 'photo.jpg');
        }

        return redirect()->route('contracts.index')->with('success', 'Contract created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contract = Contract::find($id);
        $documents = Document::paginate();
        return view('contract.show', compact('contract','documents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contract = Contract::find($id);

        return view('contract.edit', compact('contract'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Contract $contract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contract $contract)
    {
        request()->validate(Contract::$rules);

        $contract->update($request->all());

        return redirect()->route('contracts.index')
            ->with('success', 'Contract updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $contract = Contract::find($id)->delete();

        return redirect()->route('contracts.index')
            ->with('success', 'Contract deleted successfully');
    }
}
