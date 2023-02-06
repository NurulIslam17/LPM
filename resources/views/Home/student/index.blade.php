@extends('Home.master')
@section('body')
<div class="row">
  <div class="container p-5">

      <div class="row shadow">
          <div class="col-md-12 d-flex p-4 justify-content-between">
              <h3>Students</h3>
              <a href="{{ route('student.create') }}" class="btn btn-sm btn-success pt-2">Create</a>
          </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <table class="table table-bordered table-striped mt-5">
            <thead>
              <tr class="bg-info">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Deparment</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($students as $student)
              <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{ $student->name}}</td>
                <td>{{ $student->email}}</td>
                <td>{{ $student->depertment }}</td>
                <td>
                  <img src="{{ asset('upload/student/'.$student->image)}}" style="height:80px;width:80px;" alt="" srcset="">
                </td>
                <td>
                  <a href="{{ route('student.show',['id'=>$student->id])}}"  class="btn btn-sm btn-info rounded-0">Show</a>
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