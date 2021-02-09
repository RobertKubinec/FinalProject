<?php

namespace App\Http\Controllers;

use Aginev\Datagrid\Datagrid;
use App\Models\Caves;
use Illuminate\Http\Request;

class CaveController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $caves = Caves::paginate(25);
//        $grid = new Datagrid($caves, $request->get('f', []));
//        $grid->setColumn('title', 'Nadpis')
//            ->setColumn('article', 'Text')
//            ->setColumn('imageLink', 'Obrázok')
//            ->setActionColumn([
//                'wrapper' => function ($value, $row) {
//                    return '<a href="' . route('user.edit', [$row->id]) . '" title="Edit" class="btn btn-sm btn-primary">Uprav</a>
//                        <a href="' . route('user.delete', $row->id) . '" title="Delete" data-method="DELETE" class="btn btn-sm btn-danger" data-confirm="Are you sure?">Zmaž</a>';
//                }
//            ]);


        return view('caves.index', [
            'caves' => $caves
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('caves.create', ['action' => route('caves.store'),
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

        $caves = Caves::create($request->all());
        $caves->save();
        return redirect()->route('caves.index');
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
    public function edit(Caves $caves)
    {

        return view('caves.edit', [
            'action' => route('caves.update', $caves->id),
            'method' => 'put',
            'model' => $caves
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Caves $caves)
    {

        $caves->update($request->all());
        return redirect()->route('caves.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Caves $caves)
    {
        $caves->delete();
        return redirect()->route('caves.index');
    }
}
