<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use PhpParser\Node\Stmt\Return_;
use App\Http\Requests\StoreconferenceRequest;

class ConferencesController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'edit']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $conferences = new Conference();
        return view('conferences.index', ['conferences' => $conferences->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('conferences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreconferenceRequest $request, Conference $conference): RedirectResponse
    {
        $validated = $request->validated();

        $conferenceItem = $conference->create($validated);

        $request->session()->flash('status', 'Conference created');

        return redirect()->route('conferences.show', ['id' => $conferenceItem->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id) : View
    {
        //abort_if(!isset($this -> conferences[$id]), 404);
        return view ('conferences.show', ['conference' => Conference::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $conference = Conference::findOrFail($id);
        return view('conferences.edit', ['conference' => $conference]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreconferenceRequest  $request, string $id): RedirectResponse
    {
        $validated = $request->validated();;

        $conference = Conference::findOrFail($id);
        $conference->update($validated);

        $request->session()->flash('status', 'Conference updated successfully');

        return redirect()->route('conferences.show', ['conference' => $conference->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): RedirectResponse
    {
        $conference = (new Conference())->findOrFail($id);
        $conference->delete();

        session()->flash('status', 'Conference deleted!');

        return redirect()->route('conferences.index');
    }
}
