@extends('layouts.app')

@section('content')
<div class="container  ">
    <div class="row ">
        <div class="col-lg-3 ">
            <img src="/spglogo/1.jpg" alt="" class="img-fluid w-100 rounded-circle">

        </div>
        <div class="col-lg-9 ">
            <div class="d-flex">
                <h1>freecodegram</h1>
                <div class="pl-5"><a class="btn btn-primary " href="">Message</a></div>
                <div class="pl-5"><button type="button" class="btn btn-outline-primary">Call</button></div>

            </div>
            <div class="d-flex">
                <div class="div">310 posts</div>
                <div class="pl-5 "> 52.7k followers</div>]
                <div class="pl-5">276 following</div>

            </div>
            <div class="div">
                <h1>freeCodeCamp.org</h1>
                <p>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.
                    www.freecodecamp.org</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="d-flex p-5">
            <div class="clo-lg-4 "><img src="/spglogo/2.jpg" alt="" class="img-fluid w-100"></div>
            <div class="clo-lg-4 pl-3 pr-3"><img src="/spglogo/2.jpg" alt="" class="img-fluid w-100"></div>
            <div class="clo-lg-4"><img src="/spglogo/2.jpg" alt="" class="img-fluid w-100"></div>

        </div>


    </div>
    <div class="row">
        <div class="d-flex pl-5 pr-5">
            <div class="clo-lg-4 "><img src="/spglogo/3.jpg" alt="" class="img-fluid w-100"></div>
            <div class="clo-lg-4 pl-3 pr-3"><img src="/spglogo/3.jpg" alt="" class="img-fluid w-100"></div>
            <div class="clo-lg-4"><img src="/spglogo/3.jpg" alt="" class="img-fluid w-100"></div>

        </div>


    </div>
</div>
@endsection