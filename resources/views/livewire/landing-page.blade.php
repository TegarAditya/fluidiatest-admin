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
            <div class="flex flex-wrap w-full mb-10 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Tentang Fluidiatest</h1>
            </div>
            <div class="flex flex-wrap w-full justify-center">
                <div class="p-4 max-w-screen-xl">
                    <div>
                        <div class="flex flex-col gap-4 border border-gray-200 bg-white p-6 rounded-lg">
                            <p class="leading-relaxed text-base">
                                Fluids Diagnostic Test (Fluidiatest) adalah media tes diagnostik fisika pada materi fluida dengan berfokus pada identifikasi kelemahan pemahaman konsep dan representasi matematis pada peserta didik fase F kelas XI di tingkat SMA/MA.
                            </p>
                            <p>
                                Jenis asesmen yang digunakan berupa asesmen formatif dengan butir soal pilihan majemuk dua lapis (two tier) yang dilengkapi diagnosis dan saran berdasar setiap pilihan jawaban peserta didik.
                                E-diagnostik ini terdiri dari sub menu instrumen penilaian diagnostik yang dapat diakses di setiap pertemuan (sub pokok bahasan), serta terdapat paket soal pretest dan posttest yang digunakan sebagai sumber analisis efektivitas kegunaan Fluidiatest.
                            </p>
                            <p class="w-full text-center font-bold">
                                Selamat dan semangat belajar di fluidiatest.id ya😊
                            </p>
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
                    <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 bg-white rounded-e-lg sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
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
                    <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 bg-white rounded-e-lg sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
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