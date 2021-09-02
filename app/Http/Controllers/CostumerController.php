<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Costumer, Student};
use DataTables;

class CostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.costumer.index');
    }

    public function getCostumers(Request $request)
    {
        if ($request->ajax()) {
            $data = Costumer::latest()->get();
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                        return $actionBtn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.costumer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $costumer = New Costumer();
        $costumer->name = $request->name;
        $costumer->email = $request->email;
        $costumer->password = \Hash::make($request->password);
        $costumer->active = 1;
        $costumer->save();

        session()->flash('message', 'Sikeres regisztráció');
        return redirect()->route('costumer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Costumer $costumer)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Costumer $costumer)
    {
        return view('admin.costumer.edit')
          ->with('costumer', $costumer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Costumer $costumer, Request $request)
    {
        $costumer->update($request->all());
        return redirect()->route('costumer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Costumer $costumer)
    {
        $costumer->delete();
        return redirect()->route('costumer.index');
    }
}
