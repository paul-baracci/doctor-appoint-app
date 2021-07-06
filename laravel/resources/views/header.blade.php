<header class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topnav" aria-expanded="false" aria-label="Toggle navigation">
        <div class="navbar-toggler-icon"></div>
        </button>

        <a class="navbar-brand" href="/"><img src="#" alt="Augmented Heart Clinic"></a>
        <div class="collapse navbar-collapse mx-auto" id="topnav">
            <a href="/services" class="nav-link">Services</a>
            <a href="/about" class="nav-link">About</a>
            <a href="/blog" class="nav-link">Blog</a>
            <a href="/contact" class="nav-link">Contact</a>
            <a href="/terms" class="nav-link">Terms and conditions</a>
            <a href="https://www.facebook.com/" class="nav-link">
            <img class="img-fluid" src="#" alt="Facebook page"></a>
        </div>
        <cart></cart>
        <div class="hidden sm:flex sm:items-center sm:ml-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                        <div>{{ Auth::user()->name }}</div>

                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </nav>

</header>
