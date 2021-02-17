<?php

namespace App\Http\Controllers;

use Aginev\Datagrid\Datagrid;
use App\Models\Castles;
use Illuminate\Http\Request;

class CastleController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $castles = Castles::paginate(25);
        return view('castles.index', [
            'castles' => $castles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('castles.create', ['action' => route('castles.store'),
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
            'title' => 'required', 'min:3', 'max:50',
            'article' => 'required', 'min:3', 'max:50',
            'imageLink' => 'required'
        ]);

        $castles = Castles::create($request->all());
        $castles->save();
        return redirect()->route('castles.index');
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
    public function edit($id)
    {
        $castles = Castles::find($id);
        return view('castles.edit', [
            'action' => route('castles.update', $castles->id),
            'method' => 'put',
            'model' => $castles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required', 'min:3', 'max:50',
            'article' => 'required', 'min:3', 'max:50',
            'imageLink' => 'required'
        ]);

        $castles = Castles::find($id);
        $castles->update($request->all());
        return redirect()->route('castles.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Castles $castles)
    {
        $castles->delete();
        return redirect()->route('castles.index')->with('success', 'Zmazaznie prebehlo úspešne');
    }
}
