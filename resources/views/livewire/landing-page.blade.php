<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="relative">
        <nav class="fixed backdrop-blur-sm w-full top-0">
            <div class="bg-white bg-opacity-75 p-4 h-20 shadow-2xl flex justify-between items-center">
                <div class="flex items-center justify-start gap-4">
                    <img class="max-h-14 w-auto object-cover" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Emblem_of_Yogyakarta_State_University.svg/1200px-Emblem_of_Yogyakarta_State_University.svg.png" alt="logo uny">
                    <div class="flex items-center">
                        <h3 class="text-2xl font-bold drop-shadow-md text-[#46338a]">Fluidiatest</h3>
                    </div>
                </div>
                <div class="mr-5 flex items-center gap-5">
                    <div>
                        <ul class="flex font-semibold gap-4">
                            <li class="hover:font-semibold">Tentang Fluidiatest</li>
                            <li class="hover:font-semibold">Profil Pengembang</li>
                            <li class="hover:font-semibold">Cara Penggunaan</li>
                        </ul>
                    </div>
                    <div>
                        <a href="">
                            <div class="px-5 shadow-md py-2 rounded-full bg-[#46338a]">
                                <p class="text-lg text-white font-bold">Masuk</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <main>
            <div class="w-full flex flex-col items-center justify-center min-h-[100dvh] gap-5 hero">
                <div class="text-white">
                    <h1 class="font-bold text-7xl">Welcome to Fluidiatest</h1>
                </div>
                <div class="flex justify-center items-center gap-4">
                    <a href="">
                        <div class="px-5 shadow-md py-2 rounded-full bg-white">
                            <p class="text-lg text-[#46338a] font-bold">Pelajari Selengkapnya</p>
                        </div>
                    </a>
                </div>
            </div>
            <div id="" class="w-full bg-white min-h-[100dvh]"></div>
        </main>
        <footer class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
                <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                        </svg>
                        <span class="ml-3 text-xl">Tailblocks</span>
                    </a>
                    <p class="mt-2 text-sm text-gray-500">Air plant banjo lyft occupy retro adaptogen indego</p>
                </div>
                <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                        <nav class="list-none mb-10">
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">First Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                            </li>
                        </nav>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                        <nav class="list-none mb-10">
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">First Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                            </li>
                        </nav>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                        <nav class="list-none mb-10">
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">First Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                            </li>
                        </nav>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                        <nav class="list-none mb-10">
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">First Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                            </li>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="bg-gray-100">
                <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                    <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 Tailblocks —
                        <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@knyttneve</a>
                    </p>
                    <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                        <a class="text-gray-500">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                                <circle cx="4" cy="4" r="2" stroke="none"></circle>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
        </footer>
    </div>
</body>
<style>
    .hero {
        background-image: url('https://media-public.canva.com/4rCO8/MAFbWk4rCO8/1/s3.jpg');
        background-size: cover;
        background-position: center;
    }
</style>

</html>