@extends('layout.app')

@section('title')
    Covid
@endsection

@section('content')

<h1>Data Covid Negara {{ ucwords($country) }}</h1>
<table class="table table-dark">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Date</th>
        <th scope="col">Confirmed</th>
        <th scope="col">Deaths</th>
        <th scope="col">Recovered</th>
        <th scope="col">Active</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contents as $content)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ date('d M Y', strtotime($content['Date'])) }}</td>
            <td>{{ $content['Confirmed'] }}</td>
            <td>{{ $content['Deaths'] }}</td>
            <td>{{ $content['Recovered'] }}</td>
            <td>{{ $content['Active'] }}</td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection
