<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Trip Tours Cartagena | Pagos</title>
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
         <div class="container-fluid p-0" style="background-color:var(--bs-light); width: 100%; height: 99px; color: black">
            <!---- no content goes here --->
        </div>
    </div>


    <!-- Payment Methods Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Metodos</h5>
                <h1 class="mb-4">Métodos de pago disponibles</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti deserunt tenetur
                    sapiente atque. Magni non explicabo beatae sit, vel reiciendis consectetur numquam id similique sunt
                    error obcaecati ducimus officia maiores.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <!--- list ---->
                <div class="col-lg-4 col-md-6">
                    <img class="img-fluid w-100 rounded-top" src={{ asset('img/payment_methods.png') }} alt="Image"
                        style="min-height: 200px; max-height: 300px;">
                </div>
                <div class="col-lg-4 col-md-6">
                    <img class="img-fluid w-100 rounded-top" src={{ asset('img/nequi-logo.webp') }} alt="Image"
                        style="min-height: 200px; max-height: 300px;">
                </div>
                <div class="col-lg-4 col-md-6">
                    <img class="img-fluid w-100 rounded-top" src={{ asset('img/davivienda_logo.jpg') }} alt="Image"
                        style="min-height: 200px; max-height: 300px;">
                </div>

            </div>
        </div>
    </div>
    <!-- Payment Methods End -->

    <!-- Payment Instructions Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Intrucciones</h5>
                <h1 class="mb-4">Pasos a seguir</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti deserunt tenetur
                    sapiente atque. Magni non explicabo beatae sit, vel reiciendis consectetur numquam id similique sunt
                    error obcaecati ducimus officia maiores.
                </p>
            </div>
            <!-------- Steps To Follow ---------->
            <div class="mb-5 text-center">
                <h3 class="mb-4">Paso 1</h3>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti deserunt tenetur
                    sapiente atque. Magni non explicabo beatae sit, vel reiciendis consectetur numquam id similique sunt
                    error obcaecati ducimus officia maiores.
                </p>
            </div>
             <div class="mb-5 text-center">
                <h3 class="mb-4">Paso 2</h3>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti deserunt tenetur
                    sapiente atque. Magni non explicabo beatae sit, vel reiciendis consectetur numquam id similique sunt
                    error obcaecati ducimus officia maiores.
                </p>
            </div>
             <div class="mb-5 text-center">
                <h3 class="mb-4">Paso 3</h3>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti deserunt tenetur
                    sapiente atque. Magni non explicabo beatae sit, vel reiciendis consectetur numquam id similique sunt
                    error obcaecati ducimus officia maiores.
                </p>
            </div>
             <div class="mb-5 text-center">
                <h3 class="mb-4">Paso 4</h3>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti deserunt tenetur
                    sapiente atque. Magni non explicabo beatae sit, vel reiciendis consectetur numquam id similique sunt
                    error obcaecati ducimus officia maiores.
                </p>
            </div>
        </div>
    </div>
    <!-- Payment Instructions End -->

    <!-- JavaScript -->
    @include('partials.footer')
</body>
<footer>
    @include('partials.footer-info')
</footer>

</html>