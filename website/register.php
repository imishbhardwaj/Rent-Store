<!DOCTYPE html>
<html>
<head>
<title>Register Form</title>
<style>
table
{color:white;
background-color:black;
border-radius:10px;
}
</style>
</head>
<body background="bg1.jpeg">
<form action="connect.php" method="POST">
<table align="center" cellspacing="15" border="0">
<tr>
<td>
NAME:
</td>
<td>
<input type="text" placeholder="Name" name="name">
</td>
</tr>
<tr>
<td>
PASSWORD:
</td>
<td>
<input type="password" placeholder="password" name="password">
</td>
</tr>
<tr>
<td>
GENDER:
</td>
<td>
<input type="radio" name="gender" value="m">Male
<input type="radio" name="gender" value="f">Female
</td>
</tr>
<tr>
<td>
DATE OF BIRTH:
</td>
<td>
<input type="date" name="date">
</td>
</tr>
<tr>
<td>
EMAIL:
</td>
<td>
<input type="mail" placeholder="email" name="email">
</td>
</tr>
<tr>
<td>
PHONE NO:
</td>
<td>
<select>
<option>91</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
</select>
<input type="phone no" placeholder="phone" name="phone">
</td>
</tr>
<tr>
<td>
ADDRESS:
</td>
<td>
<textarea rows="6" cols="25" placeholder="enter your address" name="address"></textarea>
</td>
</tr>
<tr>
<td>
STATE:
</td>
<td><input type="text" id="name" name="state" placeholder="enter your state" >
	<select name="state" id="state">
  <option value="Maharashtra">Maharashtra</option>
  <option value="Gujarat">Gujarat</option>
  <option value="Rajasthan">Rajasthan</option>
  <option value="Assam">Assam</option>
</select>
</td>
</tr>
<tr>
<td>
CITY:
</td>
<td><input type="text" id="name" name="city" placeholder="enter your city" >
	<select name="city" id="state">
  <option value="Mumbai">Mumbai</option>
  <option value="Ahmedabad">Ahmedeabad</option>
  <option value="Jiapur">Jaipur</option>
  <option value="Guhawahti">Guhawahti</option>
</select>
</td>
</tr>
<tr>
<td>
PINCODE:
</td>
<td><input type="text" id="name" name="pincode" placeholder="enter your pincode" >
</td>
</tr>
<tr>
<td align="center" colspan="2">
<input type="submit"  value="submit" name="submit">
</td>
</tr>
</table>
</form>
</body>
</html>