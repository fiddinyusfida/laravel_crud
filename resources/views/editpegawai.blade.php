<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD</title>
</head>

<body style="margin-top:5rem">
    <div class="container">
        <h4 class="mb-4 text-center">Edit Data Pegawai</h4>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="/updatepegawai/{{$data->id}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama lengkap</label>
                                <input type="text" class="form-control" value={{$data->nama}} id="nama" name="nama">
                            </div>
                            <div class="mb-3">
                                <label for="jeniskelamin" class="form-label">Jenis kelamin</label>
                                <select class="form-control" name="jeniskelamin" id="jeniskelamin">
                                    <option selected>{{$data->jeniskelamin}}</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nohp" class="form-label">No HP</label>
                                <input type="text" class="form-control" value="{{$data->nohp}}" name="nohp" id="nohp">
                            </div>
                            <button type="submit" class="btn btn-outline-primary btn-sm">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>