<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Global Saver | {{$title}} </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
         <a class="navbar-brand" href="#">GlobalSaver</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link  {{ ($active == "home")? 'active' : '' }} " href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  {{ ($active == "posts")? 'active' : '' }} " href="/posts">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  {{ ($active == "events")? 'active' : '' }} " href="/events">Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  {{ ($active == "categories")? 'active' : '' }} " href="/categories">Categories</a>
              </li>
            </ul>
            
            <div class="col-5 dropdown">
              <button class="btn btn-light dropdown-toggle flag-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-flag"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{route('locale',['locale'=>'id'])}}">Bahasa Indonesia</a></li>
                <li><a class="dropdown-item" href="{{route('locale',['locale'=>'en'])}}">English</a></li>
              </ul>
            </div>

            <ul class="navbar-nav ms-auto">
              @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome, {{auth()->user()->name}}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Logout</button>
                  </form>
                  </li>
                </ul>
              </li>      
              @else
              <li class="nav-item">
                <a href="/login" class="nav-link  {{ ($active == "login")? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
              </li>
              @endauth
            </ul>
            
          </div>
        </div>
      </nav>