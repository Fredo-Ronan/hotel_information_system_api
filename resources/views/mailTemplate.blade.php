<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Verifikasi Akun Anda</title>
    <style>
        table, tr, td {
            border: solid 1px;
            border-collapse: collapse;
        }

        td {
            padding: 1rem;
        }
    </style>
</head>
<body>
    <div class="container border border-4">
        <div class="d-flex justify-content-center p-4" style="background-color: #16b842; color: white;">
            <center>
                <h1 style="color: white;">Verifikasi Akun Anda</h2>
            </center>
        </div>

        <div class="text-start">
            <!-- Greetings -->
            <div class="mt-4" style="margin-left: 2rem;">
                <h2>Halo <strong>User 1!</strong></h2>
            </div>

            <!-- What's going on? -->
            <div class="mt-4" style="margin-left: 2rem;">
                <p style="font-size: 20px;">
                    Anda telah melakukan registrasi akun <strong>The 5 Stars Hotel</strong> menggunakan email ini. <br>
                    Berikut adalah data anda:
                </p>

                <div class="col-md-4">
                    <table>
                        <tr>
                            <td><strong>Username</strong></td>
                            <td>{{ $details['username'] }}</td>
                        </tr>
                        <tr>
                            <td><strong>Website</strong></td>
                            <td>{{ $details['website'] }}</td>
                        </tr>
                        <tr>
                            <td><strong>Tanggal Register</strong></td>
                            <td>{{ $details['tanggal_register'] }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Prompt -->
            <div style="margin-left: 2rem; margin-top: 2rem;">
                <h4>Klik link dibawah ini untuk melakukan verifikasi akun anda</h4>
            </div>

            <!-- Verify Button -->
            <div class="d-flex justify-content-center" style="margin-left: 2rem;">
                {{ $details['url'] }}
            </div>
        </div>

        <footer style="margin-left: 2rem; margin-top: 4rem;">
            <h4>Terima Kasih telah melakukan registrasi</h4>
        </footer>
    </div>
</body>
</html>