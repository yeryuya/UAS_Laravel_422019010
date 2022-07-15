<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Toko Online</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Description" lang="en" content="">
	<link rel="stylesheet" href="style.css">
 
</head>
<div class="topnav">
    <a class="active" href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
    <div class="login-container">
      <form action="/action_page.php">
        <input type="text" placeholder="Username" name="username">
        <input type="text" placeholder="Password" name="psw">
        <button type="submit">Login</button>
      </form>
    </div>
  </div>
<body>
<!-- banner -->
<div class="row row--banner">
		<section class="row container-medium banner-content">
		<h1 class="banner-content__heading">
			 Toko Komputer
		</h1>
   
		<button class="button"><span>Beli Sekarang</span></button>
	</section>
</div>
<!-- features -->
<div class="row row--white row--padding-wide features">
	<div class="row container-medium">
		<div class="row features__row">
			<div class="col-narrow--right features__bike">
			</div>
			<div class="col-wide">
				<h2 class="features__heading">
					Komputer 1
				</h2>
   
       
       <img class="img img-responsive" src="{{asset('images/img1.jpg')}}"><br>
            <p>Dengan harga terjangkau dengan kualitas bagus garansi 1 tahun. jangan lewatkan kesempatan anda untuk memiliki komputer ini untuk belajar anda.</p><br>
        <button class="button2 center"><span>Beli!</span></button><br>
			</div>
		</div>
		<div class="row features__row">
			<div class="col-narrow features__phone">
			</div>
			<div class="col-wide--right features__padding">
				<h2 class="features__heading">
					Komputer 2
				</h2>
				<img class="img img-responsive" src="{{asset('images/img2.jpg')}}"><br>
        <p>
    Dengan harga terjangkau dengan kualitas bagus garansi 1 tahun. jangan lewatkan kesempatan anda untuk memiliki komputer ini untuk belajar anda.
        </p><br>
        <button class="button2 center"><span>Beli!</span></button><br>
			</div>
		</div>
		<div class="row features__row">
			<div class="col-narrow--right features__safe">
			</div>
			<div class="col-wide">
				<h2 class="features__heading">
					Komputer 3
				</h2>
				<img class="img img-responsive" src="{{asset('images/img3.jpg')}}"><br>
        <p class="features">Dengan harga terjangkau dengan kualitas bagus garansi 1 tahun. jangan lewatkan kesempatan anda untuk memiliki komputer ini untuk belajar anda.</p>
        <br>
        <button class="button2 center"><span>Beli!</span></button><br><br>
			</div>
		</div>
	</div>
</div>

<!-- footer -->
<div class="row row--dark-grey row--padding-narrow">
	<footer class="row container-wide">
		<div class="col-wide">
      <p class="features_text">theodore 422019010</p>
		</div>
			</footer>
</div>
</body>
</html>