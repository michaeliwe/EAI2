@extends('layout.app')

@section('title')
    Pegawai
@endsection

@section('content')

<h1>Data Pegawai</h1>
<table class="table table-dark">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Employee Name</th>
        <th scope="col">Employee Salary</th>
        <th scope="col">Employee Age</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contents['data'] as $content)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $content['employee_name'] }}</td>
            <td>{{ $content['employee_salary'] }}</td>
            <td>{{ $content['employee_age'] }}</td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection
