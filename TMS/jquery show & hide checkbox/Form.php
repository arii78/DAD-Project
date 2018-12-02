<html>
<head>
<title>Form</title>
<link rel="stylesheet" href="style.css" />
<script src="jquery.js"></script>
<script src="scripts.js"></script>
</head>
<form action="" method="POST">
<table>
<tbody>
<tr><td colspan="2"><h1 id="form_title">Form</h1></td></tr>
<tr><td>&ensp;</td><td><input type="email" name="email"/></td></tr>
<tr><td><input type="checkbox" onChange="onCheckboxChanged(this.checked)" name="member" /></td><td id="hiddenRow" "><input type="text" name="username" value="Baiduri" /></td></tr>
<tr ><td> </td><td></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="Submit" /></td></tr>
</tbody>
</table>
</form>
</html>