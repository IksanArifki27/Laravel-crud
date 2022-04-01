<!DOCTYPE html>
<html>
<head>
<title>Table Data User</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<link rel="stylesheet" href="css/bootstrap.css">
<body>
   <div class="container mb-5">

    

 <h3>Tambah User<a class="right hide-on-med-and-down" href="{{URL('user/tambah')}}"><img src="assets/img/plus.png" width="20" height="20"/></a></h3>
                    
<center><h3 class="text-primary mb-5">DAFTAR USER</h3></center>
<table class="table table-bordered table-hover" align="center">
   <thead class="table-dark">
      <tr>
      <th>No</th>
      <th>userName</th>
      <th>Nama</th>
      <th>No Telpon</th>
      <th>Aksi</th>
      </tr>
</thead>

<?php $no=1; ?>
@foreach ($user as $usr)
<tr>
<td>{{$no++}}</td>
<td>{{$usr->username}}</td>
<td>{{$usr->nama}}</td>
<td>{{$usr->nohp}}</td>
     <td>
  <a href="/user/delete/{{$usr->id}}" onclick="return confirm('Admin Yakin ingin menghapusnya?');"><button class="btn btn-danger">Hapus</button></a>
  <a href="/user/edit/{{$usr->id}}"><button class="btn btn-warning">Edit</button></a>
     </td>
                       
</tr>
@endforeach
</tbody>
</table>
</div>


 <script src="js/bootstrap.js"></script>
<script src="js/popper.js"></script>
</div>
</body>

</html>
