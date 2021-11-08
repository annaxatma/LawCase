@extends('layout.crudLayout')

@section('title')
    Edit Crime Type
@endsection

@section('main_content')
    <div class="p-3 text-black w-50 m-auto mt-3">
            <h2 class="text-center text-light">Edit Crime Type</h2>
            <div class="">
                <form action="{{ route('Types.update', $types->id_type) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PATCH">
                        <label>Category</label><br>
                        <select name="category" class="custom-select form-control">
                        <option hidden value="{{ $types->category }}">{{ $types->category }}</option>
                        <option value="criminal">Criminal Case</option>
                        <option value="civil">Civil Case</option>
                        <option value="family">Family Case</option>
                        </select><br>

                        <label>Offence</label>
                        <input type="text" class="form-control" name="offence" value="{{ $types->offence }}" required><br>

                        <label>Definition</label>
                        <input type="text" class="form-control" name="definition" value="{{ $types->definition }}" required><br>

                        <label>Sentence</label><br>
                        <select name="sentence" class="custom-select form-control">
                        <option hidden value="{{ $types->sentence }}">{{ $types->sentence }}</option>
                        <option value="Discharge">Discharge</option>
                        <option value="Fines or Compensation">Fines or Compensation</option>
                        <option value="Driving disqualification">Driving disqualification</option>
                        <option value="Community Orders">Community Orders</option>
                        <option value="Prison">Prison</option>
                        <option value="Death Sentence">Death Sentence</option>
                        </select><br>

                        <button type="submit" class="btn btn-success form-control">UPDATE CRIME</button>
                    </div>
                </form>
        </div>
    </div>
@endsection