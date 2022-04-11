<?php

namespace App\Http\Controllers;

use App\Models\DocumentEstate;
use Illuminate\Http\Request;

/**
 * Class DocumentEstateController
 * @package App\Http\Controllers
 */
class DocumentEstateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentEstates = DocumentEstate::paginate();

        return view('document-estate.index', compact('documentEstates'))
            ->with('i', (request()->input('page', 1) - 1) * $documentEstates->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $documentEstate = new DocumentEstate();
        return view('document-estate.create', compact('documentEstate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DocumentEstate::$rules);

        $documentEstate = DocumentEstate::create($request->all());

        return redirect()->route('document-estates.index')
            ->with('success', 'DocumentEstate created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $documentEstate = DocumentEstate::find($id);

        return view('document-estate.show', compact('documentEstate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $documentEstate = DocumentEstate::find($id);

        return view('document-estate.edit', compact('documentEstate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DocumentEstate $documentEstate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocumentEstate $documentEstate)
    {
        request()->validate(DocumentEstate::$rules);

        $documentEstate->update($request->all());

        return redirect()->route('document-estates.index')
            ->with('success', 'DocumentEstate updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $documentEstate = DocumentEstate::find($id)->delete();

        return redirect()->route('document-estates.index')
            ->with('success', 'DocumentEstate deleted successfully');
    }
}
