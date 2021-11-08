@extends('layout.crudLayout')

@section('main_content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-uppercase"><b>{{ $files['case_name'] }} Case</b></h1>
            <p><b>The Defendant: </b>{{ $files['defendant'] }}</p>
            <p><b>Prosecutor in Charge: </b>{{ $files['prosecutor'] }}</p>
            <p><b>Offence: </b>{{ $files['offence'] }}</p>
            <p><b>Case Status: </b>{{ $files['status'] }}</p>
            <p><b>Created: </b>{{ $files['created_at'] }}</p>
        </div>
    </div>
@endsection