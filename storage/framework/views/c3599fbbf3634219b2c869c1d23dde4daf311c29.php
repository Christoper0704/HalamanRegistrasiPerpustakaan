<!DOCTYPE html>
<html lang="en">
<head>
  <title>PerpusOnline</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="h-100 h-custom" style="background-color: #2F86A6;">
<nav class="navbar navbar-expand-sm navbar-light" style="background-color: #34BE82;">
  <div class="container-fluid">
    <ul class="navbar-nav">
    <a class="navbar-brand" href="#"><img src="<?php echo e(url('/images/book.png')); ?>" alt="Avatar Logo" style="width:40px;" class="rounded-pill"></a>
      <li class="nav-item">
        <h3><a class="nav-link text-dark" href="#">PerpusOnline</a></h3>
      </li>
    </ul>
  </div>
</nav>

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="<?php echo e(url('/images/library.jpg')); ?>" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Libary">
          <div class="card-body p-4 p-md-5">
            <h4 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2" style="text-align: center;">Daftarkan Dirimu Jadi Anggota</h4>

            <form class="px-md-2 needs-validation">

              <div class="form-outline mb-4">
                <label for="name" class="form-label">Nama Lengkap<span class="text-danger">*</span></label>
                <input type="text" id="name" placeholder="Masukkan Nama Lengkap Anda" class="form-control" required>
              </div>

              <div class="form-outline mb-4">
                <label for="nik" class="form-label">NIK<span class="text-danger">*</span></label>
                <input type="text" id="nik" placeholder="Masukkan NIK Anda" class="form-control" required>
              </div>

              <div class="form-outline mb-4">
                <label for="tgllahir" class="form-label">Tanggal Lahir<span class="text-danger">*</span></label>
                <input type="text" id="tgllahir" placeholder="Masukkan Tanggal Lahir Anda" class="form-control" required>
              </div>

              <div class="form-outline">
                <label class="form-label">Jenis Kelamin<span class="text-danger">*</span></label>
              </div>

              <div class="form-check form-check-inline mb-4">
                <input type="radio" id="laki" class="form-check-input" name="jeniskel" checked required>
                <label class="form-check-label" for="laki">
                  Laki-Laki
                </label>
              </div>

              <div class="form-check form-check-inline mb-4">
                <input type="radio" id="wanita" class="form-check-input" name="jeniskel" required>
                <label class="form-check-label" for="wanita">
                  Wanita
                </label>
              </div>

              <div class="form-outline mb-4">
                <label for="institusi" class="form-label">Nama Institusi</label>
                <input type="text" id="institusi" placeholder="Masukkan Institusi Anda" class="form-control">
              </div>

              <div class="form-outline mb-4">
                <label for="notelp" class="form-label">Nomor Telepon</label>
                <input type="text" id="notelp" placeholder="Masukkan Nomor Telepon Anda" class="form-control">
              </div>

              <div class="form-outline mb-4">
                <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                <input type="text" id="email" placeholder="Masukkan Email Anda" class="form-control" required>
              </div>

              <div class="form-outline mb-4">
                <label for="pass" class="form-label">Password<span class="text-danger">*</span></label>
                <input type="text" id="pass" placeholder="Masukkan Password Anda" class="form-control" required>
              </div>

              <div class="form-outline mb-4">
                <input type="checkbox" id="agreement" class="form-check-input" required>
                <label class="form-check-label" for="agreement">
                  <a href="#">Setuju dengan Syarat dan Ketentuan yang ada</a><span class="text-danger">*</span>
                </label>
              </div>

              <div class="form-outline mb-4">
                <span class="text-danger">*Wajib Diisi</span>
              </div>

              <div class="form-outline mb-4">
                <a href="#">Sudah punya akun? Login di sini</a>
              </div>

              <button type="submit" class="btn btn-success btn-m mb-1">Daftar</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\perpustakaan\resources\views/registrasi.blade.php ENDPATH**/ ?>