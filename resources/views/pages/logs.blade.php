<!-- File: resources/views/logs/index.blade.php -->

@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Logs</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Log ID</th>
                <th>Device ID</th>
                <th>Value</th>
                <th>Status</th>
                <th>Timestamp</th>
            </tr>
        </thead>
        <tbody>
            @foreach($logs as $log)
            <tr>
                <td>{{ $log->log_id }}</td>
                <td>{{ $log->device_id }}</td>
                <td>{{ $log->nilai }}</td>
                <td>{{ $log->status }}</td>
                <td>{{ $log->timestamp }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
