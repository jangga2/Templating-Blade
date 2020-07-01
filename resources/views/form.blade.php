<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>

<form action="/sapa" method="POST">
	@csrf
<p>First Name :</p>
<input type="text" name="nama_depan">
<p>Last Name :</p>
<input type="text" name="nama_belakang">

<p>Gender :</p>
<p><input type="radio" name="gender" value="male">Male</p>
<p><input type="radio" name="gender" value="female">Female</p>

<p>Nationality :</p>
<p>
	<select>
		<option>Indonesian</option>
		<option>Malaysian</option>
		<option>American</option>
		<option>Arabian</option>
	</select>
</p>

<p>Language Spoken :</p>
<p><input type="checkbox" name="bahasa">Bahasa Indonesia</p>
<p><input type="checkbox" name="bahasa">English</p>
<p><input type="checkbox" name="bahasa">Other</p>

<p>Bio :</p>
<textarea cols="40" rows="10"></textarea>

<p><button type="submit">Submit</button></p>
</body>
</html>