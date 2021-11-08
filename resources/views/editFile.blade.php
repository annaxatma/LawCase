@extends('layout.crudLayout')

@section('title')
    Edit Case File
@endsection

@section('main_content')
    <div class="p-3 text-black w-50 m-auto mt-3">
            <h2>Edit Case File</h2>
            <div class="">
                <form action="{{ route('Files.update', $files->id_file) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PATCH">
                        <label>Case Name</label>
                        <input type="text" class="form-control" name="case_name" value="{{ $files->case_name }}" required>

                        <label>Offence</label><br>
                        <select name="offence" class="custom-select form-control">
                            @foreach ($types as $typee)
                            @if ($typee['id_type'] == $files['offence'])
                                <option value="{{ $typee['id_type'] }}" selected>{{ $typee['offence'] }}</option>
                            @else
                                <option value="{{ $typee['id_type'] }}">{{ $typee['offence'] }}</option>
                            @endif
                            @endforeach
                        </select>
                        
                        <label>Defendant</label>
                        <input type="text" class="form-control" name="defendant" value="{{ $files->defendant }}" required>

                        <label>Prosecutor in Charge</label>
                        <input type="text" class="form-control" name="prosecutor" value="{{ $files->prosecutor }}" required>

                        <label>Status</label>
                        <select name="status" class="custom-select form-control">
                            <option hidden value="{{ $files->status }}">{{ $files->status }}</option>
                            <option value="CLOSED">CLOSED</option>
                            <option value="COLD CASE">COLD CASE</option>
                        </select><br>

                        <button type="submit" class="btn btn-success form-control">UPDATE CASE</button>
                    </div>
                </form>
            </div>
    </div>
@endsection