<!DOCTYPE html>
<html>
<head>
	<title>Validasi Login</title>
	 <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
    <script src="../assets/jquery/jquery-1.12.4.min.js"></script>
</head>
<body>
	
<form onSubmit="alert('Berhasil,');return false;">
    <div class="form-input">
        <input type="text" title="8 Character Username" pattern="^[a-z\_]8,20}$" placeholder="Username" name="username" required>
    </div>
	
    <br>
	<input type="text" title="8 Character Password" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" name="assword" placeholder="Password" required>
	<input type="submit" value="login">
</form>

    <!-- <form method="post" action="aksi.php" onsubmit="return validasi_input(this)">
        <p>Username: <input name="username" type="text"></p>
        <p>Password: <input name="Password" type="text"></p>
        <p><input name="" type="submit" value="Submit"></p>
    </form>

<script type="text/javascript">
function validasi_input(form){
   pola_username=/^[a-z/_\-]{8,20}$/;
   if (!pola_username.test(form.username.value)){
      alert ('Username minimal 8 karakter dan hanya boleh Huruf kecil atau undescore!');
      form.username.focus();
      return false;
   }
return (true);
}
</script> -->
</body>
</html>