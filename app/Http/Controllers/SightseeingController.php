<?php

namespace App\Http\Controllers;

use Aginev\Datagrid\Datagrid;
use App\Models\Sightseeings;
use Illuminate\Http\Request;

class SightseeingController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sightseeings = Sightseeings::paginate(25);


        return view('sightseeings.index', [
            'sightseeings' => $sightseeings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('sightseeings.create', ['action' => route('sightseeings.store'),
            'method' => 'post'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'article' => 'required',
            'imageLink' => 'required'
        ]);


        $sightseeings = Sightseeings::create($request->all());
        $sightseeings->save();
        return redirect()->route('sightseeings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Sightseeings $sightseeings)
    {

        return view('sightseeings.edit', [
            'action' => route('sightseeings.update', $sightseeings->id),
            'method' => 'put',
            'model' => $sightseeings
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Sightseeings $sightseeings)
    {
        $request->validate([
            'title' => 'required',
            'article' => 'required',
            'imageLink' => 'required'
        ]);


        $sightseeings->update($request->all());
        return redirect()->route('sightseeings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Sightseeings $sightseeings)
    {
        $sightseeings->delete();
        return redirect()->route('sightseeings.index');
    }
}
