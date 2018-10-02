@extends('base')

@section('outsidecontainer')
<div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/assets/slider/1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                Acme Nature Tours
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/assets/slider/2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                Experience nature as never before.
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/assets/slider/3.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                Register Now
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/assets/slider/4.jpg" alt="Fourth slide">
            <div class="carousel-caption d-none d-md-block">
                Join our team!
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@stop

@section('content')

<div class="row">
    <div class="col-md-12">

    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="card bg-light mb-3">
            <div class="card-header text-center">About</div>
            <div class="card-body text-center">
                <i class="fas fa-globe-americas fa-5x"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-white mb-3">
            <div class="card-header text-center">Tours</div>
            <div class="card-body text-center">
                <i class="fas fa-eye fa-5x"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-light mb-3">
            <div class="card-header text-center">Contact</div>
            <div class="card-body text-center">
                <i class="fas fa-phone fa-5x"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
            </div>
        </div>
    </div>
</div>
@stop