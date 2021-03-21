
@extends('master')


@section('content')

<table class="table table-dark table-striped table-hover table-sm">
    <thead class="thead-red">
        <tr>
            <th scope="col">StudentId</th>
            <th scope="col">Name</th>
            <th scope="col">Subject</th>
            <th scope="col">Marks</th>
           <h2> Students Marks lists</h2>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>English</td>
            <td>90</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>English</td>
            <td>85</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>kona</td>
            <td>Bangla</td>
            <td>85</td>
        </tr>
        </tbody>
    </table>

@endsection
