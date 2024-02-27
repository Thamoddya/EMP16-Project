<!-- Header navigation -->
<div class="nav-wrapper fixed-top">
    <div class="container">
        <nav class="navbar navbar-toggleable-sm navbar-expand-md">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                ☰
            </button>
            <a class="navbar-brand mx-auto" href="{{route('Home')}}"><img alt="vertexcooperation" class="image-logo" src="{{asset('images/icons/Logo.png')}}"></a>

            <div class="navbar-collapse collapse">
                <ul class="navbar-nav nav-justified w-100 nav-fill">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger {{ Route::currentRouteName() == 'Home' ? 'active' : '' }}" href="{{ route('Home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger {{ Route::currentRouteName() == 'About' ? 'active' : '' }}" href="{{route('About')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger {{ Route::currentRouteName() == 'Partner' ? 'active' : '' }}" href="{{ route('Partner') }}">Partners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger {{ Route::currentRouteName() == 'modal' ? 'active' : '' }}" href="{{route("modal")}}">Modal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger {{ Route::currentRouteName() == 'projects' ? 'active' : '' }}" href="{{route("projects")}}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger {{ Route::currentRouteName() == 'Contact-Us' ? 'active' : '' }}" href="{{ route('Contact-Us') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger {{ Route::currentRouteName() == 'Team' ? 'active' : '' }}" href="{{ route('Team') }}">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger {{ Route::currentRouteName() == 'branding' ? 'active' : '' }}" href="{{ route('branding') }}">Branding</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
