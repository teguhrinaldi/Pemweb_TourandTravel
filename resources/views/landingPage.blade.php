<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- Link ke CSS -->
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jumbotron.css') }}">
    <link rel="stylesheet" href="{{ asset('css/offer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/content.css') }}">

    <!-- Tambahkan FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Panggil Navbar -->
    <x-landingPage.navbar />

    <!-- Panggil Jumbotron -->
    <x-landingPage.jumbotron />

    <!-- Panggil Content (untuk konten popular destination di masa depan) -->
    <x-landingPage.content :popularDestination="$popularDestination" />

    <!-- Panggil Offers -->
    <x-landingPage.offers :offerInformation="$offerInformation" /> 
    

    <x-landingPage.top />
    

    <!-- Tambahkan JavaScript jika diperlukan -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 2000,
        });
    </script>
</body>
</html>
