<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ env('WEBSITE_TITLE') }} | Inicio</title>
    @include('partials.header')
</head>

<body>
    <!-- Spinner Start -->
    @include('partials.spinner')
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid p-0">
        <!-- Navbar Start -->
        @include('partials.navbar')
        <!-- Navbar End -->
    </div>
    <!-- Navbar & Hero End -->
    <!-- Carousel Start -->
    <div class="index-page-carousel">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src={{ asset('img/carousel/places_33.jpeg') }} alt="Image">
                </div>
                <div class="carousel-item">
                    <img src={{ asset('img/carousel/places_10.jpeg') }}  alt="Image">
                </div>
                <div class="carousel-item">
                    <img src={{ asset('img/carousel/places_27.jpeg') }} alt="Image">
                </div>
                <div class="carousel-item">
                    <img src={{ asset('img/carousel/places_7.jpeg') }} alt="Image">
                </div>
                <div class="carousel-item">
                    <img src={{ asset('img/carousel/slide_1.jpeg') }} alt="Image">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-------- sectin of products grouped by category --------->
    @foreach ($listOfCategorizedProducts as $productCategory)
    <section style="padding-top: 4rem" id={{ strtolower($productCategory['name']) }} >
        <div class="container-fluid pt-3 pb-1 mt-3">
            <div class="container-lg">
                <!------------ category section title ------------>
                <div class="mx-auto text-center mb-3">
                    <h3 class="section-title px-3">{{ $productCategory['name'] }}</h3>
                </div>
            
                <div class="row g-4 products justify-content-center">
                    @foreach ($productCategory['products'] as $product)
                    <!---product---->
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="image-wraper">
                                <img src={{ asset('/storage/' . $product->thumbnail) }}
                                alt="Image">
                            </div>
                            <div class="card-body">
                                <a href={{ url('/products/' . $product->id . '/details') }} class="h4 mb-5"
                                    style="width: 100%;">{{ $product->title}}</a>
                                <a href={{ url('/products/' . $product->id . '/details') }}
                                    class="btn btn-primary rounded-pill py-2 px-4 mt-3 text-light" style="width: 100%;">Mas
                                    Información</a>
                            </div>
                        </div>
                    </div>
                    <!--- End product---->
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-------- sectin of products grouped by category --------->

    <!---------- JAVASCRIPT ---------->
    @include('partials.footer')
</body>
<footer>
    @include('partials.footer-info')
</footer>

</html>