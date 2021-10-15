<?php  if(isset($_GET['firstname'])){
    $name=$_GET('name');
}else{
    print_r('all fields required');
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='' method='get' style="width:500px;">
    <label for="fname">First name:</label>
        <input type = 'text' name='firstname' value='' placeholder='' style='margin:10px'><br>
        <label for="lastname">last name:</label>
        <input type = 'text' name='lastname' value='' placeholder=''style='margin:10px'><br>
        <label for="mail">mail:</label>
        <input type = 'mail' name='mail' value='' placeholder=''style='margin:10px'><br>
        <label for="numbere">number:</label>
        <input type = 'number' name='number' value='' placeholder=''style='margin:10px'><br>
        <label for="message">message:</label>
        <input type = 'text' name='message' value='' placeholder=''style='margin:10px'>
        <br>
        <button style=
  'background-color: #4CAF50; /* blue */
  border: none;
  color: white;
  padding: 10px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;'>send</button>
    </form>    
</body>
</html>