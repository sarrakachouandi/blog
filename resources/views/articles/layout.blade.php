<!DOCTYPE html>
<html lang="en">
 <head>
   @include('layouts.partials.head')
 </head>
 <body>
@include('layouts.partials.nav')

@yield('content')
@yield('footer')
@include('layouts.partials.footer')

 </body>
</html>