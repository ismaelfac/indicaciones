<?php

namespace App\Http\Controllers;

use App\Models\ContractEstateDocument;
use Illuminate\Http\Request;

/**
 * Class ContractEstateDocumentController
 * @package App\Http\Controllers
 */
class ContractEstateDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contractEstateDocuments = ContractEstateDocument::paginate();

        return view('contract-estate-document.index', compact('contractEstateDocuments'))
            ->with('i', (request()->input('page', 1) - 1) * $contractEstateDocuments->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contractEstateDocument = new ContractEstateDocument();
        return view('contract-estate-document.create', compact('contractEstateDocument'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ContractEstateDocument::$rules);

        $contractEstateDocument = ContractEstateDocument::create($request->all());

        return redirect()->route('contract-estate-documents.index')
            ->with('success', 'ContractEstateDocument created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contractEstateDocument = ContractEstateDocument::find($id);

        return view('contract-estate-document.show', compact('contractEstateDocument'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contractEstateDocument = ContractEstateDocument::find($id);

        return view('contract-estate-document.edit', compact('contractEstateDocument'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ContractEstateDocument $contractEstateDocument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContractEstateDocument $contractEstateDocument)
    {
        request()->validate(ContractEstateDocument::$rules);

        $contractEstateDocument->update($request->all());

        return redirect()->route('contract-estate-documents.index')
            ->with('success', 'ContractEstateDocument updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $contractEstateDocument = ContractEstateDocument::find($id)->delete();

        return redirect()->route('contract-estate-documents.index')
            ->with('success', 'ContractEstateDocument deleted successfully');
    }
}
