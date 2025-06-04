<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Trip Tours Cartagena | Sobre Nosotros</title>
    @include('partials.header')
</head>

<body>

    <!-- Spinner Start -->
    @include('partials.spinner')
    <!-- Spinner End -->

    <!-- Topbar Start -->
    @include('partials.topbar')
    <!-- Topbar End -->

    <div class="container-fluid position-relative p-0">
        <!-- Navbar Start -->
        @include('partials.navbar')
        <!-- Navbar End -->
        <!--- just for placing a background color ---->
        <div class="container-fluid p-0"
            style="background-color:var(--bs-light); width: 100%; height: 99px; color: black">
            <!---- no content goes here --->
        </div>
    </div>

    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <img src={{ asset('img/trip_tours_cartagena_logo-Photoroom.png') }} class="img-fluid w-100 h-100"
                        alt="about-the-company-img">
                </div>
                <div class="col-lg-7"
                    style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                    <h5 class="section-about-title pe-3">Sobre Nosotros</h5>
                    <h1 class="mb-4">Bienvenido a <span class="text-primary">Trip Tours Cartagena</span></h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, dolorum,
                        doloribus sunt dicta, officia voluptatibus libero necessitatibus natus impedit quam ullam
                        assumenda? Id atque iste consectetur. Commodi odit ab saepe!</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos voluptatem
                        suscipit neque enim, doloribus ipsum rem eos distinctio, dignissimos nisi saepe nulla? Libero
                        numquam perferendis provident placeat molestiae quia?</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <div class="container-fluid about py-2">
        <div class="container py-5 align-items-center">
            <div class="row align-items-center">
                <!-- Mision Start -->
                <div class="col-lg-6 col-md-12">
                    <h1 class="mb-4 text-center">Mision</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, dolorum,
                        doloribus sunt dicta, officia voluptatibus libero necessitatibus natus impedit quam ullam
                        assumenda? Id atque iste consectetur. Commodi odit ab saepe!</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos voluptatem
                        suscipit neque enim, doloribus ipsum rem eos distinctio, dignissimos nisi saepe nulla? Libero
                        numquam perferendis provident placeat molestiae quia?</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos voluptatem
                        suscipit neque enim, doloribus ipsum rem eos distinctio, dignissimos nisi saepe nulla? Libero
                        numquam perferendis provident placeat molestiae quia?</p>
                </div>
                <!-- Mision End -->

                <!-- vision Start -->
                <div class="col-lg-6 col-md-12">
                    <h1 class="mb-4 text-center">Vision</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, dolorum,
                        doloribus sunt dicta, officia voluptatibus libero necessitatibus natus impedit quam ullam
                        assumenda? Id atque iste consectetur. Commodi odit ab saepe!</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos voluptatem
                        suscipit neque enim, doloribus ipsum rem eos distinctio, dignissimos nisi saepe nulla? Libero
                        numquam perferendis provident placeat molestiae quia?</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos voluptatem
                        suscipit neque enim, doloribus ipsum rem eos distinctio, dignissimos nisi saepe nulla? Libero
                        numquam perferendis provident placeat molestiae quia?</p>
                </div>
                <!-- vision End -->
            </div>

        </div>
    </div>

    <!------------ JAVASCRIPT ---------->
    @include('partials.footer')
</body>
<footer>
    @include('partials.footer-info')
</footer>

</html>