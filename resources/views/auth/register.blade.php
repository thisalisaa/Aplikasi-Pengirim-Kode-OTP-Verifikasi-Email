<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register-container {
            background-color: #fff;
            padding: 20px; /* Mengurangi padding untuk membuat card lebih pendek */
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px; /* Memperlebar card */
            text-align: center;
        }

        .register-container img {
            max-width: 80px;
            margin-bottom: 15px; /* Menyesuaikan jarak gambar agar lebih rapat */
        }

        .register-container h6 {
            margin-bottom: 20px;
            color: #333;
            font-size: 16px;
        }

        .form-control {
            border-radius: 10px;
            border-color: #d1d1d1;
            transition: border-color 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus {
            border-color: #000;
            box-shadow: none;
        }

        .btn-register {
            background-color: #ffc005;
            color: #fff;
            border-radius: 20px;
            width: 100%;
            transition: background-color 0.3s;
            padding: 12px; /* Memberikan padding agar tombol lebih seimbang */
        }

        .btn-register:hover {
            background-color: #ffffff;
        }

        .form-group {
            margin-bottom: 15px; /* Mengurangi margin antar elemen agar card lebih pendek */
        }

        /* Responsive adjustments */
        @media (max-width: 576px) {
            .register-container {
                padding: 20px;
            }

            .register-container img {
                max-width: 60px;
            }

            .form-group {
                margin-bottom: 15px;
            }

            .btn-register {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="register-container">
        <!-- Logo Aplikasi -->
        <div>
            <img src="{{ asset('image/email.png') }}" alt="Logo Aplikasi">
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nama -->
            <div class="form-group">
                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus placeholder="Nama">
                @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Jenis Kelamin -->
            <div class="form-group">
                <select id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" required>
                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
                @error('jenis_kelamin')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Tempat Lahir -->
            <div class="form-group">
                <input id="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required autocomplete="tempat_lahir" placeholder="Tempat Lahir">
                @error('tempat_lahir')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Tanggal Lahir -->
            <div class="form-group">
                <input id="ttl" type="date" class="form-control @error('ttl') is-invalid @enderror" name="ttl" value="{{ old('ttl') }}" required autocomplete="ttl">
                @error('ttl')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Email -->
            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
            </div>

            <button type="submit" class="btn btn-register">
                {{ __('Register') }}
            </button>
        </form>
    </div>

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
