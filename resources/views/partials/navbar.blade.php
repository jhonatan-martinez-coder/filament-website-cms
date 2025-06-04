
@php
    $narBarItems = DB::table('nav_bar_urls')->get();
@endphp


<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="/" class="navbar-brand p-0">
        
        <img src="{{ asset('img/trip_tours_cartagena_logo-Photoroom.png') }}" alt="trip_tours_cartagena_logo">
    </a>
    <h1 class="m-0 text-primary">Trip Tours</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href={{ url('/') }} class="nav-item nav-link">Inicio</a>
            @foreach ( $narBarItems as $navItem )
            <!--------- render nav item depending of the type --------->
            @php
                $child_urls = json_decode($navItem->child_urls)
            @endphp
                @switch($navItem->type)
                    @case('dropdown')
                         <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{$navItem->name}}</a>
                                <div class="dropdown-menu m-0">
                                    @foreach ($child_urls as $child_url)
                                            <a href={{ url('/page/'.$child_url->data->href) }} class="dropdown-item">{{$child_url->data->name}}</a>
                                    @endforeach
                                </div>
                            </div>
                        @break
                    @default
                        <a href={{ url( '/page/' . $navItem->url ) }} class="nav-item nav-link">{{$navItem->name}}</a>
                @endswitch

            @endforeach
        </div>
        <!--- <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a> --->
    </div>
</nav>