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
            <div class="bg-white bg-opacity-75 p-4 h-20 shadow-2xl flex justify-center md:justify-between items-center">
                <div class="flex items-center justify-start">
                    <div class="bg-white flex items-center z-10 p-1 rounded-full aspect-square">
                        <img class="max-h-12 w-auto object-cover" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Emblem_of_Yogyakarta_State_University.svg/1200px-Emblem_of_Yogyakarta_State_University.svg.png" alt="logo uny">
                    </div>
                    <div class="flex items-center bg-white pl-4 py-2 pr-4 rounded-r-full -m-4">
                        <h3 class="text-2xl font-bold drop-shadow-md text-[#46338a]">UNY</h3>
                    </div>
                </div>
                <div class="mr-5 hidden md:flex items-center gap-5">
                    <div>
                        <ul class="flex font-semibold gap-4">
                            <li class="hover:font-semibold"><a href="#about">Tentang</a></li>
                            <li class="hover:font-semibold"><a href="#introduction">Profil</a></li>
                            <li class="hover:font-semibold"><a href="#">Tutorial</a></li>
                        </ul>
                    </div>
                    <div>
                        <a href="/student">
                            <div class="px-5 shadow-md py-2 rounded-full bg-[#46338a]">
                                <p class="text-lg text-white font-bold">Masuk</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <main>

            <section class="w-full flex flex-col items-center justify-center min-h-[100dvh] gap-7 hero">
                <div class="text-white">
                    <h1 class="font-bold text-5xl text-center md:text-7xl">Welcome to Fluidiatest</h1>
                </div>
                <div class="flex justify-center items-center gap-4">
                    <a href="#about">
                        <div class="px-5 shadow-md py-2 rounded-full bg-white">
                            <p class="text-lg text-[#46338a] font-bold">Pelajari Selengkapnya</p>
                        </div>
                    </a>
                </div>
            </section>

            <section id="about" class="text-gray-600 pt-20 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Tentang Fluidiatest</h1>
                        <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table.</p>
                    </div>
                    <div class="flex flex-wrap -m-4">
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="border border-gray-200 p-6 rounded-lg">
                                <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                    </svg>
                                </div>
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Shooting Stars</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="border border-gray-200 p-6 rounded-lg">
                                <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                        <circle cx="6" cy="6" r="3"></circle>
                                        <circle cx="6" cy="18" r="3"></circle>
                                        <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                                    </svg>
                                </div>
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-2">The Catalyzer</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="border border-gray-200 p-6 rounded-lg">
                                <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Neptune</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="border border-gray-200 p-6 rounded-lg">
                                <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                        <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
                                    </svg>
                                </div>
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Melanchole</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="border border-gray-200 p-6 rounded-lg">
                                <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                        <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                                    </svg>
                                </div>
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Bunker</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="border border-gray-200 p-6 rounded-lg">
                                <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                    </svg>
                                </div>
                                <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Ramona Falls</h2>
                                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                            </div>
                        </div>
                    </div>
                    <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                </div>
            </section>

            <section id="introduction" class="text-gray-600 pt-20 body-font">
                <div class="container px-5 py-24 mx-auto flex flex-col">
                    <div class="lg:w-4/6 mx-auto">
                        <div class="flex w-full justify-center">
                            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Profil Pengembang</h1>
                        </div>
                        <div class="flex flex-col sm:flex-row mt-10">
                            <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                                <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                                <div class="flex flex-col items-center text-center justify-center">
                                    <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">Nurdiyanti, S.Pd.</h2>
                                    <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                                    <p class="text-base">nurdiyanti.2023@student.uny.ac.id</p>
                                    <p class="text-base">NIM. 23031240018</p>
                                </div>
                            </div>
                            <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                                <p class="leading-relaxed text-lg mb-4">Nurdiyanti yang biasa disapa Yayan merupakan perempuan kelahiran Purbalingga, 15 Januari 2000. Pengembang memulai pendidikan tingginya di program Pendidikan Fisika Universitas Sebelas Maret Surakarta. Saat ini pengembang tengah menyelesaikan studi Magister di Pendidikan Fisika Universitas Negeri Yogyakarta. Pengembang memiliki ketertarikan pada bidang asesmen pembelajaran fisika dan pengembangan media pembelajaran. Selain itu, pengembang juga aktif dalam bidang kepenulisan dan kegiatan sosial masyarakat dengan menginisiasi platform Dangau Mucal.</p>
                                <a class="text-indigo-500 inline-flex items-center">Learn More
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
        <footer class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
                <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                        </svg>
                        <span class="ml-3 text-xl">Made with Tailwind</span>
                    </a>
                    <p class="mt-2 text-sm text-gray-500">A utility-first CSS framework packed with classes like flex, pt-4, text-center and rotate-90 that can be composed to build any design, directly in your markup.</p>
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
</style>

</html>