<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        $logs = Log::all();

        // Mengembalikan view dengan data log
        return view('pages.logs', compact('logs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'log_id' => 'required|unique:logs|bigint',
            'device_id' => 'required|exists:devices,id',
            'nilai' => 'required|numeric',
            'status' => 'required|string|max:255',
            'timestamp' => 'required|date_format:Y-m-d H:i:s',
        ]);

        $log = Log::create($request->all());
        return response()->json($log, 201);
    }

    public function show($id)
    {
        $log = Log::findOrFail($id);
        return $log;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'device_id' => 'required|exists:devices,id',
            'nilai' => 'required|numeric',
            'status' => 'required|string|max:255',
            'timestamp' => 'required|date_format:Y-m-d H:i:s',
        ]);

        $log = Log::findOrFail($id);
        $log->update($request->all());
        return response()->json($log, 200);
    }

    public function destroy($id)
    {
        Log::destroy($id);
        return response()->json(null, 204);
    }
}
