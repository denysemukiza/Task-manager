<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            body {
                margin: 0;
                font-family: 'Figtree', sans-serif;
                background-image: url('/images/bk.jpg');
                background-size: 100%;
                background-position: center;
                background-repeat: no-repeat;
                height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                align-items: center;
                overflow: hidden;
            }

            .overlay {
                background: rgba(0, 0, 0, 0);
                color: white;
                text-align: center;
                padding: 20px;
                max-width: 500px;
                width: 90%;
                margin-top: 25%;
                margin-left: -5%;
            }

            .btn {
                background-color:rgb(249, 253, 250);
                color: darkgreen; /* Green text */
                text-decoration: none;
                padding: 15px 25px;
                margin: 15px;
                border: none;
                border-radius: 10rem;
                cursor: pointer;
                font-size: 1rem;
            }

            .btn:hover {
                background-color:rgb(142, 206, 137);
                color: darkgreen;
                transition: 0.1s;
            }

            .footer {
                text-align: center;
                padding: 8px;
                background-color: darkslategray;
                color: white;
                width: 100%;
            }

            @media (max-width: 375px) {
                .overlay {
                    margin-top: 120%;
                    padding: 15px;
                    width: 80%;
                }

                .btn {
                    background-color:olivedrab;
                    color: white;
                    padding: 8px 16px;
                    font-size: 0.875rem;
                }
            }
        </style>
    @endif
</head>
<body>

<div class="overlay">
    <div>
        <!-- Use route() helper to generate URLs -->
        <a href="{{ route('backpack.auth.login') }}">
    <button class="btn" style="color: green; text-decoration: none; border: none;">Login</button>
</a>

<a href="{{ route('backpack.auth.register') }}">
    <button class="btn" style="color: green; text-decoration: none; border: none;">Register</button>
</a>

    </div>
</div>


    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024. All Rights Reserved.</p>
    </div>

</body>
</html>
