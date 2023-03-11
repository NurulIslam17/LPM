@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3></h3>
                    <a href="{{ route('tutorials.index') }}" class="btn btn-sm btn-success pt-2"><i class="fa fa-list"></i>
                        List</a>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-5 mx-auto">
                    <div class="card card-body shadow">
                        <h4>Create</h4>
                        <p class="text-danger">{{ Session::get('Msg') }}</p>
                        <hr />
                        <form action="{{ route('tutorials.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" id="title">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="url" class="form-label">Url</label>
                                    <input type="text" class="form-control" name="url" id="url">
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
