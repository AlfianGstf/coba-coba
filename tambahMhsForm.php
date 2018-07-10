<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Load jQuery -->
    <script src="lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Load Bootstrap -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/customIndex.css">
    <title>Data Member</title>
  </head>
  
  <body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary">
          <img src="img/jazz.PNG" alt="logoBrand" id="logoBrand">
          <div class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item"><a href="#" class="nav-link active">Data Mahasiswa</a></li>
                  <li class="nav-item"><a href="#" class="nav-link">Data Dosen</a></li>
                  <li class="nav-item"><a href="#" class="nav-link">Data Karyawan</a></li>
              </ul>
          </div>
        </nav>
    </header>
    <main class="container" role="main">
        <div class="col-md-6">
            <form action="controller/tambahMhs.php" method="POST">
                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" class="form-control" name="nim_mhs">
                </div>
                <div class="form-group">
                    <label>NAMA</label>
                    <input type="text" class="form-control" name="nama_mhs">
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" class="form-control" name="jurusan_mhs">
                </div>
                <div class="form-group">
                    <label>Angkatan</label>
                    <input type="text" class="form-control" name="angkatan_mhs">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" name="btn-tambah" value="Tambah">
                </div>
            </form>
        </div>
    </main>

  </body>
</html>
