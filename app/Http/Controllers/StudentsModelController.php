<?php

namespace App\Http\Controllers;

use App\Models\StudentsModel;
use Illuminate\Http\Request;

class StudentsModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return StudentsModel::with(['major'])->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new StudentsModel();
        $store->name_students = $request->name_students;
        $store->nis_students = $request->nis_students;
        $store->save();

        return response()->json([
            'status' => 200,
            'data' => $store
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentsModel  $studentsModel
     * @return \Illuminate\Http\Response
     */
    public function show(StudentsModel $studentsModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentsModel  $studentsModel
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentsModel $studentsModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentsModel  $studentsModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentsModel $studentsModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentsModel  $studentsModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentsModel $studentsModel)
    {
        //
    }
}
