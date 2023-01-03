@extends('navbar')
@section('isihalaman')
<body>
    <div class="d-flex justify-content-center align-items-center" style="margin-top: 50px;">
        <div class="col-md-3">
            <div class="card">
                <form action="/register" method="POST">
                    @csrf
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Register</h5>
                        <hr>
                        <div class="mb-3">
                            <label class="form-label" for="email"><b>Email</b></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Alamat E-Mail" required>
                        </div>
                        <div class="mb-3">
                        <label for="nama"><b>Nama</b></label>
                            <label class="form-label" for="nama"><b>Nama</b></label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Lengkap" required aria-label="Username">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="no_hp"><b>Nomor Handphone</b></label>
                            <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="Masukkan Nomor Handphone" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password"><b>Kata Sandi</b></label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Kata Sandi Anda" onkeyup="check()" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="repassword"><b>Konfirmasi Kata Sandi</b></label>
                            <input type="password" class="form-control" name="repassword" id="repassword" placeholder="Konfirmasi Kata Sandi Anda" onkeyup="check()" required>
                        </div>
                        <span id='cek' style="color: red;"></span>
                        <div class="row mt-1 mb-2">
                            <div class="col-sm-3 col-md-3"></div>
                            <div class="col-sm-3 col-md-4">
                                <input class="ps-5 pe-5 btn btn-primary" type="submit" value="Daftar">
                            </div>
                        </div>
                </form>
            </div>
            <h6 class="mb-4" style="text-align: center;">Anda sudah punya akun? <a href="/login/create">Login</a></h6>
        </div>
    </div>
<script>
    function check(){
        let x=document.getElementById("password");
        let y=document.getElementById("repassword");
        let z=document.getElementById("cek");
        if (x.value!=y.value){
            z.innerHTML = "Kata sandi tidak cocok";
        }else{
            z.innerHTML = "";
        }
    }
</script>
</body>
</html>