<div class="col-md-2 bg-secondary" style="height: 100vh">
    <div class="row">
        <div class="col-md-12 text">
            <a href="{{ route('/') }}" style="text-decoration: none" class="text-light text-center ">
                <h5 class="mt-5">Dashboard</h5>
            </a>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12 text">
            <a href="{{ route('student.index') }}" style="text-decoration: none" class="text-light text-center"> <i
                    class="fa fa-star pe-3"></i>Students (PDF)</a>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-12 text">
            <a href=" {{ route('product.index') }} " style="text-decoration: none" class="text-light text-center"> <i
                    class="fa fa-cart-shopping pe-3"></i>Product (QR Code)</a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-12 text">
            <a href=" {{ route('canva.screenshot') }} " style="text-decoration: none" class="text-light text-center"> <i
                    class="fa fa-camera pe-3"></i>View Screenshot</a>
        </div>
    </div>

</div>
