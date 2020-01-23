<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('Page_title', 'Contact Page')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('Content')

	<p>This is the Contact Page</p>
	
	<table border="1">
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>-</td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td>:</td>
			<td>-</td>
		</tr>
	</table>

@endsection