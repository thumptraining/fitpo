<div x-show="$store.breakpoints.isXs && $store.global.isSearchbarActive" x-transition:enter="easy-out transition-all"
    x-transition:enter-start="opacity-0 scale-105" x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="easy-in transition-all" x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
    class="fixed inset-0 z-[100] flex flex-col bg-white sm:hidden">
    <div class="flex items-center space-x-2 bg-slate-100 px-3 pt-2">
        <button
            class="btn -ml-1.5 size-7 shrink-0 rounded-full p-0 text-slate-600 hover:bg-slate-300/20 active:bg-slate-300/25"
            @click="$store.global.isSearchbarActive = false">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" stroke-width="1.5"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <input x-effect="$store.global.isSearchbarActive && $nextTick(() => $el.focus() );"
            class="form-input h-8 w-full bg-transparent placeholder-slate-400" type="text"
            placeholder="Search here..." />
    </div>

    <div x-data="{ activeTab: 'tabAll' }"
        class="is-scrollbar-hidden flex shrink-0 overflow-x-auto bg-slate-100 px-2 text-slate-600">
        <button @click="activeTab = 'tabAll'"
            :class="activeTab === 'tabAll' ? 'border-primary text-primary' :
                'border-transparent hover:text-slate-800 focus:text-slate-800'"
            class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
            All
        </button>
        <button @click="activeTab = 'tabFiles'"
            :class="activeTab === 'tabFiles' ? 'border-primary text-primary' :
                'border-transparent hover:text-slate-800 focus:text-slate-800'"
            class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
            Files
        </button>
        <button @click="activeTab = 'tabChats'"
            :class="activeTab === 'tabChats' ? 'border-primary text-primary' :
                'border-transparent hover:text-slate-800 focus:text-slate-800'"
            class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
            Chats
        </button>
        <button @click="activeTab = 'tabEmails'"
            :class="activeTab === 'tabEmails' ? 'border-primary text-primary' :
                'border-transparent hover:text-slate-800 focus:text-slate-800'"
            class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
            Emails
        </button>
        <button @click="activeTab = 'tabProjects'"
            :class="activeTab === 'tabProjects' ? 'border-primary text-primary' :
                'border-transparent hover:text-slate-800 focus:text-slate-800'"
            class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
            Projects
        </button>
        <button @click="activeTab = 'tabTasks'"
            :class="activeTab === 'tabTasks' ? 'border-primary text-primary' :
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
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
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
  
        </div>

        <div class="mt-3 flex items-center justify-between bg-slate-100 py-1.5 px-3">
            <p class="text-xs uppercase">Recent</p>
            <a href="#"
                class="text-tiny+ font-medium uppercase text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70">
                View All
            </a>
        </div>

    </div>
</div>
