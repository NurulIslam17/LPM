@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h5>Create Product</h5>
                    <p>{{ Session::get('msg') }}</p>
                    <a href="{{ route('productsz.index') }}" class="btn btn-sm btn-success pt-2"><i class="fa fa-list"></i>
                        List</a>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-10 mx-auto">
                    <div class="card card-body shadow">
                        <h5 class="text-success text-center">{{ Session::get('success') }}</h5>
                        <form action="{{ route('productsz.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-4 mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control rounded-0" required
                                        id="title"placeholder="Enter title">
                                </div>
                                <div class="form-group col-md-4 mb-3">
                                    <label for="color">Color</label>
                                    <input type="text" name="color" class="form-control rounded-0" required
                                        id="color"placeholder="Enter color">
                                </div>
                                <div class="form-group col-md-4 mb-3">
                                    <label for="brand">Brand</label>
                                    <input type="text" name="brand" class="form-control rounded-0" required
                                        id="brand"placeholder="Enter brand">
                                </div>

                            </div>

                            <div class="dynamic_row">
                                <div class="row">
                                    <div class="form-group col-md-5 mb-3">
                                        <label for="title">Size</label>
                                        <select class="form-select" name="size[]" aria-label="Default select example">
                                            <option selected disabled>Please Select Product Size</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                            <option value="XXL">XXL</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="price">Price</label>
                                        <input type="text" name="price[]" class="form-control rounded-0" required
                                            id="price"placeholder="Enter price">
                                    </div>
                                    <div class="form-group col-md-1 mb-3">
                                        <button onclick="clone()" class="btn btn-sm btn-success mt-4 clone"> + </button>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary rounded-0">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        var i = 0;
        var max_len = 3;

        function clone() {
            if (i < max_len) {
                $(".dynamic_row").append(`<div id="row${i}">
                                        <div class="row">
                                            <div class="form-group col-md-5 mb-3">
                                                <label for="title">Size</label>
                                                <select class="form-select" name="size[]" aria-label="Default select example">
                                                    <option selected disabled>Please Select Product Size</option>
                                                    <option value="M">M</option>
                                                    <option value="L">L</option>
                                                    <option value="XL">XL</option>
                                                    <option value="XXL">XXL</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6 mb-3">
                                                <label for="price">Price</label>
                                                <input type="text" name="price[]" class="form-control rounded-0" required
                                                    id="price"placeholder="Enter price">
                                            </div>
                                            <div class="col-md-1 mt-4">
                                                <a class="btn btn-sm btn-danger remove_button" name="remove" id="` +
                    i + `" rounded-0"> x </a>
                                            </div>
                                        </div>
                                    </div>`);
                i++;
            }
        }

        $(document).on('click', '.remove_button', function(e) {
            e.preventDefault();
            var button_id = $(this).attr('id');
            // alert(button_id);
            $('#row' + button_id + '').remove();
            i--;
        });
    </script>
@endpush
