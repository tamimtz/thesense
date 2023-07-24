<nav class="fixed-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark top-nav">
    <div class="container ">
        <a class="navbar-brand" href="{{ url('/') }}">
            The Sense
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>
            
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('post.index') }}">Contents</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Community</a>

                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapseGameNav" role="button" aria-expanded="false" aria-controls="collapseGameNav">Gaming</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapseAnimeNav" role="button" aria-expanded="false" aria-controls="collapseAnimeNav">Anime</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Trading</a>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Account/Game Sale</a>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Game Recharge</a>

                </li>
                
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('post.index') }}">Quiz</a>
    

                </li>
                    
                   
                  
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>    
                        
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('user.index') }}">Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
    
</nav>


<nav class="navbar navbar-expand-md navbar-dark bg-dark bot-nav" id="nav2">
    <div class="container">
        <!--
            
            can add this section if i want the fixed 2nd navbar
            
            <a class="navbar-brand" href="{{ url('/') }}">
            The Sense
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>-->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>
            
            <!-- Right Side Of Navbar -->

            <!-- Navbar 2 With Navbar 1 Gaming -->
            <ul class="navbar-nav me collapse" id="collapseGameNav">

                

                <li class="nav-item " >
                    
                    <a class="nav-link collapseGameNav" href="#"> 
                        <img class="nav-brand" src="{{ url('storage/nav_images/Dota2.png') }}">
                        <span class="game-span"> Dota2 </span>
                    </a>

                </li>

                <li class="nav-item " >
                    
                    <a class="nav-link collapseGameNav" href="#"> 
                        <img class="nav-brand" src="{{ url('storage/nav_images/Valorant.png') }}">
                        <span class="game-span"> Valorant </span>
                    </a>

                </li>

                <li class="nav-item " >
                    
                    <a class="nav-link collapseGameNav" href="#"> 
                        <img class="nav-brand" src="{{ url('storage/nav_images/shatterline.png') }}">
                        <span class="game-span"> Shatterline </span>
                    </a>

                </li>
                <li class="nav-item " >
                    
                    <a class="nav-link collapseGameNav" href="#"> 
                        <img class="nav-brand" src="{{ url('storage/nav_images/Apex.png') }}">
                        <span class="game-span"> Apex Legends </span>
                    </a>

                </li>
                <li class="nav-item " >
                    
                    <a class="nav-link collapseGameNav" href="#"> 
                        <img class="nav-brand" src="{{ url('storage/nav_images/Lol.png') }}">
                        <span class="game-span"> LOL </span>
                    </a>

                </li>
                
                
                
                
            </ul>
            <!-- Navbar 2 With Navbar 1 Anime -->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
    
                </ul>
                
                <!-- Right Side Of Navbar -->
    
                <!-- Navbar 2 With Navbar 1 Gaming -->
                <ul class="navbar-nav ms-end collapse" id="collapseAnimeNav">
    
                    
                    

                    <li class="nav-item " >
                        
                        <a class="nav-link collapseGameNav" href="#"> 
                            <img class="nav-brand" src="{{ url('storage/nav_images/DemonSlayer.png') }}">
                            <span class="game-span"> Demon Slayer </span>
                        </a>
    
                    </li>
    
                    <li class="nav-item " >
                        
                        <a class="nav-link collapseGameNav" href="#"> 
                            <img class="nav-brand" src="{{ url('storage/nav_images/Jujustsu.png') }}">
                            <span class="game-span"> Jujustsu Kaisen  </span>
                        </a>
    
                    </li>
    
                    <li class="nav-item " >
                        
                        <a class="nav-link collapseGameNav" href="#"> 
                            <img class="nav-brand" src="{{ url('storage/nav_images/DragonBallSuper.png') }}">
                            <span class="game-span"> Dragon Ball </span>
                        </a>
    
                    </li>
                    <li class="nav-item " >
                        
                        <a class="nav-link collapseGameNav" href="#"> 
                            <img class="nav-brand" src="{{ url('storage/nav_images/OneP.png') }}">
                            <span class="game-span"> One Piece </span>
                        </a>
    
                    </li>
                    <li class="nav-item " >
                        
                        <a class="nav-link collapseGameNav" href="#"> 
                            <img class="nav-brand" src="{{ url('storage/nav_images/BC.png') }}">
                            <span class="game-span"> Black Clover </span>
                        </a>
    
                    </li>
                    <li class="nav-item " >
                        
                        <a class="nav-link collapseGameNav" href="#"> 
                            <img class="nav-brand" src="{{ url('storage/nav_images/Naruto.png') }}">
                            <span class="game-span"> Naruto </span>
                        </a>
    
                    </li>

                    <li class="nav-item " >
                        
                        <a class="nav-link collapseGameNav" href="#"> 
                            <img class="nav-brand" src="{{ url('storage/nav_images/Aot.png') }}">
                            <span class="game-span"> Attack On Titan </span>
                        </a>
    
                    </li>
                    <li class="nav-item " >
                        
                        <a class="nav-link collapseGameNav" href="#"> 
                            <img class="nav-brand" src="{{ url('storage/nav_images/Vs.png') }}">
                            <span class="game-span"> Vinland Saga </span>
                        </a>
    
                    </li>
                    
                    
                    
                    
                    
                </ul>

        </div>
    </div>
    
</nav>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
      const gamingNav = document.getElementById('collapseGameNav');
      const animeNav = document.getElementById('collapseAnimeNav');
      

      const gamingNavItems = gamingNav.querySelectorAll('.collapseGameNav');
      const animeNavItems = animeNav.querySelectorAll('.collapseGameNav');

      
  
      function hideSections() {
        gamingNav.style.display = 'none';
        animeNav.style.display = 'none';
      }
  
      function showGamingNav() {
        if (gamingNav.style.display === 'block') {
          hideSections();
        } else {
          hideSections();
          gamingNav.style.display = 'block';
        }
      }
  
      function showAnimeNav() {
        if (animeNav.style.display === 'block') {
          hideSections();
        } else {
          hideSections();
          animeNav.style.display = 'block';
        }
      }
  
      // Add click event listeners to the "Gaming" and "Anime" nav-items
      document.getElementById('navbarSupportedContent').addEventListener('click', function (event) {
        const target = event.target;
        if (target.classList.contains('nav-link')) {
          const href = target.getAttribute('href');
          if (href === '#collapseGameNav') {
            showGamingNav();
          } else if (href === '#collapseAnimeNav') {
            showAnimeNav();
          }
        }
      });
  
      // Initially, hide all sections in the second navbars
       hideSections();
        
    });
  </script>
  
  