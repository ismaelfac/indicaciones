<?php

namespace App\Http\Controllers;

use App\Models\ContractDocument;
use Illuminate\Http\Request;

/**
 * Class ContractDocumentController
 * @package App\Http\Controllers
 */
class ContractDocumentController extends Controller
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
        $contractDocuments = ContractDocument::paginate();

        return view('contract-document.index', compact('contractDocuments'))
            ->with('i', (request()->input('page', 1) - 1) * $contractDocuments->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contractDocument = new ContractDocument();
        return view('contract-document.create', compact('contractDocument'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ContractDocument::$rules);

        $contractDocument = ContractDocument::create($request->all());

        return redirect()->route('contract-documents.index')
            ->with('success', 'ContractDocument created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contractDocument = ContractDocument::find($id);

        return view('contract-document.show', compact('contractDocument'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contractDocument = ContractDocument::find($id);

        return view('contract-document.edit', compact('contractDocument'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ContractDocument $contractDocument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContractDocument $contractDocument)
    {
        request()->validate(ContractDocument::$rules);

        $contractDocument->update($request->all());

        return redirect()->route('contract-documents.index')
            ->with('success', 'ContractDocument updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $contractDocument = ContractDocument::find($id)->delete();

        return redirect()->route('contract-documents.index')
            ->with('success', 'ContractDocument deleted successfully');
    }
}
