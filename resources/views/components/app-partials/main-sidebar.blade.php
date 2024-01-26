<div class="main-sidebar">
    <div
        class="flex h-full w-full flex-col items-center border-r border-slate-150 bg-white">
        <!-- Application Logo -->
        <div class="flex pt-4">
            <a href="/">
                <img class="size-11 transition-transform duration-500 ease-in-out hover:rotate-[360deg]"
                    src="{{ asset('images/logo-dark.svg') }}" alt="logo" />
            </a>
        </div>

        <!-- Main Sections Links -->
        <div class="is-scrollbar-hidden flex grow flex-col space-y-4 overflow-y-auto pt-6">
            
            <!-- Dashobards -->
            <a href="#"
                class="flex size-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 {{ $routePrefix === 'dashboards' ? 'text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 bg-primary/10' : 'hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25' }}"
                x-tooltip.placement.right="'Dashboards'">
                <svg class="size-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-opacity=".3"
                        d="M5 14.059c0-1.01 0-1.514.222-1.945.221-.43.632-.724 1.453-1.31l4.163-2.974c.56-.4.842-.601 1.162-.601.32 0 .601.2 1.162.601l4.163 2.974c.821.586 1.232.88 1.453 1.31.222.43.222.935.222 1.945V19c0 .943 0 1.414-.293 1.707C18.414 21 17.943 21 17 21H7c-.943 0-1.414 0-1.707-.293C5 20.414 5 19.943 5 19v-4.94Z" />
                    <path fill="currentColor"
                        d="M3 12.387c0 .267 0 .4.084.441.084.041.19-.04.4-.204l7.288-5.669c.59-.459.885-.688 1.228-.688.343 0 .638.23 1.228.688l7.288 5.669c.21.163.316.245.4.204.084-.04.084-.174.084-.441v-.409c0-.48 0-.72-.102-.928-.101-.208-.291-.355-.67-.65l-7-5.445c-.59-.459-.885-.688-1.228-.688-.343 0-.638.23-1.228.688l-7 5.445c-.379.295-.569.442-.67.65-.102.208-.102.448-.102.928v.409Z" />
                    <path fill="currentColor" d="M11.5 15.5h1A1.5 1.5 0 0 1 14 17v3.5h-4V17a1.5 1.5 0 0 1 1.5-1.5Z" />
                    <path fill="currentColor"
                        d="M17.5 5h-1a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5Z" />
                </svg>
            </a>
        </div>
         
    </div>
</div>
