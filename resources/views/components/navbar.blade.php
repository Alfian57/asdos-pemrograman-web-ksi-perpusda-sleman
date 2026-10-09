<nav class="sticky top-0 z-50 bg-gray-900/95 backdrop-blur-sm shadow-lg shadow-black/20 border-b border-white/5">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            {{-- Brand / Logo --}}
            <a href="/beranda" class="flex items-center gap-2 group">
                <div class="w-8 h-8 rounded-lg bg-emerald-600 flex items-center justify-center shrink-0 group-hover:bg-emerald-500 transition-colors duration-200">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <span class="text-white font-bold text-lg tracking-tight group-hover:text-emerald-300 transition-colors duration-200">
                    Perpusda Sleman
                </span>
            </a>

            {{-- Nav Links --}}
            <ul class="hidden sm:flex items-center gap-1">
                @php
                    $currentPath = request()->path();
                    $links = [
                        ['href' => '/beranda',      'label' => 'Beranda'],
                        ['href' => '/buku',         'label' => 'Buku'],
                        ['href' => '/tentang-kami', 'label' => 'Tentang Kami'],
                    ];
                @endphp

                @foreach ($links as $link)
                    @php
                        $isActive = ('/' . $currentPath) === $link['href'];
                    @endphp
                    <li>
                        <a href="{{ $link['href'] }}"
                           class="relative px-4 py-2 text-sm font-medium rounded-md transition-colors duration-200 group
                                  {{ $isActive
                                      ? 'text-white bg-white/10'
                                      : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                            {{ $link['label'] }}

                            @if ($isActive)
                                <span class="absolute bottom-0.5 left-4 right-4 h-0.5 rounded-full bg-emerald-400"></span>
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul>

            {{-- Mobile menu button --}}
            <button
                type="button"
                class="sm:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-white/10 transition-colors duration-200"
                aria-label="Buka menu"
                onclick="this.closest('nav').querySelector('#mobile-menu').classList.toggle('hidden')"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"/>
                </svg>
            </button>

        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="sm:hidden hidden border-t border-white/10 bg-gray-900">
        <ul class="px-4 py-3 flex flex-col gap-1">
            @foreach ($links as $link)
                @php $isActive = ('/' . $currentPath) === $link['href']; @endphp
                <li>
                    <a href="{{ $link['href'] }}"
                       class="block px-4 py-2.5 text-sm font-medium rounded-md transition-colors duration-200
                              {{ $isActive
                                  ? 'text-white bg-emerald-500/20 border-l-2 border-emerald-400 pl-3.5'
                                  : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                        {{ $link['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
