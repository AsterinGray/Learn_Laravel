<!DOCTYPE html>
<html>
<head>
	<title>Master</title>
</head>
<body>

	<header>

		<h2>Blog Learn Laravel</h2>
		<nav>
			<a href="/blog">HOME</a>
			|
			<a href="/blog/about">ABOUT</a>
			|
			<a href="/blog/contact">CONTACT</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>

	<!-- bagian judul halaman blog -->
	<h3> @yield('Page_title') </h3>


	<!-- bagian konten blog -->
	@yield('Content')


	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="google.com">Google.com</a>. 2020</p>
	</footer>

</body>
</html>