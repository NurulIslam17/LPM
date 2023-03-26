@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3>Manage Ajax</h3>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Create
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mx-auto">
                    <table class="table table-bordered table-striped mt-5">
                        <thead>
                            <tr class="" style="background: rgb(126, 116, 116)">
                                <th scope="col">SL</th>
                                <th scope="col">Image</th>
                                <th scope="col">Applicant</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">City</th>
                                <th scope="col">Status</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ajaxDatas as $value)
                                <tr class="">
                                    <td scope="col">{{ $loop->iteration }}</td>
                                    <td scope="col">
                                        <img class="rounded-circle" src="{{ asset('upload/animal/Animal_1678428532.jpg') }}"
                                            style="height:50px;width:50px;">
                                    </td>
                                    <td scope="col">{{ $value->name }}</td>
                                    <td scope="col">{{ $value->email }}</td>
                                    <td scope="col">{{ $value->phone }}</td>
                                    <td scope="col">{{ $value->city }}</td>
                                    <td scope="col">
                                        @if ($value->status == 1)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-warning">Inactive</span>
                                        @endif
                                    </td>

                                    <td scope="col" class="d-flex justify-content-center">
                                        <a onclick="editData({{ $value->id }})" data-name={{ $value->name }}
                                            data-bs-toggle="modal" data-bs-target="#editModal" class="m-1"><i
                                                class="fa-sharp fa-solid fa-edit fa-2x"></i></a>
                                        <a onclick="deleteData({{ $value->id }})" class="m-1"><i
                                                class="fa fa-trash text-danger fa-2x"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Create Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Enter Information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="myForm" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="applicant">Applicant</label>
                                    <input type="text" class="form-control" name="name" required id="name"
                                        placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" required id="email"
                                        placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="email">Phone</label>
                                    <input type="text" class="form-control" name="phone" required id="phone"
                                        placeholder="Enter Phone">
                                </div>
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" name="city" id="city"
                                        placeholder="Enter City">
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" name="image" id="image">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="create" class="btn btn-primary">Create</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="myForm" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="applicant">Applicant</label>
                                    <input type="text" class="form-control" name="name" required id="name"
                                        placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" required id="email"
                                        placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="email">Phone</label>
                                    <input type="text" class="form-control" name="phone" required id="phone"
                                        placeholder="Enter Phone">
                                </div>
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" name="city" id="city"
                                        placeholder="Enter City">
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" name="image" id="image">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="create" class="btn btn-primary">Create</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $("#create").click(function() {
                var name = $("#name").val();
                var email = $("#email").val();
                var phone = $("#phone").val();
                var city = $("#city").val();
                var image = $("#image").val();
                // var data = [name, email, phone, city, image];
                // console.log(image);
                $.ajax({
                    url: "/ajax/crud/store/",
                    method: "POST",
                    data: {
                        name: name,
                        email: email,
                        phone: phone,
                        city: city,
                        image: image,
                    },
                    dataType: "json",
                    success: function(response) {
                        console.log(response);
                        if (response.status == 1) {
                            $(".modal").hide();
                            location.reload();
                        } else {
                            alert('Something went wrong');
                        }
                    }
                });
            });


        });
    </script>

    <script>
        // delete data
        function deleteData(id) {
            alert('Are you sure to delete this record ?');
            $.ajax({
                url: "/ajax-delete",
                type: "POST",
                data: {
                    id: id,
                },
                dataType: "json",
                success: function(response) {
                    if (response.status == 1) {
                        location.reload();
                    } else {
                        alert('Something went wrong');
                    }
                }
            });
        }
    </script>

    <script>
        function editData(id) {
            alert(id);
            var name = $(this).data('id');
            alert(name);
            $("#editModal").show();
        }
    </script>
@endpush
