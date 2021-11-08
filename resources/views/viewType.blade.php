@extends('layout.crudLayout')

@section('main_content')
    <div class="container">
        <div class="row justify-content-center mt-4">
            <h1 class="text-uppercase text-center" style="color: #f0e7da"><b>{{ $types['offence'] }}</b></h1>
            <table class="table table-borderless">
                <tr>
                    <th>Crime Code:</th>
                    <th>{{ $types['code'] }}</th>
                </tr>
                <tr>
                    <th>Crime Category:</th>
                    <th>{{ $types['category'] }}</th>
                </tr>
                <tr>
                    <th>Crime Definition:</th>
                    <th>{{ $types['definition'] }}</th>
                </tr>
                <tr>
                    <th>Sentence Given:</th>
                    <th>{{ $types['sentence'] }}</th>
                </tr>
            </table>

            <h3 class="text-center" style="color: #f0e7da"><b>List of Case</b></h3>
            <table class="table">
                    <tr>
                        <th>FILE NO.</th>
                        <th>CASE NAME</th>
                        <th>DEFENDANT</th>
                        <th>PROSECUTOR IN CHARGE</th>
                        <th>STATUS</th>
                    </tr>
                    @foreach ($types->files as $filee)
                        <tr>
                            <td>{{ $filee['id_file'] }}</td>
                            <td>{{ $filee['case_name'] }}</td>
                            <td>{{ $filee['defendant'] }}</td>
                            <td>{{ $filee['prosecutor'] }}</td>
                            <td>{{ $filee['status'] }}</td>
                            <td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection