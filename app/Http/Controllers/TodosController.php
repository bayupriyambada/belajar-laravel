<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos;

class TodosController extends Controller
{
    public function index(){
        $todo = Todos::get();
        return response()->json([
            'status' => 200,
            'pesan' => 'Berhasil mendapatkan todos',
            'data' => $todo
        ]);
    }

    public function store(Request $request){
        $todo = new Todos();
        $todo->nama = $request->nama;
        $todo->status = $request->status;
        $todo->save();
        return response()->json([
            'status' => 200,
            'pesan' => 'Berhasil menyimpan data',
            'data' => $todo
        ]);
    }

    public function show($id){
        $todo = Todos::find($id);
        return response()->json([
            'status' => 200,
            'pesan' => 'Berhasil ngeshow data todos',
            'data' => $todo
        ]);
    }

    public function update(Request $request, $id){
        $todo = Todos::find($id);
        $todo->nama = $request->nama;
        $todo->status = $request->status;
        $todo->save();
        return response()->json([
            'status' => 200,
            'pesan' => 'Berhasil update data',
            'data' => $todo
        ]);
    }

    public function destroy($id){
        $todo = Todos::find($id);
        $todo->delete();
        return response()->json([
            'status' => 200,
            'pesan' => 'Berhasil hapus data',
            'data' => $todo
        ]);
    }
}
