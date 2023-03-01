@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3>Manage Multiple Image</h3>
                    <a href="{{ route('create_multiImage') }}" class="btn btn-sm btn-success pt-2">Create</a>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12 p-3">
                    <table id="data_table1" class="table table-bordered table-striped mt-5">
                        <thead>
                            <tr class="" style="background: rgb(126, 116, 116)">
                                <th scope="col">SL</th>
                                <th scope="col">Name</th>
                                <th scope="col">Code</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($product as $singleProduct)
                                <tr class="">
                                    <td scope="col">{{ $loop->iteration }}</td>
                                    <td scope="col">{{ $singleProduct->name }}</td>
                                    <td scope="col">{{ $singleProduct->code }}</td>
                                    <td scope="col">{{ $singleProduct->price }} $</td>
                                    <td scope="col">
                                        @if ($singleProduct->status == 1)
                                            <span class="badge text-dark" style="background: rgb(14, 238, 51)">
                                                Active</span>
                                        @else
                                            <span class="badge text-dark" style="background: rgb(236, 222, 21)">
                                                Inctive</span>
                                        @endif
                                    </td>
                                    <td scope="col" class="d-flex justify-content-center">
                                        <a href="{{ route('show_product', ['id' => $singleProduct->id]) }}"
                                            class="btn btn-sm btn-success rounded-0 m-1">Show</a>
                                        <a href="#" class="btn btn-sm btn-danger rounded-0 m-1">Delete</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                               <tr class="my-2">
                                <td colspan="3">
                                    <input type="text" class="filter_input" style="width: 100%" name="seach_by_name" placeholder="Search By Name"
                                        id="seach_by_name">
                                </td>
                                <td colspan="3">
                                    <input type="text" class="filter_input" style="width: 100%" name="seach_by_code" placeholder="Search By code"
                                        id="seach_by_code">
                                </td>

                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#data_table1').DataTable(
                // {
                //     "processing": true,
                //     "serverSide": true,
                //     "ajax": "{{ route('single_search')}}",
                //     "columns": [
                //         {
                //             'data': 'seach_by_name',
                //             'data': 'seach_by_code',
                //         }
                //     ],
                // }
            );
            $('.filter_input').keyup(function(){
                table.column($(this).data('column')).search($(this).val()).draw();
            });
        });
    </script>
@endpush
