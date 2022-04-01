<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <br>
        <center><h3 class="text-primary mb-5">TAMBAH DATA USER</h3></center>
        <form  method="get" action="/user/add_user">
        <div class="mb-3">
            <label for="username" class="form-label">User Name : </label>
            <input type="text" name="username" class="form-control" id="username" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label"> Nama lengkap : </label>
            <input type="text"  name="nama" class="form-control" id="nama"  required>
        </div>
        <div class="mb-3">
            <label for="nomor" class="form-label">No tlpn : </label>
            <input type="text"  name="nomor" class="form-control" id="nomor" required>
        </div>
       
        <button type="submit" class="btn btn-primary">tambah data</button>
        </form>
    
    </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
    {{-- <div class="row">
        <div class="col s12">
            <div class="card-panel">
                <h3>Tambah User</h3>
                
                </br>
                </br>
                <form method="get" action="/user/add_user">
                    {{csrf_field()}}
                    <label style="color:black;font-size:100%" for="desc">username</label>
                    <div class="input-field">
                        <input type="text" name="username" id="username" required>   
                    </div>
                    <label style="color:black;font-size:100%" for="desc">Nama Lengkap</label>
                    <div class="input-field">
                        <input type="text" name="nama" id="nama" required>   
                    </div>
                    <label style="color:black;font-size:100%" for="desc">Nomor Telp</label>
                    <div class="input-field">
                        <input type="text" name="nomor" id="nomor" required>   
                    </div>
                    <br>
                    <button class="btn waves-effect green">Add</button>
                </form>
                
            </div>
        </div>
            
    </div>

  --}}



