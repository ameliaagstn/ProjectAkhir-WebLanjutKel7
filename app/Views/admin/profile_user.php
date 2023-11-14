<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://v4-alpha.getbootstrap.com/components/carousel/">
    <link rel="stylesheet" href="https://www.w3.org/TR/wai-aria/roles#listbox">
</head>
<body>
<center>
<img src="<?=$users['user_image']  ?>" style="width : 200px;">  <table class="mx-auto">
  </center>
  <br>
  <center> 
    <table>
      <tr>
      <td>
        <button class="p-2 bg-secondary text-white" style="width: 300px;"><?= $users['fullname'] ?></button>
      </td>
      </tr>
      <tr>
      <td>
        <button class="p-2 mt-2 bg-secondary text-white" style="width: 300px;"><?= $users['username'] ?></button>
      </td>
      </tr>
      <tr>
      <td>
        <button class="p-2 mt-2 bg-secondary text-white" style="width: 300px;"><?= $users['email'] ?></button>
      </td>
      </tr>
    </table>
  </center>
</body>
</html>