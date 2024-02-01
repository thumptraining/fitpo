<div class="main-sidebar">
    <div
        class="flex h-full w-full flex-col items-center border-r border-slate-150 bg-white">
        <!-- Application Logo -->
        <div class="flex pt-4">
            <a href="{{route('dashboard')}}">
                <img class="size-11 transition-transform duration-500 ease-in-out hover:rotate-[360deg]"
                    src="{{ asset('images/logo-dark.svg') }}" alt="logo" />
            </a>
        </div>

        <!-- Main Sections Links -->
        <div class="is-scrollbar-hidden flex grow flex-col space-y-4 overflow-y-auto pt-6">
            
            <!-- Dashobards -->
            <a href="{{route('dashboard')}}"
                class="flex size-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 {{ $routePrefix === 'dashboards' ? 'text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 bg-primary/10' : 'hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25' }}"
                x-tooltip.placement.right="'Home'">
                <i class="fa-solid fa-house text-xl"></i>
            </a>

            <!-- Contenido -->
            <a href="{{route('posts.index')}}"
                class="flex size-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 {{ $routePrefix === 'posts.index' ? 'text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 bg-primary/10' : 'hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25' }}"
                x-tooltip.placement.right="'Blog'">
                <i class="fa-solid fa-book-open text-xl"></i>   
            </a>

        </div>
         
    </div>
</div>
