<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Data Mahasiswa</title>
</head>
<body>
    
    <!-- Contact -->
    <selection id="contact">
      <div id="contact">
        <div class="row text-center text-dark">
          <div class="col bg-light">
            <h2> Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8 bg-dark text-light">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name">
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email">
                <div class="mb-3 bg-dark">
                  <label for="pesan" class="form-label">Pesan</label>
                  <textarea class="form-control" id="pesan" rows="3"></textarea>
                </div>
                <br>
                <div class="row justify-content-lg-center">
              <button type="submit" class="btn btn-primary">Kirim</button>
              </div>
            </form>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,128L48,154.7C96,181,192,235,288,256C384,277,480,267,576,245.3C672,224,768,192,864,170.7C960,149,1056,139,1152,144C1248,149,1344,171,1392,181.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      </div>
    </selection>
    <!-- Akhir Contact -->

    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            Sistem Informasi Mahasiswa | Copyright (c) {{ date('Y') }} Teknik Informatika
        </div>
    </footer>
</body>

</html>
