<header>
    <nav class="navbar navbar-expand-lg navbar-light shadow bg-white">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topnav" aria-expanded="false" aria-label="Toggle navigation">
        <div class="navbar-toggler-icon"></div>
        </button>
        <a class="navbar-brand" href="{{ route('home') }}"><img src="logo.png" alt="Augmented Heart Clinic" height="50px"></a>
        <div class="collapse navbar-collapse justify-content-start mx-auto" id="topnav">
            <a href="{{ route('services.index') }}" class="nav-link">Services</a>
            <a href="{{ route('doctors.index') }}" class="nav-link">About</a>
            <a href="{{ route('articles.index') }}" class="nav-link">Blog</a>
            <a href="{{ route('contact.index') }}" class="nav-link">Contact</a>
            <a href="{{ route('terms') }}" class="nav-link">Terms and conditions</a>
        </div>
        <cart></cart>
    </nav>
</header>
