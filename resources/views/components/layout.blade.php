<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Prototype Listings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/home.css" media="screen">
    <link rel="stylesheet" href="/css/gallery.css" media="screen">
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    
  
    
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "/images/default-logo.png"
      }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">

    <style>
      .proto-card-image
      {
        width: 100%;
      }

      .proto-card-image
      {
        grid-area: card-image;
      }

      .proto-card-text
      {
        grid-area: card-text;
      }

      @media (min-width: 992px)
      {
        .proto-card-text p
        {
          line-height: 8px;
          font-size: 12px;
        }
        .proto-card-text h4
        {
          font-size: 20px;
        }
      }
      

      @media (min-width: 768px)
      {
        .proto-card
        {
          display: grid;
          grid-template-columns: 4fr 5fr;
          grid-template-rows: 1fr;
          grid-template-areas: 
            "card-image card-text";

        }
      }

      @media (max-with-767px)
      {
        .proto-card
        {
          grid-auto-rows: ;
          grid-template-areas: 
            "card-image"
            "card-text";
        }
      }

      /* logo  */
      .u-logo {
        color: inherit;
        font-size: inherit;
        font-family: inherit;
        line-height: inherit;
        letter-spacing: inherit;
        text-transform: inherit;
        font-style: inherit;
        font-weight: inherit;
        text-decoration: none;
        border: 0 none transparent;
        outline-width: 0;
        background-color: transparent;
        margin: 0;
        -webkit-text-decoration-skip: objects;
      }
    </style>
  </head>
  <body data-home-page="/" data-home-page-title="Prototypes" class="u-body u-xl-mode" data-lang="en">

    {{-- Begin Header --}}
    <header class="" id="sec-3938">
      <div class="u-clearfix relative w-full min-h-[60px] flex flex-row justify-between items-center ">

        {{-- Logo --}}
        <a href="/" class="u-logo object-cover block align-middle bg-cover bg-no-repeat bg-center w-16 h-8 mr-auto ml-8 md:ml-12 lg:ml-16">
          <img src="{{asset('/images/default-logo.png')}}" class="my-0 w-full h-full">
        </a>

        {{-- Begin Navigation  --}}
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1 ml-0 mr-auto absolute right-8 md:right-12 lg:right-16">

          {{-- Begin Collapsoble Menu Burger --}}
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
              </svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <rect y="1" width="16" height="2"></rect>
                  <rect y="7" width="16" height="2"></rect>
                  <rect y="13" width="16" height="2"></rect>
                </g>
              </svg>
            </a>
          </div> {{-- End Collapsible Menu Burger --}}

          {{-- Begin Collapsible Menu Items --}}
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1">
              <li class="u-nav-item">
                <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/" style="padding: 10px 20px;">
                  Prototypes
                </a>
              </li>
              <li class="u-nav-item">
                <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/prototypes/gallery" style="padding: 10px 20px;">
                  Gallery
                </a>
              </li>

              @auth

              <li class="u-nav-item">
                <span class="font-bold">
                  Welcome {{ auth()->user()->name }}
                </span> 
                
              </li>
              <li class="u-nav-item">
                <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/prototypes/manage" style="padding: 10px 20px;">
                  Manage Prototypes
                </a>
              </li>
              <li class="u-nav-item">
                <form method="POST" action="/logout" class="inline">
                  @csrf
                  <button type="submit">
                    Logout
                  </button>
                </form>
              </li>

              @else

              <li class="u-nav-item">
                <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/register" style="padding: 10px 20px;">
                  Register
                </a>
              </li>
              <li class="u-nav-item">
                <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/login" style="padding: 10px 20px;">
                  Login
                </a>
              </li>

              @endauth

              <li class="u-nav-item">
                <a class="bg-[#3E5E6D] rounded-lg py-[6px] px-4" href="/prototypes/create">
                  <button class="text-xs text-white">Add New</button>
                </a>
              </li>

            </ul>
          </div> {{-- End Collapsible Menu Items --}}

          {{-- Begin Navigation Items  --}}
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                  <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="/">
                      Prototypes
                    </a>
                  </li>
                  <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="/prototypes/gallery">
                      Gallery
                    </a>
                  </li>

                  @auth

                  <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="/prototypes/manage">
                      Manage Prototypes
                    </a>
                  </li>
                  <li class="u-nav-item">
                    <form method="POST" action="/logout" class="inline">
                      @csrf
                      <button type="submit">
                        Logout
                      </button>
                    </form>
                  </li>

                  @else

                  <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="/register">
                      Register
                    </a>
                  </li>
                  <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="/login">
                      Login
                    </a>
                  </li>

                  @endauth

                </ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div> {{-- End Nvigation Items --}}
        </nav> {{-- End Navigation --}}
      </div>
    </header> {{-- End Header --}}


    {{-- Begin Main Content Section  --}}
    <section {{$attributes->merge(['class' => 'text-center text-white bg-[#425465] u-section-1"'])}}>
      
    {{-- Content --}}
    {{ $slot }}

    </section> {{-- End Main Content Section  --}}

    {{-- Footer  --}}
    <footer class="u-footer u-footer -mb-12 m-top bg-[#1E2E4D] pt-4" id="sec-803e">
        
      <div class="u-clearfix u-sheet u-sheet-1"> 
        <p class="text-center">
          <a class="bg-[#3E5E6D] rounded-md py-2" href="/prototypes/create">
            <button class="px-6 text-white">Add New</button>
          </a>
        </p>
        <p class="text-center u-text u-text-body-alt-color u-text-1">
          
          <a href="#" class="u-none u-text-body-alt-color u-btn-1" target="_blank">
            PrimeProducts
          </a>
        </p>
      </div> 
      <div class="flex flex-row items-center justify-center text-xs">
          <p class="u-text text-white px-1">
            <span>&copy; 2022 by</span>
          </p>
          <a class="no-underline text-blue-100 hover:underline hover:text-blue-300 px-1" href="https://kcsamm.netlify.app" target="_blank">
            <span>KC Samm</span>
          </a>
          <p class="u-text text-white px-1">
            <span>for</span>
          </p>
          <a class="text-blue-100 no-underline hover:underline hover:text-blue-300 px-1" href="https://studioeternal.net" target="_blank">
            <span>studioeternal</span>
          </a>. 
      </div>
    </footer>
    <!-- <section class="u-backlink u-clearfix -mt-4 mb-0 bg-[#425465]">
      <p>
        <a class="bg-[#3E5E6D] rounded-xl py-4" href="/prototypes/create">
          <button class="px-8 text-white">Add New</button>
        </a>
      </p>
      <p class="u-text text-white">
        <span>&copy; 2022 by</span>
      </p>
      <a class="no-underline text-blue-100 hover:underline hover:text-blue-300" href="https://kcsamm.netlify.app" target="_blank">
        <span>KC Samm</span>
      </a>
      <p class="u-text text-white">
        <span>for</span>
      </p>
      <a class="text-blue-100 no-underline hover:underline hover:text-blue-300" href="https://studioeternal.net" target="_blank">
        <span>studioeternal</span>
      </a>. 
    </section> -->

    {{-- Flash message  --}}
    <x-flash-message />

    <script src="/js/jquery.js"></script>
    <script defer src="/js/nicepage.js"></script>
</body>
</html>