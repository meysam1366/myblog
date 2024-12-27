<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageRequest;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languages = Language::all();
        return view('panel.languages.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panel.languages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LanguageRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('/storage/images/icons'), $fileName);
            $validated['icon'] = '/storage/images/icons/' . $fileName;
        } else {
            $validated['icon'] = '';
        }

        Language::query()
            ->create($validated);

        return to_route('admin.languages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $language = Language::query()->find($id);

        return view('panel.languages.edit', compact('language'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LanguageRequest $request, string $id)
    {
        $validated = $request->validated();

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('/storage/images/icons'), $fileName);
            $validated['icon'] = '/storage/images/icons/' . $fileName;
        } else {
            $validated['icon'] = '';
        }

        Language::query()
            ->find($id)
            ->update($validated);

        return to_route('admin.languages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Language::query()->find($id)->delete();

        return to_route('admin.languages.index');
    }
}
