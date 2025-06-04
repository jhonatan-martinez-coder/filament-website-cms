<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Trip Tours Cartagena | Politicas</title>
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

    <!-- Policies Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="h-100">
                        <h1 class="mb-4 text-center">Politicas</h1>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, dolorum,
                            doloribus sunt dicta, officia voluptatibus libero necessitatibus natus impedit quam ullam
                            assumenda? Id atque iste consectetur. Commodi odit ab saepe!</p>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos
                            voluptatem
                            suscipit neque enim, doloribus ipsum rem eos distinctio, dignissimos nisi saepe nulla?
                            Libero
                            numquam perferendis provident placeat molestiae quia?</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="h-100">
                        <h1 class="mb-4 text-center">Politicas</h1>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, dolorum,
                            doloribus sunt dicta, officia voluptatibus libero necessitatibus natus impedit quam ullam
                            assumenda? Id atque iste consectetur. Commodi odit ab saepe!</p>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos
                            voluptatem
                            suscipit neque enim, doloribus ipsum rem eos distinctio, dignissimos nisi saepe nulla?
                            Libero
                            numquam perferendis provident placeat molestiae quia?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Policies End -->

    <!------------ JAVASCRIPT ---------->
    @include('partials.footer')
</body>
<footer>
    @include('partials.footer-info')
</footer>

</html>