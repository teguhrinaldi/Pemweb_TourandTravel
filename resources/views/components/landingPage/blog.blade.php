<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Tour And Travel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="Blog_sgp.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-white text-gray-800">
    <div class="container mx-auto p-4">
        <h1 class="text-center text-3xl font-bold text-orange-500">Tour And Travel</h1>
        <h2 class="text-center text-xl font-semibold text-gray-600">C1</h2>

        <div class="flex flex-col lg:flex-row mt-6">
            <div class="lg:w-2/3">
                <img alt="A beautiful beach with palm trees and clear blue water" class="w-full rounded-lg" src="https://storage.googleapis.com/a1aa/image/bFtgQAeg1Q2xTCYYEe2MrQLa2h7d09vugqypq8FKSl1suDBUA.jpg"/>
                <div class="flex justify-center mt-4 space-x-2">
                    <img alt="Thumbnail image 1" class="w-16 h-16 rounded-full border-2 border-white" src="https://storage.googleapis.com/a1aa/image/T0InpX1n2ZbTOxWp2w0dmak8T4OUzVWZSxDcshOfWGVV3hAKA.jpg"/>
                    <img alt="Thumbnail image 2" class="w-16 h-16 rounded-full border-2 border-white" src="https://storage.googleapis.com/a1aa/image/f9uBMIRjiRQkek9eeb84sgFoeoXn9efRY1YuAfXoQ19fIdHCoA.jpg"/>
                    <img alt="Thumbnail image 3" class="w-16 h-16 rounded-full border-2 border-white" src="https://storage.googleapis.com/a1aa/image/iQd6wgkk1pLfAyjBiWTSpnmbQUCS9O5laQtQ2uzCe0BouDBUA.jpg"/>
                </div>
            </div>

            <div class="lg:w-1/3 lg:pl-6 mt-6 lg:mt-0">
                <h3 class="text-xl font-semibold">East Cost Park Singapore</h3>
                <div class="flex items-center mt-2">
                    <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                    <span class="ml-1 text-gray-600">4.5</span>
                </div>
                <p class="mt-4 text-gray-600">
                    What is Redfish Lake known for? <br>
                    Redfish Lake is the final stop on the longest Pacific salmon run in North America... <br>
                    Redfish Lake is an alpine lake in Custer County, Idaho...
                </p>
                <div class="flex justify-end mt-4">
                    <i class="far fa-heart text-gray-400"></i>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            <?php
                $destinations = [
                    [
                        'name' => 'Langkawi',
                        'location' => 'Malaysia',
                        'rating' => '4.5',
                        'image' => 'https://storage.googleapis.com/a1aa/image/2AlfJX9LJF2lZaonrKiz1w7x1pgZLsDBGMWe9ZSc03EiuDBUA.jpg'
                    ],
                    [
                        'name' => 'Jabo Village',
                        'location' => 'Thailand',
                        'rating' => '4.5',
                        'image' => 'https://storage.googleapis.com/a1aa/image/yWSME4xvgkpCP5fVWqIfdpeCquGVtfvGmos7lC0nuOJY6OEQB.jpg'
                    ],
                    [
                        'name' => 'Mountain Fuji',
                        'location' => 'Japan',
                        'rating' => '4.5',
                        'image' => 'https://storage.googleapis.com/a1aa/image/bfZFGpF5CzwtayHRTrx9ndn5go5AYJ2l5HDAIDaWcKEX3hAKA.jpg'
                    ]
                ];

                foreach ($destinations as $destination) {
                    echo '
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img alt="' . $destination['name'] . '" class="w-full h-40 object-cover" src="' . $destination['image'] . '"/>
                            <div class="p-4">
                                <h4 class="text-lg font-semibold">' . $destination['name'] . '</h4>
                                <p class="text-gray-600"><i class="fas fa-map-marker-alt"></i> ' . $destination['location'] . '</p>
                                <div class="flex items-center mt-2">
                                    <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                                    <span class="ml-1 text-gray-600">' . $destination['rating'] . '</span>
                                </div>
                                <button class="mt-4 bg-orange-500 text-white px-4 py-2 rounded-full">Book Now</button>
                            </div>
                        </div>
                    ';
                }
            ?>
        </div>

        <div class="flex justify-center mt-8">
            <button class="bg-orange-500 text-white px-6 py-3 rounded-full">Order</button>
        </div>
    </div>
</body>
</html>
