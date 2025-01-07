<x-filament-panels::page>
    <div class="w-full grid grid-cols-1 md:grid-cols-3">
        @foreach($learningMaterial as $materi)
        <div class="relative flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg">
            <div class="relative aspect-video m-2.5 overflow-hidden text-white rounded-md">
                <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="card-image" />
            </div>
            <div class="p-4">
                <h6 class="mb-2 text-slate-800 text-xl font-semibold">{{ $materi->title }}</h6>
                <p class="text-slate-600 leading-normal font-light">
                    {{ $materi->description }}
                </p>
            </div>
            <div class="px-4 pb-4 pt-0 mt-2">
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