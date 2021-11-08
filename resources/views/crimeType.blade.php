@extends('layout.mainLayout')

@section('title', $title)

@section('pageTitle')
    <h2 style="text-align: center">List of Criminal Offences</h2>
@endsection

@section('main_content')
<div class="m-2" style="float: right">
    <a class="btn btn-success" href="{{route('Types.create')}}">Add Data</a>
</div>
        <br>
    <table class="table table-striped" style="text-align: center">
            <tr>
                <th>CODE</th>
                <th>CATEGORY</th>
                <th>CRIME OFFENCE</th>
                <th>SENTENCE</th>
                <th>ACTION</th>
            </tr>
            @foreach ($types as $typee) {{-- $projects itu nama tabel di database --}}
            <tr>
                <td>{{ $typee['code'] }}</td>
                <td>{{ $typee['category'] }}</td>
                <td>{{ $typee['offence'] }}</td>
                <td>{{ $typee['sentence'] }}</td>
                <td>
                <form action="{{ route('Types.destroy', $typee->id_type) }}" method="POST">
                    <a class="btn btn-info m-1" href="{{ route('Types.show', $typee->code) }}">Show</a>
                    <a class="btn btn-primary m-1" href="{{ route('Types.edit', $typee->id_type) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class ="btn btn-danger m-1">DELETE</button>
                </form>
                </td>
            </tr>
        @endforeach
    </table>

    <div class="justify-content-center">
        {{ $types->links() }}
    </div>
@endsection

@section('footer')
    <footer>2021 Copyright: Prosecutor Files</footer>
@endsection