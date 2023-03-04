@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3>Create Divission</h3>
                    <a href="{{ route('manage_division') }}" class="btn btn-sm btn-success pt-2"><i
                            class="fa fa-list">List</i></a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <form>
                        <div class="form-group">
                            <label for="name">Department</label>
                            <input type="name" class="form-control" id="name"placeholder="Enter Department">
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
