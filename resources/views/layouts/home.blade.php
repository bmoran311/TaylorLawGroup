<!DOCTYPE html>
<html lang="en">

@include('partials.head')
<body>
    <header>      
      	<x-header.header />
		<x-home.header />    
  	</header>

	<x-home.about />    
	<x-home.team />    
	<x-home.software />     

	<x-home.testimonials />      
	<x-footer.contact />     

	<footer>
		<x-footer.footer />        	
	</footer>
</body>
</html>
