@extends('Home.master')
@section('body')
    <div class="row mt-5">
        <div class="col-md-8 mx-auto">
            <div class="card card-body " id="screen_shot">
                <h3>Screenshot</h3>

                <div class="row">
                    <div class="col-md-6">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum soluta recusandae obcaecati
                            tenetur similique minus ea sequi voluptatibus perferendis qui rerum illo, non sunt tempore
                            repellendus dolore vitae? Dolorum, beatae!</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('upload/student/1675617540.jpg') }}" style="height:200px;width:100%;" alt=""
                            srcset="">
                    </div>
                </div>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae velit delectus, excepturi ab hic
                    quidem voluptas dolor illo, aperiam quo at enim, nesciunt repellat nihil quod. Odit, esse expedita
                    explicabo ab sed eos eligendi vero? Exercitationem esse atque soluta aliquam architecto magni tempore
                    odio pariatur tenetur incidunt. Consectetur suscipit sint harum assumenda vel nesciunt non. Debitis,
                    voluptates alias sint ex voluptate expedita blanditiis. Quisquam atque id velit cumque labore libero, ab
                    repellat ex similique, hic alias corporis necessitatibus. Quia quos laboriosam eveniet labore commodi
                    quasi, voluptas mollitia voluptatibus itaque. Atque impedit veniam praesentium non repudiandae alias,
                    architecto ex dolor ipsa?</p>
            </div>
            <button class="btn btn-sm btn-success" id="capture">Take Screenshot</button>
        </div>
        <div id="editor"></div>
    </div>
@endsection
@push('js')
    <script>
        // check cdn in master file

        $("#capture").click(function() {
            alert("Take Screenshot")
            html2canvas(document.querySelector('.card'), {
                onrendered: function(canvas) {
                    // document.body.appendChild(canvas);
                    return Canvas2Image.saveAsPNG(canvas);
                }
            });
        });


        //  Js PDF

        // var doc = new jsPDF();
        // var specialElementHandlers = {
        //     '#editor': function(element, renderer) {
        //         return true;
        //     }
        // };
        // $('#capture').click(function() {
        //     doc.fromHTML($('#screen_shot').html());
        //     doc.save('sample-file.pdf');
        // });

    </script>
@endpush
