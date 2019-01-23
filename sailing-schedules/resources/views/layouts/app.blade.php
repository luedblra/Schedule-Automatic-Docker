<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Laravel') }}</title>
      <script src="{{ asset('js/jquery.3.3.1.js') }}" type="application/x-javascript"></script>
      <script src="{{ asset('js/app.js') }}"></script>
      <!-- Scripts -->


      <!-- Fonts -->
      <link rel="dns-prefetch" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

      <!-- Styles -->
      <link rel="stylesheet" href="/css/sweetalert2.min.css">
      <link href="/fontawesome-5.3.1/css/all.css" rel="stylesheet">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

      @yield('head')
   </head>
   <body>
      <div id="app">
         <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
               <a class="navbar-brand" href="{{ route('home') }}">
                  {{ config('app.name', 'Laravel') }}
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">                    

                     <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           Credentials Api <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="{{route('Credential.index')}}">
                              To Acces Smanual
                           </a>
                           <a class="dropdown-item" href="{{route('Credential.create')}}">
                              To Acces Sautomatic
                           </a>
                        </div>
                     </li>

                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                     <!-- Authentication Links -->
                     @guest
                     <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                     <!--  <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li> -->
                     @else
                     <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                           </a>

                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                           </form>
                        </div>
                     </li>
                     @endguest
                  </ul>
               </div>
            </div>
         </nav>

         <main class="py-4">
            @yield('content')
         </main>
      </div>
   </body>
   @yield('script')

   <script src="/fontawesome-5.3.1/js/all.js"></script>
   <script src="/js/sweetalert2.all.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
