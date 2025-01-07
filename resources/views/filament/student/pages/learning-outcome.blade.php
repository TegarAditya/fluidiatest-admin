<x-filament-panels::page>
    <section id="about" class="text-gray-900 body-font">
        <div class="container mx-auto">
            <div class="flex flex-col gap-8">
                <div class="w-full">
                    <div>
                        <div class="border border-gray-200 bg-white p-6 rounded-lg">
                            <p class="leading-relaxed text-base">
                                Pada fase F, capaian pembelajaran terdiri dari elemen pemahaman fisika dan keterampilan proses.
                            <ul class="flex flex-col gap-2 py-2">
                                <li>
                                    <h4 class="font-semibold">Pemahaman fisika</h4>
                                    <p>Peserta didik mampu menerapkan konsep dan prinsip fluida dalam menyelesaikan masalah.</p>
                                </li>
                                <li>
                                    <h4 class="font-semibold">Keterampilan proses</h4>
                                    <ol class="ml-5 list-outside list-decimal">
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
                <div class="gap-4 grid grid-cols-1 md:grid-cols-2">
                    @foreach($learningPurpose as $purpose)
                    <div wire:key="{{ $purpose->id }}">
                        <div class="border border-gray-200 bg-white p-6 rounded-lg">
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">{{ $purpose->name }}</h2>
                            <div class="relative prose prose-ol:list-outside prose-ol:list-decimal">
                                {!! parseMarkdown($purpose->learning_goal) !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-filament-panels::page>