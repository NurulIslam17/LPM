<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Laravel Pkg</title>
</head>
<body>

  <div class="row">
    <div class="container p-5">

        <div class="row">
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

  {{-- js --}}

   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
  
</body>
</html>