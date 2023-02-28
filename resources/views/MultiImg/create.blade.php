@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">
            <div class="row mt-3">
                <div class="col-md-10 mx-auto">
                    <div class="card card-body shadow p-4">
                        <span> <a href="{{ route('manage_product_index') }}" class="btn btn-sm btn-info"> <i
                                    class="fa fa-list pe-3"></i></a></span>
                        <h4 class="text-center">Product With Multi Image</h4>
                        <p>{{ Session::get('msg') }}</p>
                        <hr />

                        <form action="{{ route('store_multiImg') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" placeholder="Enter Name"
                                            class="form-control rounded-0" id="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="code" class="form-label">Code</label>
                                        <input type="text" name="code" placeholder="Enter code"
                                            class="form-control rounded-0" id="code">
                                    </div>
                                    <div class="mb-3">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="text" name="price" placeholder="Enter price"
                                            class="form-control rounded-0" id="price">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    {{-- Cloning this portion --}}
                                    <div id="daynami_row">

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="mb-3">
                                                    <label for="img_desc" class="form-label">Desc 1</label>
                                                    <input type="text" name="img_desc[]" placeholder="Desc image 1"
                                                        class="form-control rounded-0" id="img_desc">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="price" class="form-label">Image 1</label>
                                                    <input type="file" name="product_images[]"
                                                        class="form-control rounded-0" id="image">
                                                </div>
                                            </div>
                                            <div class="col-md-1 mt-4">
                                                <a id="add_more" class="btn btn-sm btn-primary rounded-0">+</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary rounded-0">Submit</button>
                        </form>
                    </div>

                </div>


            </div>
        </div>
    </div>
    </div>
@endsection
@push('js')
    <script>
        var i = 0;
        var max_fileds = 2;

        $('#add_more').click(function(e) {
            e.preventDefault();
            if (i < max_fileds) {
                let html =

                    $('#daynami_row').append(`<div id="row` + i + `">
                    <div class="row">
                                    <div class="col-md-5">
                                        <div class="mb-3">
                                            <label for="img_desc" class="form-label">Desc ` + (i + 2) + `</label>
                                            <input type="text" name="img_desc[]" placeholder="Desc image ` + (i + 2) + `"
                                                class="form-control rounded-0" id="img_desc">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Image ` + (i + 2) + `</label>
                                            <input type="file" name="product_images[]"
                                                class="form-control rounded-0" id="image">
                                        </div>
                                    </div>
                                    <div class="col-md-1 mt-4">
                                        <a class="btn btn-sm btn-danger remove_button" name="remove" id="` + i + `" rounded-0"> x </a>
                                    </div>
                                </div>
                    </div>`);
                i++;

            }
        });

        $(document).on('click', '.remove_button', function(e) {
            e.preventDefault();
            var button_id = $(this).attr('id');
            // alert(button_id);
            $('#row' + button_id + '').remove();
            i--;
        });
    </script>
@endpush
