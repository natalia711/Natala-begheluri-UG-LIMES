<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>news</title>
</head>
<body>
<?php include('components/header.php') ?>
<?php $data=[
  ['description'=>'nwijcwjncx',
  'text'=>'architect and engineer'],
  [
    'description'=>'snidhbnd',
    'text'=>'arcitect and doctor'
  ],
  [
    'description'=>'xbwuqxh',
    'text'=>'engineer and parent'
  ],
]?>

<div class="card" style='padding:2px 16px;background-color:grey;'>
  <img src="pramod-gahlot.1024x1024.jpg" alt="Avatar" style="width:100%">
  <?php foreach($data as $key => $value){?>
  <div class="container">
    <h4><?php echo $value['description']?> </h4>
    <p><?php echo $value['text']?></p>
    <?php }?>
  </div>
</div>
</body>
</html>