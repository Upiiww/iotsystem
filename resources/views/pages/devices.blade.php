<!-- File: resources/views/devices/index.blade.php -->

@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Devices</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Device ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>Status</th>
                <th>Value</th>
                <th>Device Type</th>
                <th>Last Updated</th>
            </tr>
        </thead>
        <tbody>
            @foreach($devices as $device)
            <tr>
                <td>{{ $device->id }}</td>
                <td>{{ $device->nama_device }}</td>
                <td>{{ $device->lokasi }}</td>
                <td>{{ $device->status }}</td>
                <td>{{ $device->nilai }}</td>
                <td>{{ $device->device_type }}</td>
                <td>{{ $device->updated_at->format('d M Y H:i:s') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
