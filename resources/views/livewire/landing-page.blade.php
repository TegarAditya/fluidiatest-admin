<main>
    <!-- Start Header -->
    <section class="w-full flex flex-col items-center justify-center min-h-[100dvh] gap-7 hero">
        <div>
            <h1 class="font-bold text-white text-5xl text-center md:text-8xl">
                <span class="hidden md:inline-block" x-data="{ texts: ['Selamat Datang', 'Fludiatest.id'] }" x-typewriter.cursor="texts"></span>
                <span class="md:hidden" x-data="{ texts: ['Welcome to', 'Fludiatest.id'] }" x-typewriter.cursor="texts"></span>
            </h1>
        </div>
        <div class="flex justify-center items-center gap-4">
            <a href="#about" class="pt-10">
                <button class="px-5 shadow-md py-2 rounded-full bg-white active:animate-jump active:animate-once">
                    <p class="text-lg text-[#46338a] font-bold">Pelajari Tentang Kami</p>
                </button>
            </a>
        </div>
    </section>
    <!-- End Header -->

    <!-- Start About -->
    <section id="about" class="text-gray-600 pt-0 md:pt-20 body-font">
        <div class="container px-5 py-24 mx-auto max-w-screen-xl">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Tentang Fluidiatest</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table.</p>
            </div>
            <div class="flex flex-wrap">
                <div class="xl:w-1/2 md:w-1/2 p-4">
                    <div>
                        <div class="border border-gray-200 p-6 rounded-lg">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                </svg>
                            </div>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Capaian Pembelajaran</h2>
                            <p class="leading-relaxed text-base">
                                Pada fase F, capaian pembelajaran terdiri dari elemen pemahaman fisika dan keterampilan proses.
                            <ul class="flex flex-col gap-2 py-2">
                                <li>
                                    <h4 class="font-semibold">Pemahaman fisika</h4>
                                    <p>Peserta didik mampu menerapkan konsep dan prinsip fluida dalam menyelesaikan masalah.</p>
                                </li>
                                <li>
                                    <h4 class="font-semibold">Keterampilan proses</h4>
                                    <ol class="list-outside pl-4 list-decimal">
                                        <li>Mengamati</li>
                                        <li>Mempertanyakan dan memprediksi</li>
                                        <li>Merencanakan dan melakukan penyelidikan</li>
                                        <li>Memproses dan menganalisis data dan informasi</li>
                                        <li>Mencipta</li>
                                        <li>Mengevaluasi dan Refleksi</li>
                                        <li>Mengkomunikasikan hasil</li>
                                    </ol>
                                </li>
                            </ul>
                            Sedangkan Alur Tujuan Pembelajaran untuk materi Fluida yaitu Menguraikan prinsip dan konsep fluida melalui kegiatan penyelidikan untuk memecahkan masalah.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="xl:w-1/2 md:w-1/2 p-4 gap-8 flex flex-col">
                    <div>
                        <div class="border border-gray-200 p-6 rounded-lg">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Pertemuan Pertama</h2>
                            <ol class="list-decimal list-outside pl-4">
                                <li>Menjelaskan konsep Tekanan Hidrotatis untuk menyelesaikan suatu permasalahan;</li>
                                <li>Menerapkan persamaan Hukum Pascal dalam menyelesaikan persoalan fluida statis;</li>
                                <li>Menganalisis hubungan antara luas penampang dengan gaya yang diberikan untuk mengangkat beban melalui sistem fluida tertutup.</li>
                            </ol>
                        </div>
                    </div>
                    <div>
                        <div class="border border-gray-200 p-6 rounded-lg">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                    <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
                                </svg>
                            </div>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Pertemuan Kedua</h2>
                            <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

    <!-- Start Introduction -->
    <section id="introduction" class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-col">
            <div x-data="{ open: false }" class="lg:w-4/6 mx-auto">
                <div class="flex w-full justify-center">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Profil Pengembang</h1>
                </div>
                <div class="flex w-full justify-center gap-7 items-center mt-7">
                    <button x-on:click="open = false" x-bind:class="! open ? 'font-semibold' : ''">
                        <p>Pengembang</p>
                    </button>
                    <button x-on:click="open = true" x-bind:class="open ? 'font-semibold' : ''">
                        <p>Dosen Pembimbing</p>
                    </button>
                </div>
                <!-- Pengembang -->
                <div x-bind:class="open ? 'hidden' : ''" x-transition.opacity class="flex flex-col sm:flex-row mt-5">
                    <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                        <div class="w-40 h-40 rounded-full overflow-hidden object-top object-cover inline-flex items-start justify-center bg-gray-200 text-gray-400">
                            <img src="https://media.licdn.com/dms/image/v2/D5603AQHUVGAg01pnJA/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1696510557599?e=1741219200&v=beta&t=b2oIR8om7Uo5TUoClfX_6QXMq44TwWDP0imzrnM9k1Y" alt="">
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

                <!-- Dosen Pembimbing -->
                <div x-bind:class="! open ? 'hidden' : ''" x-transition.opacity class="flex flex-col sm:flex-row mt-5">
                    <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                        <div class="w-40 h-40 rounded-full overflow-hidden object-bottom object-cover inline-flex items-end justify-center bg-gray-200 text-gray-400">
                            <img class="scale-150" src="https://media.canva.com/v2/image-resize/format:PNG/height:768/quality:100/uri:s3%3A%2F%2Fmedia-private.canva.com%2FK7Z-E%2FMAGaMQK7Z-E%2F1%2Fp.png/watermark:F/width:829?csig=AAAAAAAAAAAAAAAAAAAAAKzSELcBcllkmX3U5FqITgAmmIjrNRRIyqPRjuXaRDMr&exp=1735496298&osig=AAAAAAAAAAAAAAAAAAAAABvlrxR8dsTpRkkYMcAVeNJLWWAUNkYD3Q_ExGttSRfZ&signer=media-rpc&x-canva-quality=screen_2x" alt="">
                        </div>
                        <div class="flex flex-col items-center text-center justify-center">
                            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">Dr. Drs. Supahar, M.Si</h2>
                            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                            <p class="text-base">supahar@uny.ac.id</p>
                            <p class="text-base">NIP. 196803151994121001</p>
                        </div>
                    </div>
                    <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                        <p class="leading-relaxed text-lg mb-4">Dr. Drs. Supahar, M.Si adalah dosen Departemen Pendidikan Fisika, Fakultas Matematika dan Ilmu Pengetahuan Alam dan Departemen Penelitian dan Evaluasi Pendidikan, Sekolah Pascasarjana, Universitas Negeri Yogyakarta. Penelitiannya berfokus pada pendidikan fisika, pengukuran dan asesmen. </p>
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
    <!-- End Introduction -->
</main>