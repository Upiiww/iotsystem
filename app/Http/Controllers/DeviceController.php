<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        $devices = Device::all();
        return view('pages.devices', compact('devices'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_device' => 'required|string|max:100',
            'lokasi' => 'required|string|max:100',
            'status' => 'required|string|max:50',
            'nilai' => 'nullable|numeric',
            'device_type' => 'required|string|max:50', // Add device_type validation
        ]);

        $device = Device::create($request->all());
        return response()->json($device, 201);
    }

    public function show($id)
    {
        $device = Device::findOrFail($id);
        return $device;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_device' => 'required|string|max:100',
            'lokasi' => 'required|string|max:100',
            'status' => 'required|string|max:50',
            'nilai' => 'nullable|numeric',
            'device_type' => 'required|string|max:50', // Add device_type validation
        ]);

        $device = Device::findOrFail($id);
        $device->update($request->all());
        return response()->json($device, 200);
    }

    public function destroy($id)
    {
        Device::destroy($id); // Menghapus perangkat berdasarkan ID yang diberikan

        // Mengatur ulang ID perangkat
        $devices = Device::orderBy('id')->get(); // Mengambil semua perangkat dan mengurutkannya berdasarkan ID
        $newId = 1; // Inisialisasi ID baru
        foreach ($devices as $device) {
            $device->id = $newId; // Mengatur ID perangkat menjadi ID baru
            $device->save(); // Menyimpan perubahan
            $newId++; // Menambahkan ID baru untuk perangkat berikutnya
        }

        return response()->json(null, 204); // Memberikan respons dengan kode status 204 (No Content)
    }

    public function dashboard()
    {
        $deviceData = Device::latest()->first(); // Mengambil data perangkat terbaru
        return view('dashboard', compact('deviceData'));
    }
}