@extends('layout.crudLayout')

@section('title')
    Add Case File
@endsection

@section('main_content')
    <div class="p-3 text-black w-50 m-auto mt-3">
        <h2 class="text-center text-light"><b>NEW CASE FILE</b></h2>
        <form action="{{ route('Files.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group p-2">
                <label>Case Name</label>
                <input type="text" class="form-control" name="case_name" placeholder="Name of The Case File"><br>

                <label>Offence</label><br>
                <select name="offence" class="custom-select form-control">
                        <option hidden value="" disabled selected>Choose</option>
                    @foreach ($types as $typee)
                        <option value="{{ $typee['id_type'] }}">{{ $typee['offence'] }}</option>
                    @endforeach
                </select><br>
                
                <label>Defendant</label>
                <input type="text" class="form-control" name="defendant" placeholder="Name of The Defendant"><br>

                <label>Prosecutor in Charge</label>
                <input type="text" class="form-control" name="prosecutor" placeholder="Name of The Prosecutor in Charge"><br>

                <label>Case Status</label><br>
                <select name="status" class="custom-select form-control">
                <option hidden value="" disabled selected>Choose</option>
                <option value="CLOSED">CLOSED</option>
                <option value="COLD CASE">COLD CASE</option>
                </select><br>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <button type="submit" class="btn btn-success form-control">SAVE CASE</button>
            </div>
        </form>
    </div>
@endsection