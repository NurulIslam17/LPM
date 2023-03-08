@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3>Manage Animals</h3>
                    <a href="{{ route('animals.create') }}" class="btn btn-sm btn-success pt-2">Create</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mx-auto">
                    <table class="table table-bordered table-striped mt-5">
                        <thead>
                            <tr class="text-center text-light" style="background: rgb(126, 116, 116)">
                                <th scope="col">SL</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Color</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($animals as $animal)
                                <tr class="text-center">
                                    <td scope="col">{{ $loop->iteration }}</td>
                                    <td scope="col">
                                        <img class="rounded-circle" src="{{ asset('upload/animal/' . $animal->image) }}"
                                            style="height:60px;width:60px;">
                                    </td>
                                    <td scope="col">{{ $animal->name }}</td>
                                    <td scope="col">{{ $animal->color }}</td>
                                    <td scope="col">{{ $animal->price }}</td>
                                    <td scope="col">
                                        <a href="{{ route('animals.edit', $animal->id) }}"
                                            class="btn btn-sm btn-success rounded-0 m-1">EDIT</a>
                                        <a onclick="event.preventDefault();document.getElementById('delete').submit();"
                                            class="btn btn-sm btn-danger rounded-0 m-1">DELETE</a>

                                        <form id="delete" method="POST"
                                            action="{{ route('animals.destroy', $animal->id) }}">
                                            @csrf
                                            @method('DELETE')
                                        </form>

                                        {{-- <button type="button" onclick="deleteData({{ $animal->id }})"
                                            class="btn btn-danger btn-sm" title="Delete">
                                            <i class="fa fa-trash"></i>
                                            <span>Delete</span>
                                        </button> --}}

                                        <form id="delete-form-{{ $animal->id }}" method="POST"
                                            action="{{ route('animals.destroy', $animal->id) }}" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
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
