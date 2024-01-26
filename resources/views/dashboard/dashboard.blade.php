<x-app-layout title="THUMP Dashboard" is-header-blur="true">
    <!-- Main Content Wrapper -->
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="col-span-12 lg:col-span-8 xl:col-span-9">
                <div :class="$store.breakpoints.smAndUp && 'via-lime-600'"
                    class="card mt-12 bg-gradient-to-l from-lime-400 to-slate-800 p-5 sm:mt-0 sm:flex-row">
                    <div class="flex justify-center sm:order-last">
                        <img class="-mt-16 h-28 sm:mt-0" src="{{ asset('images/illustrations/medall.png') }}"
                            alt="" />
                    </div>
                    <div class="mt-2 flex-1 pt-2 text-center text-white sm:mt-0 sm:text-left">
                        <h3 class="text-xl">
                            {{__('Congratulations')}} <span class="font-semibold">{{ Auth::user()->name}}</span>
                        </h3>
                        <p class="mt-2 leading-relaxed">
                            {{__('Another day won, another day where your health comes first. Keep it up!')}}
                            <i class="fa-solid fa-heart ml-2 text-red-500"></i>
                        </p>

                    </div>
                </div>

                <div class="mt-4 transition-all duration-[.25s] sm:mt-5 lg:mt-6">
                    <div class="flex h-8 items-center justify-between">
                        <h2 class="text-base font-medium tracking-wide text-slate-700">
                            {{__('Latest Posts')}}
                        </h2>
                        
                    </div>
                    <div class="mt-3 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4">

                        @if (empty($posts))
                            <p>Nada aqui</p>
                        @else

                            @foreach ($posts as $post)
                                <div class="flex flex-col">
                                    <img class="h-44 w-full rounded-2xl object-cover object-center"
                                        src="{{ Storage::url($post->image->url) }}" alt="image" />
                                    <div class="card -mt-8 grow rounded-2xl p-4">
                                        <div>
                                            <a href="#"
                                                class="text-sm+ font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary">{{$post->name}}</a>
                                        </div>
                                        <p class="mt-2 grow line-clamp-3">
                                            {{$post->extract}}
                                        </p>
                                        <div class="mt-4 flex items-center justify-between">
                                                
                                            <div class="badge bg-primary text-white dark:bg-accent mr-2">{{$post->category->name}}</div>
                                            
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                        @endif
 
                    </div>
                </div>
                
            </div>

            <div class="col-span-12 lg:col-span-4 xl:col-span-3">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-1 lg:gap-6">
                    <div class="card pb-5">
                        <div class="mt-3 flex items-center justify-between px-4">
                            <h2 class="font-medium tracking-wide text-slate-700">
                                Working Hours
                            </h2>
                            <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                                class="inline-flex">
                                <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                    class="btn -mr-1.5 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                </button>

                                <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                    <div
                                        class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter">
                                        <ul>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800">Action</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800">Another
                                                    Action</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800">Something
                                                    else</a>
                                            </li>
                                        </ul>
                                        <div class="my-1 h-px bg-slate-150"></div>
                                        <ul>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800">Separated
                                                    Link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div x-init="$nextTick(() => {
                                $el._x_chart = new ApexCharts($el, pages.charts.workingHours);
                                $el._x_chart.render()
                            });"></div>
                        </div>
                        <div class="px-4 text-center text-xs+ sm:px-5">
                            <p>Working hours calculated based on your activity</p>
                        </div>
                    </div>

                    <div class="card p-4 lg:order-last">
                        <div class="space-y-1 text-center font-inter text-xs+">
                            <div class="flex items-center justify-between px-2 pb-4">
                                <p class="font-medium text-slate-700">
                                    January 2022
                                </p>
                                <div class="flex space-x-2">
                                    <button
                                        class="btn size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M15 19l-7-7 7-7" />
                                        </svg>
                                    </button>
                                    <button
                                        class="btn size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="grid grid-cols-7 pb-2">
                                <div class="text-tiny+ font-semibold text-primary">
                                    SUN
                                </div>
                                <div class="text-tiny+ font-semibold text-primary">
                                    MON
                                </div>
                                <div class="text-tiny+ font-semibold text-primary">
                                    TUE
                                </div>
                                <div class="text-tiny+ font-semibold text-primary">
                                    WED
                                </div>
                                <div class="text-tiny+ font-semibold text-primary">
                                    THU
                                </div>
                                <div class="text-tiny+ font-semibold text-primary">
                                    FRY
                                </div>
                                <div class="text-tiny+ font-semibold text-primary">
                                    SAT
                                </div>
                            </div>
                            <div class="grid grid-cols-7 place-items-center">
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-400 hover:bg-primary/10 hover:text-primary">
                                    29
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-400 hover:bg-primary/10 hover:text-primary">
                                    30
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-400 hover:bg-primary/10 hover:text-primary">
                                    31
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    1
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    2
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    3
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    4
                                </button>
                            </div>
                            <div class="grid grid-cols-7 place-items-center">
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    5
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    6
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    7
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    8
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    9
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    10
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    11
                                </button>
                            </div>
                            <div class="grid grid-cols-7 place-items-center">
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    12
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    13
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl font-medium text-primary hover:bg-primary/10 hover:text-primary">
                                    14
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    15
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    16
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    17
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    18
                                </button>
                            </div>
                            <div class="grid grid-cols-7 place-items-center">
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    19
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    20
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    21
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    22
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    23
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    24
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    25
                                </button>
                            </div>
                            <div class="grid grid-cols-7 place-items-center">
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    26
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    27
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    28
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    29
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary">
                                    30
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-400 hover:bg-primary/10 hover:text-primary">
                                    1
                                </button>
                                <button
                                    class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-400 hover:bg-primary/10 hover:text-primary">
                                    2
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-2 lg:col-span-1">
                        <div class="flex h-8 items-center justify-between">
                            <h2 class="font-medium tracking-wide text-slate-700">
                                Students
                            </h2>
                            <a href="#"
                                class="border-b border-dotted border-current pb-0.5 text-xs+ font-medium text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70">View
                                All</a>
                        </div>
                        <div class="mt-3 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-x-5 lg:grid-cols-1">
                            <div class="card p-3">
                                <div class="flex items-center justify-between space-x-2">
                                    <div class="flex items-center space-x-3">
                                        <div class="avatar size-10">
                                            <img class="rounded-full"
                                                src="{{ asset('images/200x200.png') }}" alt="avatar" />
                                            <div
                                                class="absolute right-0 size-3 rounded-full border-2 border-white bg-primary">
                                            </div>
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-700 line-clamp-1">
                                                Travis Fuller
                                            </p>
                                            <p class="mt-0.5 text-xs text-slate-400 line-clamp-1">
                                                65% completed
                                            </p>
                                        </div>
                                    </div>
                                    <div class="relative cursor-pointer">
                                        <button
                                            class="btn size-8 rounded-full bg-slate-150 p-0 font-medium text-slate-700 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.5"
                                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                            </svg>
                                        </button>
                                        <div
                                            class="absolute top-0 right-0 -m-1 flex h-4 min-w-[1rem] items-center justify-center rounded-full bg-primary px-1 text-tiny font-medium leading-none text-white">
                                            2
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-3">
                                <div class="flex items-center justify-between space-x-2">
                                    <div class="flex items-center space-x-3">
                                        <div class="avatar size-10">
                                            <img class="rounded-full"
                                                src="{{ asset('images/200x200.png') }}" alt="avatar" />
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-700 line-clamp-1">
                                                Konnor Guzman
                                            </p>
                                            <p class="mt-0.5 text-xs text-slate-400 line-clamp-1">
                                                78% completed
                                            </p>
                                        </div>
                                    </div>
                                    <div class="relative cursor-pointer">
                                        <button
                                            class="btn size-8 rounded-full bg-slate-150 p-0 font-medium text-slate-700 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.5"
                                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-3">
                                <div class="flex items-center justify-between space-x-2">
                                    <div class="flex items-center space-x-3">
                                        <div class="avatar size-10">
                                            <img class="rounded-full"
                                                src="{{ asset('images/200x200.png') }}" alt="avatar" />
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-700 line-clamp-1">
                                                Alfredo Elliott
                                            </p>
                                            <p class="mt-0.5 text-xs text-slate-400 line-clamp-1">
                                                58% completed
                                            </p>
                                        </div>
                                    </div>
                                    <div class="relative cursor-pointer">
                                        <button
                                            class="btn size-8 rounded-full bg-slate-150 p-0 font-medium text-slate-700 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.5"
                                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                            </svg>
                                        </button>
                                        <div
                                            class="absolute top-0 right-0 -m-1 flex h-4 min-w-[1rem] items-center justify-center rounded-full bg-primary px-1 text-tiny font-medium leading-none text-white">
                                            3
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-3">
                                <div class="flex items-center justify-between space-x-2">
                                    <div class="flex items-center space-x-3">
                                        <div class="avatar size-10">
                                            <img class="rounded-full" src="{{ asset('images/200x200.png') }}"
                                                alt="avatar" />
                                            <div
                                                class="absolute right-0 size-3 rounded-full border-2 border-white bg-primary">
                                            </div>
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-700 line-clamp-1">
                                                Derrick Simmons
                                            </p>
                                            <p class="mt-0.5 text-xs text-slate-400 line-clamp-1">
                                                65% completed
                                            </p>
                                        </div>
                                    </div>
                                    <div class="relative cursor-pointer">
                                        <button
                                            class="btn size-8 rounded-full bg-slate-150 p-0 font-medium text-slate-700 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.5"
                                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>