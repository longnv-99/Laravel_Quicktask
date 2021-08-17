<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links start -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">{{ __('message.home')}}</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">{{ __('message.contact')}}</a>
        </li>
    </ul>
    <!-- Left navbar links end -->
    <!---Right navbar links start -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('change-language', ['locale' => 'vi']) }}" role="button">
                <img class="flagIcon" src="{{ asset('img/vietnamese.png') }}">
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('change-language', ['locale' =>'en']) }}" role="button">
                <img class="flagIcon" src="{{ asset('img/english.jpg') }}">
            </a>
        </li>
    </ul>
    <!---Right navbar links end -->
</nav>
