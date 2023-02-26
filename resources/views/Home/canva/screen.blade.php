@extends('Home.master')

@section('body')
    <div class="row mt-5">
        <div class="col-md-8 mx-auto">
            <div class="card card-body shadow" id="screen_shot">
                <h3 class="text-center">Screenshot</h3>
                <hr />

                <div class="row">
                    <div class="col-md-6">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum soluta recusandae obcaecati
                            tenetur similique minus ea sequi voluptatibus perferendis qui rerum illo, non sunt tempore
                            repellendus dolore vitae? Dolorum, beatae.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('upload/student/1675617540.jpg') }}" style="height:200px;width:100%;"
                            alt="" srcset="">
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
            <button class="btn btn-sm btn-secondary mt-2 rounded-0" id="capture"> <i class="fa fa-download pe-1"></i> Take
                Screenshot</button>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://superal.github.io/canvas2image/canvas2image.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script>
        $("#capture").click(function() {
            alert("Take Screenshot")
            html2canvas(document.querySelector('#screen_shot'), {
                onrendered: function(canvas) {
                    // document.body.appendChild(canvas);
                    return Canvas2Image.saveAsImage(canvas);
                }
            });
        });
    </script>
@endpush
