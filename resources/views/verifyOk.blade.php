<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="{{ $delay }};url={{ $url }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Verifikasi Email | OK</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            font-family: sans-serif;
            margin-top: 2rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Selamat! Email anda terverifikasi dan Akun anda sudah aktif!</h2>
        <br>
        <h4>Anda akan diarahkan ke halaman login dalam {{ $delay }} detik...</h4>
        <br><br>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" style="width: 400px;">
            <circle fill="#19D600" stroke="#19D600" stroke-width="15" r="15" cx="40" cy="65">
                <animate attributeName="cy" calcMode="spline" dur="2" values="65;135;65;"
                    keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.4"></animate>
            </circle>
            <circle fill="#19D600" stroke="#19D600" stroke-width="15" r="15" cx="100" cy="65">
                <animate attributeName="cy" calcMode="spline" dur="2" values="65;135;65;"
                    keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.2"></animate>
            </circle>
            <circle fill="#19D600" stroke="#19D600" stroke-width="15" r="15" cx="160" cy="65">
                <animate attributeName="cy" calcMode="spline" dur="2" values="65;135;65;"
                    keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="0"></animate>
            </circle>
        </svg>
    </div>
</body>

</html>