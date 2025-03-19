<div class="col-span-full xl:col-span-6 bg-white dark:bg-gray-800 shadow-xs rounded-xl">
    <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60">
        <h2 class="font-semibold text-gray-800 dark:text-gray-100">Layanan Aduan</h2>
    </header>
    <div class="p-3">
        <!-- Card content -->
        <div>
            <header
                class="text-xs uppercase text-gray-400 dark:text-gray-500 bg-gray-50 dark:bg-gray-700/50 rounded-xs font-semibold p-2">
                Aduan terbaru</header>
            <ul class="my-1">
                <!-- Item -->
                @foreach ($pengaduan as $pengaduan)
                <li class="flex px-2">
                    <div class="w-9 h-9 rounded-full shrink-0 bg-green-500 my-2 mr-3">
                        <svg class="w-9 h-9 fill-current text-white" viewBox="0 0 36 36">
                            <path d="M18.3 11.3l-1.4 1.4 4.3 4.3H11v2h10.2l-4.3 4.3 1.4 1.4L25 18z" />
                        </svg>
                    </div>
                    <div class="grow flex items-center border-b border-gray-100 dark:border-gray-700/60 text-sm py-2">
                            <div class="grow flex justify-between">
                                <div class="self-center">
                                    <a
                                        class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-100 dark:hover:text-white">
                                        {{ Str::limit($pengaduan->description, 35) }}
                                    </a>
                                    </div>
                                <div class="shrink-0 self-end ml-2">
                                    <span class="font-medium text-gray-500 dark:text-gray-100">
                                        {{ $pengaduan->updated_at->locale('id')->diffForHumans() }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </li>
            </ul>
        </div>

    </div>
</div>
