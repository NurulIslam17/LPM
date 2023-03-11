@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row  shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3>Manage Tutorials</h3>
                    <p>{{ Session::get('msg') }}</p>
                    <a href="{{ route('tutorials.create') }}" class="btn btn-sm btn-success pt-2">Create</a>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped mt-5" id="example">
                        <thead>

                            <tr class="" style="background: rgb(236, 224, 224)">
                                <th scope="col">SL</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tutorials as $tutorial)
                                <tr class="">
                                    <td scope="col">{{ $loop->iteration }}</td>
                                    <td scope="col">{{ $tutorial->title }}</td>

                                    <td scope="col">
                                        @if ($tutorial->status == 1)
                                            <span class="badge text-dark" style="background: rgb(14, 238, 51)">
                                                Active</span>
                                        @else
                                            <span class="badge text-dark" style="background: rgb(236, 222, 21)">
                                                Inctive</span>
                                        @endif
                                    </td>
                                    <td scope="col" class="d-flex justify-content-center">
                                        <a href="#" class="btn btn-sm btn-info rounded-0 m-1">Show</a>
                                        <a href="#" class="btn btn-sm btn-danger rounded-0 m-1">Delete</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script>
        $('#example').DataTable({
            paging: true,
            pagingType: 'full_numbers',
        });
    </script>
@endpush
