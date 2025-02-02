<div class="container-fluid">
    <a href="index.html" class="navbar-brand">Yash <span>Hair</span></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav ml-auto">
            <a href="{{url('home')}}" class="nav-item nav-link active">Home</a>
            <a href="{{url('about')}}" class="nav-item nav-link">About</a>
            <a href="{{url('service')}}" class="nav-item nav-link">Service</a>
            {{-- <a href="price.html" class="nav-item nav-link">Price</a>
            <a href="team.html" class="nav-item nav-link">Barber</a> --}}
            <a href="{{url('gallary')}}" class="nav-item nav-link">gallary</a>
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                <div class="dropdown-menu">
                    <a href="blog.html" class="dropdown-item">Blog Page</a>
                    <a href="single.html" class="dropdown-item">Single Page</a>
                </div>
            </div> --}}
            <a href="{{url('contact')}}" class="nav-item nav-link">contact</a>
        </div>
    </div>
</div>