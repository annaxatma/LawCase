@extends('layout.mainLayout')

@section('title', $title)

@section('pageTitle')
    <h2 style="text-align: center">List of Case Files</h2>
@endsection

@section('main_content')
<div class="m-2" style="float: right">
    <a class="btn btn-success" href="{{route('Files.create')}}">Add New File</a>
</div>
    <br>
    <table class="table table-striped" style="text-align: center">
        <colgroup>
            <col span="1" style="width: 7%">
            <col span="1" style="width: 20%">
            <col span="1" style="width: 18%">
            <col span="1" style="width: 15%">
            <col span="1" style="width: 15%">
            <col span="1" style="width: 25%">
        </colgroup>

        <tbody>
        <tr>
            <th>FILE NO.</th>
            <th>CASE NAME</th>
            <th>CRIME OFFENCE</th>
            <th>PROSECUTOR IN CHARGE</th>
            <th>STATUS</th>
            <th>ACTION</th>
        </tr>
        @foreach ($files as $filee) {{-- $projects itu nama tabel di db --}}
        <tr>
            <td>{{ $filee['id_file'] }}</td>
            <td>{{ $filee['case_name'] }}</td>
            <td><a href="{{ route('Types.show', $filee->type->code ) }}">{{ $filee->type->offence }}</a></td>
            <td>{{ $filee['prosecutor'] }}</td>
            <td>{{ $filee['status'] }}</td>
            <td>
            <form action="{{ route('Files.destroy', $filee->id_file) }}" method="POST">
                <a class="btn btn-info m-1" href="{{ route('Files.show', $filee->case_name) }}">Show</a>
                <a class="btn btn-primary m-1" href="{{ route('Files.edit', $filee->id_file) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class ="btn btn-danger m-1">DELETE</button>
            </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <div class="justify-content-center d-flex">
        <ul class="pagination"><li class="page-item d-inline">{{ $files->links() }}</li></ul>
    </div>
@endsection

@section('footer')
    <footer>2021 Copyright: Prosecutor Files</footer>
@endsection