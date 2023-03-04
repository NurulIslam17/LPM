<div class="col-md-2 bg-dark fixed-top" style="height: 100vh;">
    <div class="row">
        <div class="col-md-12 text">
            <a href="{{ route('/') }}" style="text-decoration: none" class="text-light text-center ">
                <h5 class="mt-5">LMP</h5>
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
    <div class="row mt-2">
        <div class="col-md-12 text">
            <a href="/telescope" style="text-decoration: none" class="text-light text-center"> <i
                    class="fa fa-list pe-3"></i>Telescope</a>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-12 text">
            <a href="{{ route('company_index') }}" style="text-decoration: none" class="text-light text-center"> <i
                    class="fa fa-industry pe-3"></i>Company(EORM)</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text">
            <a href="{{ route('manage_product_index') }}" style="text-decoration: none" class="text-light text-center">
                <i class="fa fa-image pe-3"></i>Product( Multi-Img )</a>
        </div>
    </div>

    <p class="text-light mt-3">Dependent Dropdown</p>
    <div class="row">
        <div class="col-md-12 text">
            <a href="{{ route('manage_department') }}" style="text-decoration: none" class="text-light text-center"> <i
                    class="fa fa-image pe-3"></i>Department</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text">
            <a href="{{ route('manage_category') }}" style="text-decoration: none" class="text-light text-center"> <i
                    class="fa fa-image pe-3"></i>Category</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text">
            <a href="{{ route('manage_employee') }}" style="text-decoration: none" class="text-light text-center"> <i
                    class="fa fa-image pe-3"></i>Faculties</a>
        </div>
    </div>

    <p class="text-light mt-3">Multi Dropdown</p>
    <div class="row">
        <div class="col-md-12 text">
            <a href="{{ route('manage_division') }}" style="text-decoration: none" class="text-light text-center"> <i
                    class="fa fa-city pe-3"></i>Division</a>
        </div>
    </div>

</div>
