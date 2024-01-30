<x-app-layout title="Dashboard" is-sidebar-open="true" is-header-blur="true">
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



                @livewire('dashboard.show-post')

                @livewire('dashboard.recipes')

            </div>

            <div class="col-span-12 lg:col-span-4 xl:col-span-3">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-1 lg:gap-6">
                    <div class="card pb-5">
                        <div class="mt-3 flex items-center justify-between px-4">
                            <h2 class="font-medium tracking-wide text-slate-700">
                                Working Hours
                            </h2>
                     
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