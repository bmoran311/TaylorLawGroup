<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
    <header>      
      	<x-header.header />
        <x-attorney.banner /> 
  	</header>
    
        @yield('content')

    <x-footer.contact /> 

    <footer>
		    <x-footer.footer />        	
	  </footer>
</body>

</html>
