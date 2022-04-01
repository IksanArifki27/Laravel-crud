<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br>
       <center><h3 class="text-primary mb-5">EDIT DATA USER</h3></center>
        @foreach($data as $user)
        <form  method="get" action="/user/update">
        <div class="mb-3">
            <label for="username" class="form-label">User Name : </label>
            <input type="text" class="form-control" name="username" id="username" value="{{$user->username}}" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label"> Nama : </label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{$user->nama}}" required>
        </div>
        <div class="mb-3">
            <label for="nomor" class="form-label">No tlpn : </label>
            <input type="text" class="form-control" name="nomor" id="nomor" value="{{$user->nohp}}" required>
        </div>
       
        <button type="submit" class="btn btn-success">Edit Data</button>
        </form>
        @endforeach
    </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

{{-- <div class="container">
        <div class="row">
            <div class="col s10">
                <div class="card-panel">
                    <h3>Edit User</h3>
                    @foreach($data as $user)
                    <form method="get" action="/user/update">
						<label for="desc">Username :</label>
                        <div class="input-field">
                            <input type="text" name="username" id="username" value="{{$user->username}}" required>
                        </div>
						<label for="desc">Nama :</label>
                        <div class="input-field">
                            <input type="text" name="nama" id="nama" value="{{$user->nama}}" required>
                        </div>
						<label for="desc">Nomor Telp :</label>
                        <div class="input-field">
                            <input type="text" name="nomor" id="nomor" value="{{$user->nohp}}" required>
                        </div>
						<br>
                        <button class="btn waves-effect green">Edit</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div> --}}

<html>

</html>