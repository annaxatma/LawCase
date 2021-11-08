@extends('layout.crudLayout')

@section('title')
    Add Crime Type
@endsection

@section('main_content')
    <div class="p-3 text-black w-50 m-auto mt-5">
        <h2 class="text-center text-light"><b>NEW CRIME TYPE</b></h2>
        <form action="{{ route('Types.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group p-2">
                <label>Category</label><br>
                <select name="category" class="custom-select form-control">
                <option hidden value="" disabled selected>Choose</option>
                <option value="criminal">Criminal Case</option>
                <option value="civil">Civil Case</option>
                <option value="family">Family Case</option>
                </select><br>

                <label>Offence</label>
                <input type="text" class="form-control" name="offence" placeholder="Acts That Breach The Law"><br>

                <label>Definition</label>
                <input type="text" class="form-control" name="definition" placeholder="Crime Definition"><br>

                <label>Sentence</label><br>
                <select name="sentence" class="custom-select form-control">
                <option hidden value="" disabled selected>Choose</option>
                <option value="Discharge">Discharge</option>
                <option value="Fines or Compensation">Fines or Compensation</option>
                <option value="Driving disqualification">Driving disqualification</option>
                <option value="Community Orders">Community Orders</option>
                <option value="Prison">Prison</option>
                <option value="Death Sentence">Death Sentence</option>
                </select><br>

                <button type="submit" class="btn btn-success form-control">ADD CRIME</button>
            </div>
        </form>
    </div>
@endsection