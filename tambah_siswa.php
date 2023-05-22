<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PENDAFTARAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {
            color: #FF0000;
        }
        body {
            padding-top: 7%;
            padding-left: 28%;
            background: #393E41;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center">
                    <h4>FORM PENDAFTARAN SISWA BARU</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="simpan_siswa.php">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" id="Nama" class="form-control class=" warning">
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-10">
                                <input type="text" name="kelas" id="kelas" class="form-control class=" warning">
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" name="alamat" id="alamat" class="form-control class=" warning">
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                                <span><a href="cetak_data.php" class="btn btn-danger">Batal</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>