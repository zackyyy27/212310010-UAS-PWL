<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById('password');
            var checkbox = document.getElementById('rememberMe');

            if (checkbox.checked) {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }
    </script>
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center mt-5 mb-5">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="header-container">
                            <img src="{{ asset('asset/gambar/logosma.png') }}" alt="logo Murid" class="logo-sma">
                            <h2 class="nama-smk">SMK INFORMATIKA</h2>
                        </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                            <img src="{{ asset('asset/gambar/muridbiru.png') }}" alt="logo Murid">
                        </div>
                    </div>
                </div>
                <div class="d-flex col-lg-6 align-items-center">
                    <div class="card2 card border-0 px-4 py-4">
                        <div>
                            <H2 class="nama-smk">SMK INFORMATIKA</H2>
                            <p>Sekolah Umum Berbasis Keagamaan, Berkarakter Akhlak Mulia, Pilihan Anak-Anak Terpilih</p>
                        </div>

                        @if (session()->has('loginError'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('loginError') }}
                            </div>
                        @endif
                        <form method="POST" action="/">
                            @csrf
                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm text-dark text-start">Email Address</h6>
                                </label>
                                <input class="mb-4 text-dark" type="text" name="email"
                                    placeholder="Enter a valid email address">
                            </div>
                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm text-dark text-start">Password</h6>
                                </label>
                                <input class="text-dark" type="password" name="password" id="password"
                                    placeholder="Enter password">
                            </div>
                            <div class="d-flex px-1 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberMe"
                                        onclick="togglePasswordVisibility()">
                                    <label class="form-check-label text-start" for="rememberMe">Tampilkan Kata
                                        sandi</label>
                                </div>
                            </div>
                            <div class="row mb-3 px-3">
                                <button type="submit" class="btn btn-blue text-center">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bg-blue py-4">
                <div class="row px-3">
                    <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2024. All rights reserved.</small>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
