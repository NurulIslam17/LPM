@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3>Create Category</h3>
                    <a href="{{ route('create_category') }}" class="btn btn-sm btn-success pt-2">Create</a>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body rounded-0">
                        <form action="{{ route('store_mejor')}}" method="post">
                            @csrf
                            <p class="text-success">{{ Session::get('Msg') }}</p>

                            <div class="form-group mb-2">
                                <label for="department_id">Department</label>
                                <select class="form-select" name="department_id">
                                    <option disabled selected>Select Department</option>
                                    @foreach ($departments as $department)
                                    <option value="{{ $department->id}}">{{ $department->department}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-2">
                                <label for="category">Mejor</label>
                                <input type="text" class="form-control rounded-0" id="category" name="category"
                                    placeholder="Create Mejor">
                            </div>
                            <button type="submit" class="btn btn-primary rounded-0">Create</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
