<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- Link ke CSS -->
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jumbotron.css') }}">

</head>
<body>
    <!-- Panggil Navbar -->
    <x-landingPage.navbar />

    <!-- Panggil Jumbotron -->
    <x-landingPage.jumbotron />

    <!-- Panggil Content (untuk konten popular destination di masa depan) -->
    <x-landingPage.content :popularDestination="$popularDestination" />

    <!-- Tambahkan JavaScript jika diperlukan -->
</body>
</html>
