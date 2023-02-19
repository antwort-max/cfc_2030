<!doctype html>
<html lang="es">
	<head>

		<!-- Meta tags -->
    	<meta charset="UTF-8">
		<meta http-equiv="refresh" content="20">
		<meta name="language" content="spanish">
		<meta name="audience" content="all">
		<meta name="author" content="Centro Ferretero Caupolicán">
		<meta name="description" content="Centro Ferretero Caupolican especialista en ceramicas, porcelantos, piso flotante">
		<meta name="keywords" content="Santiago, Ferreteria, Caupolican, Ceramica, Piso Flotante, Porcelanato">
		<meta name="category" content="Ceramica, Piso Flotante, Porcelanato">
		<meta name="telephone" content="+56939518897">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
		<title>Caupolican</title>
        
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/simplex/bootstrap.min.css" integrity="sha384-FYrl2Nk72fpV6+l3Bymt1zZhnQFK75ipDqPXK0sOR0f/zeOSZ45/tKlsKucQyjSp" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" crossorigin="anonymous">

		<!-- Fonts -->
    	<link rel="dns-prefetch" href="//fonts.gstatic.com">
    	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

		<!-- Favicon -->
    	<link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}" /> 

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-195365223-1"></script>
		<script>
  			window.dataLayer = window.dataLayer || [];
  			function gtag(){dataLayer.push(arguments);}
  			gtag('js', new Date());

  			gtag('config', 'UA-195365223-1');
		</script>
    </head>
 	
	<body>
        
    @include('web.front.component.header')
    
    @include('web.front.component.menu')
        
    @yield('content')
    
    @include('web.front.component.footer')
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  	</body>
</html>