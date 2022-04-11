<?php

namespace App\Http\Controllers;

use App\Models\DocumentPerson;
use Illuminate\Http\Request;

/**
 * Class DocumentPersonController
 * @package App\Http\Controllers
 */
class DocumentPersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentPeople = DocumentPerson::paginate();

        return view('document-person.index', compact('documentPeople'))
            ->with('i', (request()->input('page', 1) - 1) * $documentPeople->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $documentPerson = new DocumentPerson();
        return view('document-person.create', compact('documentPerson'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DocumentPerson::$rules);

        $documentPerson = DocumentPerson::create($request->all());

        return redirect()->route('document-people.index')
            ->with('success', 'DocumentPerson created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $documentPerson = DocumentPerson::find($id);

        return view('document-person.show', compact('documentPerson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $documentPerson = DocumentPerson::find($id);

        return view('document-person.edit', compact('documentPerson'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DocumentPerson $documentPerson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocumentPerson $documentPerson)
    {
        request()->validate(DocumentPerson::$rules);

        $documentPerson->update($request->all());

        return redirect()->route('document-people.index')
            ->with('success', 'DocumentPerson updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $documentPerson = DocumentPerson::find($id)->delete();

        return redirect()->route('document-people.index')
            ->with('success', 'DocumentPerson deleted successfully');
    }
}
