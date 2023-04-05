<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css">
    <title>tampil</title>
</head>
<body>
<nav class="navbar fixed-top" style="background-color:#285430;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="font-family:comic-sans; color:white;">SIA - Unwaha</a>
  </div>
</nav>
    <div class="table-responsive">
    <table class="table table-striped table-hover table-bordered align-middle" style="margin-top:100px;">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nik</th>
      <th scope="col">Tanggal Lahir</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1;
     foreach ($tampil_data as $datamh):?>
    <tr class="table-primary">
      <th scope="row"><?=$no ++; ?></th>
      <td><?=$datamh->nama;?></td>
      <td><?=$datamh->nik;?></td>
      <td><?=$datamh->tanggal_lahir;?></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
    </div>
    <footer class="text-center text-white fixed-bottom">
  <!-- Grid container -->
  <div class="container p-4"></div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color:black;">
    © 2023 Copyright:
    <a class="text-white">SIA UNWAHA</a>
  </div>
  <!-- Copyright -->
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
	</script>
</body>
</html>