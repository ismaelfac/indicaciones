<?php

namespace App\Http\Controllers;

use App\Models\ContractPersonDocument;
use Illuminate\Http\Request;

/**
 * Class ContractPersonDocumentController
 * @package App\Http\Controllers
 */
class ContractPersonDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contractPersonDocuments = ContractPersonDocument::paginate();

        return view('contract-person-document.index', compact('contractPersonDocuments'))
            ->with('i', (request()->input('page', 1) - 1) * $contractPersonDocuments->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contractPersonDocument = new ContractPersonDocument();
        return view('contract-person-document.create', compact('contractPersonDocument'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ContractPersonDocument::$rules);

        $contractPersonDocument = ContractPersonDocument::create($request->all());

        return redirect()->route('contract-person-documents.index')
            ->with('success', 'ContractPersonDocument created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contractPersonDocument = ContractPersonDocument::find($id);

        return view('contract-person-document.show', compact('contractPersonDocument'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contractPersonDocument = ContractPersonDocument::find($id);

        return view('contract-person-document.edit', compact('contractPersonDocument'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ContractPersonDocument $contractPersonDocument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContractPersonDocument $contractPersonDocument)
    {
        request()->validate(ContractPersonDocument::$rules);

        $contractPersonDocument->update($request->all());

        return redirect()->route('contract-person-documents.index')
            ->with('success', 'ContractPersonDocument updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $contractPersonDocument = ContractPersonDocument::find($id)->delete();

        return redirect()->route('contract-person-documents.index')
            ->with('success', 'ContractPersonDocument deleted successfully');
    }
}
