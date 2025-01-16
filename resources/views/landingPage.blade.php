<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- Link ke CSS -->
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jumbotron.css') }}">
    <link rel="stylesheet" href="{{ asset('css/top.css') }}">
    <link rel="stylesheet" href="{{ asset('css/offer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/content.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/best.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/specs.css') }}">

    <!-- Tambahkan FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <x-landingPage.navbar />
    <x-landingPage.jumbotron />   
    <x-landingPage.content :popularDestination="$popularDestination" />   
    <x-landingPage.offers :offerInformation="$offerInformation" />  
    <x-landingPage.about />
    <x-landingPage.best :blogInformation="$blogInformation" />
    <x-landingPage.footer />
<<<<<<< HEAD
    <x-landingPage.blog />
=======
>>>>>>> 8fc43c8219325e75061c83d609b8f7f58cd2e900


    <!-- Tambahkan JavaScript jika diperlukan -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 2000,
        });
    </script>
</body>
</html>