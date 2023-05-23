<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <form action="#">
            <div class="input-group input-navbar">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                </div>
                <input type="text" class="form-control" placeholder="Enter keyword." aria-label="Username" aria-describedby="icon-addon1">
            </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ asset('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show.about-us') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show.doctor') }}">Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show.blog') }}">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show.contact') }}">Contact</a>
                </li>
                @if(Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" style="background-color: green; color: white;" href="{{ url('myAppointment') }}">My Appointment</a>
                        </li>
                        <x-app-layout>
                        </x-app-layout>
                    @else
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href={{ route('login') }}>Login </a>
                        </li>

                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register </a>
                        </li>
                    @endauth
                @endif


            </ul>
        </div> <!-- .navbar-collapse -->
    </div> <!-- .container -->
</nav>
