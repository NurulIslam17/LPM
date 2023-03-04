@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3>Manage Faculties</h3>
                    <a href="{{ route('manage_employee') }}" class="btn btn-sm btn-success pt-2"><i class="fa fa-list"></i>
                        List</a>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-10 mx-auto">
                    <div class="card card-body shadow">
                        <h4>Create</h4>
                        <p class="text-danger">{{ Session::get('Msg') }}</p>
                        <hr />
                        <form action="{{ route('store_facalty') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-9">

                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="employee" class="form-label">Employee</label>
                                                <input type="text" class="form-control" name="employee" id="employee">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" id="email">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">phone</label>
                                                <input type="text" class="form-control" name="phone" id="phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" style="height:100px" name="description" id="description" rows="3"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3">

                                    <div class="row">
                                        <label for="exampleFormControlSelect2">Department</label>
                                        <select class="form-select" name="department_id" id="department_id"
                                            aria-label="Default select example">
                                            <option disabled selected>---- Select Department ----</option>
                                            @foreach ($department as $dept)
                                                <option value="{{ $dept->id }}">{{ $dept->department }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="row">
                                        <label for="exampleFormControlSelect2">Mejor</label>
                                        <select class="form-select" id="mejoAjx" name="category_id"
                                            aria-label="Default select example">
                                            <option disabled selected>--------Select Mejor--------</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" name="image" class="form-control dropify" id="image">
                                    </div>

                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-success m-2">Create</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $("#department_id").on('change', function(e) {
            e.preventDefault();
            var selectedDeptId = this.value;
            // alert(selectedDeptId);
            $.ajax({
                url: "{{ url('/get_mejor_ajax') }} ",
                type: "POST",
                data: {
                    id: selectedDeptId,
                },
                dataType: "json",
                success: function(response) {
                    // console.log(response);
                    $("#mejoAjx").html(`<option disabled selected>---Select Mejor---</option>`)
                    $.each(response.data, function(key, value) {
                        $("#mejoAjx").append(
                            `<option value=" ${value.id}"> ${value.category } </option>`);
                    })
                }
            });
        });
    </script>
@endpush
