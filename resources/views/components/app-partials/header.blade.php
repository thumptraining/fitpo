<nav class="header print:hidden">
    <!-- App Header  -->
    <div class="header-container relative flex w-full bg-white print:hidden">
        <!-- Header Items -->
        <div class="flex w-full items-center justify-between">
            
            <!-- Left: Sidebar Toggle Button -->
            <div class="size-7">
                <button
                    class="menu-toggle ml-0.5 flex size-7 flex-col justify-center space-y-1.5 text-primary outline-none focus:outline-none"
                    :class="$store.global.isSidebarExpanded && 'active'"
                    @click="$store.global.isSidebarExpanded = !$store.global.isSidebarExpanded">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>

            <!-- Right: Header buttons -->
            <div class="-mr-1.5 flex items-center space-x-2">
                
                <!-- Mobile Search Toggle -->
                <button @click="$store.global.isSearchbarActive = !$store.global.isSearchbarActive"
                    class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 sm:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5.5 text-slate-500"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>

                <!-- Main Searchbar -->
                <template x-if="$store.breakpoints.smAndUp">
                    <div class="flex" x-data="usePopper({ placement: 'bottom-end', offset: 12 })" @click.outside="if(isShowPopper) isShowPopper = false">
                        <div class="relative mr-4 flex h-8">
                            <input placeholder="Search here..."
                                class="form-input peer h-full rounded-full bg-slate-150 px-4 pl-9 text-xs+ text-slate-800 ring-primary/50 hover:bg-slate-200 focus:ring"
                                :class="isShowPopper ? 'w-80' : 'w-60'" @focus="isShowPopper= true" type="text"
                                x-ref="popperRef" />
                            <div
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="size-4.5 transition-colors duration-200" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z" />
                                </svg>
                            </div>
                        </div>
                        <div :class="isShowPopper && 'show'" class="popper-root" x-ref="popperRoot">
                            <div
                                class="popper-box flex max-h-[calc(100vh-6rem)] w-80 flex-col rounded-lg border border-slate-150 bg-white shadow-soft">
                                <div x-data="{ activeTab: 'tabAll' }"
                                    class="is-scrollbar-hidden flex shrink-0 overflow-x-auto rounded-t-lg bg-slate-100 px-2 text-slate-600">
                                    <button @click="activeTab = 'tabAll'"
                                        :class="activeTab === 'tabAll' ?
                                            'border-primary text-primary' :
                                            'border-transparent hover:text-slate-800 focus:text-slate-800'"
                                        class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                                        All
                                    </button>
                                    <button @click="activeTab = 'tabFiles'"
                                        :class="activeTab === 'tabFiles' ?
                                            'border-primary text-primary' :
                                            'border-transparent hover:text-slate-800 focus:text-slate-800'"
                                        class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                                        Files
                                    </button>
                                    <button @click="activeTab = 'tabChats'"
                                        :class="activeTab === 'tabChats' ?
                                            'border-primary text-primary' :
                                            'border-transparent hover:text-slate-800 focus:text-slate-800'"
                                        class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                                        Chats
                                    </button>
                                    <button @click="activeTab = 'tabEmails'"
                                        :class="activeTab === 'tabEmails' ?
                                            'border-primary text-primary' :
                                            'border-transparent hover:text-slate-800 focus:text-slate-800'"
                                        class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                                        Emails
                                    </button>
                                    <button @click="activeTab = 'tabProjects'"
                                        :class="activeTab === 'tabProjects' ?
                                            'border-primary text-primary' :
                                            'border-transparent hover:text-slate-800 focus:text-slate-800'"
                                        class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                                        Projects
                                    </button>
                                    <button @click="activeTab = 'tabTasks'"
                                        :class="activeTab === 'tabTasks' ?
                                            'border-primary text-primary' :
                                            'border-transparent hover:text-slate-800 focus:text-slate-800'"
                                        class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                                        Tasks
                                    </button>
                                </div>

                                <div class="is-scrollbar-hidden overflow-y-auto overscroll-contain pb-2">
                                    <div class="is-scrollbar-hidden mt-3 flex space-x-4 overflow-x-auto px-3">
                                        <a href="#" class="w-14 text-center">
                                            <div class="avatar size-12">
                                                <div class="is-initial rounded-full bg-success text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <p
                                                class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700">
                                                Kanban
                                            </p>
                                        </a>
                                        <a href="#"
                                            class="w-14 text-center">
                                            <div class="avatar size-12">
                                                <div class="is-initial rounded-full bg-secondary text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <p
                                                class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700">
                                                Analytics
                                            </p>
                                        </a> 
                               
                                    </div>

                                    <div
                                        class="mt-3 flex items-center justify-between bg-slate-100 py-1.5 px-3">
                                        <p class="text-xs uppercase text-slate-400">
                                            Recent
                                        </p>
                                        <a href="#"
                                            class="text-tiny+ font-medium uppercase text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70">
                                            View All
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </template>
 

                <!-- Notification-->
                <div x-effect="if($store.global.isSearchbarActive) isShowPopper = false" x-data="usePopper({ placement: 'bottom-end', offset: 12 })"
                    @click.outside="if(isShowPopper) isShowPopper = false" class="flex">
                    <button @click="isShowPopper = !isShowPopper" x-ref="popperRef"
                        class="btn relative size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-slate-500"
                            stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15.375 17.556h-6.75m6.75 0H21l-1.58-1.562a2.254 2.254 0 01-.67-1.596v-3.51a6.612 6.612 0 00-1.238-3.85 6.744 6.744 0 00-3.262-2.437v-.379c0-.59-.237-1.154-.659-1.571A2.265 2.265 0 0012 2c-.597 0-1.169.234-1.591.65a2.208 2.208 0 00-.659 1.572v.38c-2.621.915-4.5 3.385-4.5 6.287v3.51c0 .598-.24 1.172-.67 1.595L3 17.556h12.375zm0 0v1.11c0 .885-.356 1.733-.989 2.358A3.397 3.397 0 0112 22a3.397 3.397 0 01-2.386-.976 3.313 3.313 0 01-.989-2.357v-1.111h6.75z" />
                        </svg>

                        <span class="absolute -top-px -right-px flex size-3 items-center justify-center">
                            <span
                                class="absolute inline-flex h-full w-full animate-ping rounded-full bg-secondary opacity-80"></span>
                            <span class="inline-flex size-2 rounded-full bg-secondary"></span>
                        </span>
                    </button>
                    <div :class="isShowPopper && 'show'" class="popper-root" x-ref="popperRoot">
                        <div x-data="{ activeTab: 'tabAll' }"
                            class="popper-box mx-4 mt-1 flex max-h-[calc(100vh-6rem)] w-[calc(100vw-2rem)] flex-col rounded-lg border border-slate-150 bg-white shadow-soft sm:m-0 sm:w-80">
                            <div class="rounded-t-lg bg-slate-100 text-slate-600">
                                <div class="flex items-center justify-between px-4 pt-2">
                                    <div class="flex items-center space-x-2">
                                        <h3 class="font-medium text-slate-700">
                                            Notifications
                                        </h3>
                                        <div
                                            class="badge h-5 rounded-full bg-primary/10 px-1.5 text-primary">
                                            26
                                        </div>
                                    </div>

                                    <button
                                        class="btn -mr-1.5 size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </button>
                                </div>

                                <div class="is-scrollbar-hidden flex shrink-0 overflow-x-auto px-3">
                                    <button @click="activeTab = 'tabAll'"
                                        :class="activeTab === 'tabAll' ?
                                            'border-primary text-primary' :
                                            'border-transparent hover:text-slate-800 focus:text-slate-800'"
                                        class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                                        <span>All</span>
                                    </button>
                                    <button @click="activeTab = 'tabAlerts'"
                                        :class="activeTab === 'tabAlerts' ?
                                            'border-primary text-primary' :
                                            'border-transparent hover:text-slate-800 focus:text-slate-800'"
                                        class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                                        <span>Alerts</span>
                                    </button>
                                    <button @click="activeTab = 'tabEvents'"
                                        :class="activeTab === 'tabEvents' ?
                                            'border-primary text-primary' :
                                            'border-transparent hover:text-slate-800 focus:text-slate-800'"
                                        class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                                        <span>Events</span>
                                    </button>
                                    <button @click="activeTab = 'tabLogs'"
                                        :class="activeTab === 'tabLogs' ?
                                            'border-primary text-primary' :
                                            'border-transparent hover:text-slate-800 focus:text-slate-800'"
                                        class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                                        <span>Logs</span>
                                    </button>
                                </div>
                            </div>

                            <div class="tab-content flex flex-col overflow-hidden">
                                <div x-show="activeTab === 'tabAll'"
                                    x-transition:enter="transition-all duration-300 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                                    class="is-scrollbar-hidden space-y-4 overflow-y-auto px-4 py-4">
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-secondary/10">
                                            <i class="fa fa-user-edit text-secondary"></i>
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-600">
                                                User Photo Changed
                                            </p>
                                            <div class="mt-1 text-xs text-slate-400 line-clamp-1">
                                                John Doe changed his avatar photo
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-info/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-info"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-600">
                                                Mon, June 14, 2021
                                            </p>
                                            <div class="mt-1 flex text-xs text-slate-400">
                                                <span class="shrink-0">08:00 - 09:00</span>
                                                <div class="mx-2 my-1 w-px bg-slate-200"></div>

                                                <span class="line-clamp-1">Frontend Conf</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-primary/10">
                                            <i class="fa-solid fa-image text-primary"></i>
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-600">
                                                Images Added
                                            </p>
                                            <div class="mt-1 text-xs text-slate-400 line-clamp-1">
                                                Mores Clarke added new image gallery
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-success/10">
                                            <i class="fa fa-leaf text-success"></i>
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-600">
                                                Design Completed
                                            </p>
                                            <div class="mt-1 text-xs text-slate-400 line-clamp-1">
                                                Robert Nolan completed the design of the CRM
                                                application
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-info/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-info"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-600">
                                                Wed, June 21, 2021
                                            </p>
                                            <div class="mt-1 flex text-xs text-slate-400">
                                                <span class="shrink-0">16:00 - 20:00</span>
                                                <div class="mx-2 my-1 w-px bg-slate-200"></div>

                                                <span class="line-clamp-1">UI/UX Conf</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-warning/10">
                                            <i class="fa fa-project-diagram text-warning"></i>
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-600">
                                                ER Diagram
                                            </p>
                                            <div class="mt-1 text-xs text-slate-400 line-clamp-1">
                                                Team completed the ER diagram app
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-warning/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-warning"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-600">
                                                THU, May 11, 2021
                                            </p>
                                            <div class="mt-1 flex text-xs text-slate-400">
                                                <span class="shrink-0">10:00 - 11:30</span>
                                                <div class="mx-2 my-1 w-px bg-slate-200"></div>
                                                <span class="line-clamp-1">Interview, Konnor Guzman
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-error/10">
                                            <i class="fa fa-history text-error"></i>
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-600">
                                                Weekly Report
                                            </p>
                                            <div class="mt-1 text-xs text-slate-400 line-clamp-1">
                                                The weekly report was uploaded
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabAlerts'"
                                    x-transition:enter="transition-all duration-300 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                                    class="is-scrollbar-hidden space-y-4 overflow-y-auto px-4 py-4">
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-secondary/10">
                                            <i class="fa fa-user-edit text-secondary"></i>
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-600">
                                                User Photo Changed
                                            </p>
                                            <div class="mt-1 text-xs text-slate-400 line-clamp-1">
                                                John Doe changed his avatar photo
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-primary/10">
                                            <i class="fa-solid fa-image text-primary"></i>
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-600">
                                                Images Added
                                            </p>
                                            <div class="mt-1 text-xs text-slate-400 line-clamp-1">
                                                Mores Clarke added new image gallery
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-success/10">
                                            <i class="fa fa-leaf text-success"></i>
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-600">
                                                Design Completed
                                            </p>
                                            <div class="mt-1 text-xs text-slate-400 line-clamp-1">
                                                Robert Nolan completed the design of the CRM
                                                application
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-warning/10">
                                            <i class="fa fa-project-diagram text-warning"></i>
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-600">
                                                ER Diagram
                                            </p>
                                            <div class="mt-1 text-xs text-slate-400 line-clamp-1">
                                                Team completed the ER diagram app
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-error/10">
                                            <i class="fa fa-history text-error"></i>
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-600">
                                                Weekly Report
                                            </p>
                                            <div class="mt-1 text-xs text-slate-400 line-clamp-1">
                                                The weekly report was uploaded
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabEvents'"
                                    x-transition:enter="transition-all duration-300 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                                    class="is-scrollbar-hidden space-y-4 overflow-y-auto px-4 py-4">
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-info/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-info"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-600">
                                                Mon, June 14, 2021
                                            </p>
                                            <div class="mt-1 flex text-xs text-slate-400">
                                                <span class="shrink-0">08:00 - 09:00</span>
                                                <div class="mx-2 my-1 w-px bg-slate-200"></div>

                                                <span class="line-clamp-1">Frontend Conf</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-info/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-info"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-600">
                                                Wed, June 21, 2021
                                            </p>
                                            <div class="mt-1 flex text-xs text-slate-400">
                                                <span class="shrink-0">16:00 - 20:00</span>
                                                <div class="mx-2 my-1 w-px bg-slate-200"></div>

                                                <span class="line-clamp-1">UI/UX Conf</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-warning/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-warning"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-600">
                                                THU, May 11, 2021
                                            </p>
                                            <div class="mt-1 flex text-xs text-slate-400">
                                                <span class="shrink-0">10:00 - 11:30</span>
                                                <div class="mx-2 my-1 w-px bg-slate-200"></div>
                                                <span class="line-clamp-1">Interview, Konnor Guzman
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-info/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-info"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-600">
                                                Mon, Jul 16, 2021
                                            </p>
                                            <div class="mt-1 flex text-xs text-slate-400">
                                                <span class="shrink-0">06:00 - 16:00</span>
                                                <div class="mx-2 my-1 w-px bg-slate-200"></div>

                                                <span class="line-clamp-1">Laravel Conf</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-warning/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-warning"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-medium text-slate-600">
                                                Wed, Jun 16, 2021
                                            </p>
                                            <div class="mt-1 flex text-xs text-slate-400">
                                                <span class="shrink-0">15:30 - 11:30</span>
                                                <div class="mx-2 my-1 w-px bg-slate-200"></div>
                                                <span class="line-clamp-1">Interview, Jonh Doe
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabLogs'"
                                    x-transition:enter="transition-all duration-300 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                                    class="is-scrollbar-hidden overflow-y-auto px-4">
                                    <div class="mt-8 pb-8 text-center">
                                        <img class="mx-auto w-36"
                                            src="{{ asset('images/illustrations/empty-girl-box.svg') }}"
                                            alt="image" />
                                        <div class="mt-5">
                                            <p class="text-base font-semibold text-slate-700">
                                                No any logs
                                            </p>
                                            <p class="text-slate-400">
                                                There are no unread logs yet
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- logout -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25">
                        <i class="fa-solid fa-power-off bg-gradient-to-r from-red-400 to-red-600 bg-clip-text text-lg font-semibold text-transparent"></i>
                    </a>

                </form>

            
                <!-- Right Sidebar Toggle -->
                <button @click="$store.global.isRightSidebarExpanded = true"
                    class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5.5 text-slate-500"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                </button>
                
            </div>
        </div>
    </div>
</nav>
