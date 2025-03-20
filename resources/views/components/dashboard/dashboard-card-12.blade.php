<div class="col-span-full xl:col-span-6 bg-white dark:bg-gray-800 shadow-xs rounded-xl">
    <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60">
        <h2 class="font-semibold text-gray-800 dark:text-gray-100">Berita</h2>
    </header>
    <div class="p-3">
        <!-- Card content -->
        <!-- "berita terbaru" group -->
        <div>
            <header
                class="text-xs uppercase text-gray-400 dark:text-gray-500 bg-gray-50 dark:bg-gray-700/50 rounded-xs font-semibold p-2">
                Terbaru</header>
            <ul class="my-1">
                <!-- Item -->
                @foreach ($beritasTerbaru as $beritasTerbaru)
                    <li class="flex px-2">
                        <div
                            class="grow flex items-center border-b border-gray-100 dark:border-gray-700/60 text-sm py-2">
                            <div class="grow flex justify-between">
                                <div class="self-center">
                                    <a
                                        class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-100 dark:hover:text-white">
                                        {{ Str::limit($beritasTerbaru->judul, 35) }}
                                    </a>
                                </div>
                                <!-- Buat created_at rata kanan -->
                                <div class="shrink-0 text-gray-500 text-sm text-right ml-auto">
                                    {{ $beritasTerbaru->updated_at->locale('id')->diffForHumans() }}
                                </div>
                                <div class="shrink-0 self-end ml-2">
                                    <a class="font-medium text-violet-500 hover:text-violet-600 dark:hover:text-violet-400"
                                        href="{{ route('berita.detail', $beritasTerbaru->slug) }}">
                                        View -&gt;
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach

                <!-- "berita terlama" group -->
                <div>
                    <header
                        class="text-xs uppercase text-gray-400 dark:text-gray-500 bg-gray-50 dark:bg-gray-700/50 rounded-xs font-semibold p-2">
                        Terlama</header>
                    <ul class="my-1">
                        <!-- Item -->
                        @foreach ($beritasTerlama as $beritasTerlama)
                            <li class="flex px-2">
                                <div
                                    class="grow flex items-center border-b border-gray-100 dark:border-gray-700/60 text-sm py-2">
                                    <div class="grow flex justify-between">
                                        <div class="self-center">
                                            <a
                                                class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-100 dark:hover:text-white">
                                                {{ Str::limit($beritasTerlama->judul, 35) }}
                                            </a>
                                        </div>
                                        <div class="shrink-0 text-gray-500 text-sm text-right ml-auto">
                                            {{ $beritasTerlama->updated_at->locale('id')->diffForHumans() }}
                                        </div>
                                        <div class="shrink-0 self-end ml-2">
                                            <a class="font-medium text-violet-500 hover:text-violet-600 dark:hover:text-violet-400"
                                                href="{{ route('berita.detail', $beritasTerlama->slug) }}">
                                                View -&gt;
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
        </div>
    </div>
</div>