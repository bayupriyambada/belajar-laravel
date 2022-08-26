<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;

class Todos2Controller extends Controller
{
    public function index()
    {
        $todo = Todos::get();
        return response()->json([
            'status' => 200,
            'pesan' => 'Berhasil mendapatkan todos',
            'data' => $todo
        ]);
    }

    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        $todo = $request->only('nama', 'status');
        // $todo->nama = $request->nama;
        // $todo->status = $request->status;
        Todos::create($todo);
        // dd($todo);
        return response()->json([
        'status' => 200,
        'pesan' => 'Berhasil mendapatkan todos',
        'data' => $todo
        ]);
    }

    public function show(Todos $todo)
    {
        return response()->json([
            'status' => 200,
            'pesan' => 'Berhasil mendapatkan todos',
            'data' => $todo
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Todos $todo)
    {
        $todo->nama = $request->nama;
        $todo->status = $request->status;
        $todo->save();
        return response()->json([
            'status' => 200,
            'pesan' => 'Berhasil mendapatkan todos',
            'data' => $todo
        ]);
    }

    public function destroy(Todos $todo)
    {
        return response()->json([
        'status' => 200,
        'pesan' => 'Berhasil hapus todos',
        'data' => $todo
        ]);
    }
}
