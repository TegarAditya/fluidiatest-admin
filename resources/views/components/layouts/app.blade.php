<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@marcreichel/alpine-typewriter/dist/alpine-typewriter.min.js" defer></script>
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Fluidiatest' }}</title>
</head>

<body>
    <div class="relative font-space">
        <!-- Start Nav -->
        <nav class="fixed w-full top-0 z-10">
            <div class="bg-white p-4 h-20 shadow-2xl w-full grid grid-cols-2 md:grid-cols-3 items-center">
                <div class="flex items-center justify-start">
                    <div class="bg-white flex items-center z-10 p-1 rounded-full aspect-square">
                        <img class="max-h-12 w-auto object-cover" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Emblem_of_Yogyakarta_State_University.svg/1200px-Emblem_of_Yogyakarta_State_University.svg.png" alt="logo uny">
                    </div>
                    <div class="flex items-center bg-white pl-4 py-2 pr-4 rounded-r-full -m-4">
                        <h3 class="text-2xl font-bold drop-shadow-md text-[#46338a]">UNY</h3>
                    </div>
                </div>
                <div class="hidden md:flex justify-center">
                    <ul class="flex font-semibold gap-4">
                        <li class="hover:font-semibold"><a href="#about">Tentang</a></li>
                        <li class="hover:font-semibold"><a href="#introduction">Profil</a></li>
                        <li class="hover:font-semibold"><a href="#">Tutorial</a></li>
                    </ul>
                </div>
                <div class="flex justify-end items-center gap-5">
                    <div>
                        <a href="/student">
                            <button class="px-5 shadow-md py-2 rounded-full bg-[#46338a] active:animate-jump active:animate-once">
                                <p class="text-white font-bold">
                                    @auth
                                    Dashboard
                                    @endauth
                                    @guest
                                    Masuk
                                    @endguest
                                </p>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Nav -->

        {{ $slot }}

        <div class="background fixed top-0 -z-50 w-screen min-h-[100dvh]"></div>

        <!-- Start Footer -->
        <footer class="text-gray-600 body-font">
            <div class="bg-gray-100">
                <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                    <p class="text-gray-500 text-sm text-center sm:text-left">© 2024 Fluidiatest —
                        <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">Nurdiyanti</a>
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
        <!-- End Footer -->
    </div>
</body>

<style>
    html {
        scroll-behavior: smooth;
    }

    .hero {
        background-image: url('https://media-public.canva.com/4rCO8/MAFbWk4rCO8/1/s3.jpg');
        background-size: cover;
        background-position: center;
    }

    .background {
        background-color: #e5e5f7;
        opacity: 0.03;
        background-image: repeating-radial-gradient(circle at 0 0, transparent 0, #e5e5f7 40px), repeating-linear-gradient(#444cf755, #444cf7);
    }
</style>

</html>