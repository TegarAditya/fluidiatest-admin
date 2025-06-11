<x-filament-panels::page>
    <div class="w-full grid grid-cols-1 md:grid-cols-3">
        @foreach($learningMaterial as $materi)
        <div class="relative flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg">
            <div class="relative aspect-video m-2.5 overflow-hidden text-white rounded-md">
                <img src="{{ asset('images/default-learning-cover.jpg') }}" alt="card-image" />
            </div>
            <div class="p-4">
                <h6 class="mb-2 text-slate-800 text-xl font-semibold">{{ $materi->title }}</h6>
                <p class="text-slate-600 leading-normal font-light">
                    {{ $materi->description }}
                </p>
            </div>
            <div class="px-4 pb-4 pt-0 mt-2 flex flex-col gap-2">
                <a href="{{ $s3Url }}/{{ $materi->attachment }}" target="_blank">
                    <button class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                        Unduh Materi
                    </button>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</x-filament-panels::page>