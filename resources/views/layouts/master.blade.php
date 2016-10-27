<!DOCTYPE html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Omar Khan's lorem Ipsum and Random User Generator' --}}
        @yield('title','Lorem Ipsum and Random User Generator')
    </title>

    <meta charset='utf-8'>
    <link href="/css/generate.css" type='text/css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <header>
      <h1>Omar Khan's Lorem Ipsum and Random User Generator</h1>
    </header>

    <nav>
       <ul>
           <li><a href='/loremipsum'>Generate Random Text</a></li>
           <li><a href='/users'>Generate Random Users</a></li>
           <li><a href='/password'>Generate Random Password</a></li>
       </ul>
   </nav>
   <br>


    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
