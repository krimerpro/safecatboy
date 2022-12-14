<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body data-spy="scroll" data-target=".scrollspy" class="bg-dark">
   <header class="row">
       @include('includes.header')
   </header>
   <div id="main" class="row">
           @yield('content')
   </div>
   <footer class="row">
       @include('includes.footer')
   </footer>
</body>
</html>
