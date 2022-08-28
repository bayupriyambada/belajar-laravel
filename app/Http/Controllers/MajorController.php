<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        return Major::with(['student'])->get();
    }

    public function store(Request $request)
    {
        $store = new Major();
        $store->name_majors = $request->name_majors;
        $store->slug = Str::slug($request->name_majors);
        $store->students_id = $request->students_id;
        $store->save();

        return response()->json([
            'status' => 200,
            'data' => $store
        ]);
    }
}
