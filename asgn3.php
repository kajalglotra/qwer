<!DOCTYPE html>
<html>
<head>
  <title>form validation</title>
</head>
<body>
  <form>
    Name: <input type="text" name="name" required><br /><br />
    E-mail: <input type="text" name="email" required><br /><br />
    Password: <input type="password" name="pass" id="pass" required><br /><br />
    Confirm-Password: <input type="password" name="confirm" id="confirm" required><br /><br />
    <input type="checkbox" name="check" id="check" onclick="func()" required> (I agree terms and condition)<br /><br />
    <input type="submit" id="submit" value="Submit">
  </form>
<script type="text/javascript" language="JavaScript">

$('#check').click(){function(){
    if($('#pass')!=$('#confirm')){
       alert("Please fill the Name");
     }
   }
   };	
</script>
</body>
</html>




