
<link rel="stylesheet" href="{{asset('css/navbar.css')}}">






<nav class="header">


        <div class="allNav" id="">
            <!-- Left Side Of Navbar -->
            <ul class="leftSideNav">
              <li class="">
                <a class="" href="/"><button class="navButt">Home</button></a>
              </li>

              <li class="">
                <a class="" href="/posts"><button class="navButt">All blog posts</button></a>
              </li>
              @guest

              @else
              <li class="">

                <a class="" href="/dashboard"><button class="navButt">My dashboard</button></a> 
              </li>

              @endguest

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="rightSideNav">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="">
                            <a class="" href="{{ route('login') }}"><button class="navButt">{{ __('Login') }}</button></a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="">
                            <a class="" href="{{ route('register') }}"> <button class="navButt"> {{ __('Register') }}</button></a>
                        </li>
                    @endif
                @else
                
                <li class="">
                    <a class="" href="/posts/create"><button class="navButt">Create Post</button></a>
                  </li>
    
                    <li class="">

                            <a class="" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                               
                                <button class="navButt"> {{ __('Logout') }}</button>
                            </a>


                    </li>
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
</nav>