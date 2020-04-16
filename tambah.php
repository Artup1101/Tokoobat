<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
    table{
      width: 80%;
    }
    span{
        text-align:right;
    }
    </style>
</head>
<body>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                <h2> Tambah Data Obat</h2>
                </div>
                <div class="card-body">
                <form method="post" action="proses-tambah.php">
                        <div class="form-group">
                            <label for="id">Id Obat</label>
                            <input type="text" class="form-control" name="id_barang" id="id_barang" placeholder="Masukkan ID Obat">
                        </div>
                        <div class="form-group">
                            <label for="obat">Obat</label>
                            <input type="text" class="form-control" name="obat" id="obat" placeholder="Masukkan Nama Obat">
                        </div>
                        <div class="form-group">
                            <label for="tujuan">Tujuan</label>
                            <input type="text" class="form-control" name="tujuan" id="tujuan" placeholder="Masukkan Tujan">
                        </div>

                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </form>
    
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>