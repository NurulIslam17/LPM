<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


    <title>Laravel Pkg</title>
</head>

<body onload="window.print()">
    <div class="row">
        <div class="container p-5">
            <div class="row mt-3">
                <div class="col-md-10 mx-auto">

                    <div class="row">

                        <div class="col-md-4">
                            <img src="{{ asset('upload/student/' . $student->image) }}"
                                style="height:300px;width:300px;" alt="" srcset="">
                        </div>

                        <div class="col-md-4 pt-5">
                            <p><strong>Name : </strong>{{ $student->name }}</p>
                            <p><strong>Email : </strong>{{ $student->email }}</p>
                            <p><strong>Department : </strong>{{ $student->depertment }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
