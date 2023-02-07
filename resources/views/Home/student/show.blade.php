@extends('Home.master')
@section('body')

<div class="row">
  <div class="container p-5">

      <div class="row shadow">
          <div class="col-md-12 d-flex p-4 justify-content-between">
              <h3>Show</h3>
              <a href="{{ route('download.pdf',['id'=>$student->id])}}" class="btn btn-sm btn-success pt-2">Generate PDF</a>
          </div>
      </div>

      <div class="row mt-3">
        <div class="col-md-10 mx-auto">
         <div class="card card-body">

          <div class="row">

            <div class="col-md-4">
              <img src="{{ asset('upload/student/'.$student->image)}}" style="height:300px;width:300px;" alt="" srcset="">
            </div>

            <div class="col-md-4 pt-5">
              <p><strong>Name : </strong>{{ $student->name}}</p>
              <p><strong>Email : </strong>{{ $student->email}}</p>
              <p><strong>Department : </strong>{{ $student->depertment}}</p>
            </div>
          </div>



         </div>
        </div>
      </div>
  </div>
</div>
@endsection
