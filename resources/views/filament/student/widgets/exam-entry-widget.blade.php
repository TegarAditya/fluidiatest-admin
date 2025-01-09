<x-filament-widgets::widget>
    <x-filament::section>
        <div>
            <h1 class="text-xl font-semibold">
                {{ $title }}
            </h1>
            <hr class="my-2">
            <p class="text-sm">
                Selamat datang di {{ $title }}. Silahkan klik tombol dibawah ini untuk memulai tes.
            </p>
        </div>
        <br class="my-2">
        <div class="grid grid-cols-2 md:flex w-full gap-2">
            @if ($this->getExams())
            @foreach ($this->getExams() as $exam)
            <x-filament::button color="primary" tag="a" href="{{ $clientUrl }}/?test_id={{ $exam->public_id }}">
                <span id="countdown" class="font-mono">{{ $exam->code }}</span>
            </x-filament::button>
            @endforeach
            @else
            <x-filament::button color="info" tag="a">
                <span id="countdown" class="font-mono" disabled>Belum ada soal</span>
            </x-filament::button>
            @endif
        </div>
    </x-filament::section>
</x-filament-widgets::widget>