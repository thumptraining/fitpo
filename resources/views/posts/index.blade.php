<x-app-layout title="Blog Card 6" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        @if (session('info'))
              <div class="my-5">
                <div x-data="{isShow:true}" :class="!isShow && 'opacity-0 transition-opacity duration-300'" class="alert flex items-center justify-between overflow-hidden rounded-lg border border-success text-white bg-success">
                  <div class="flex bg-success">
                    <div class="bg-success p-3 text-white">
                      <svg  xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                      </svg>
                    </div>
                    <div class="px-4 py-3 sm:px-5 bg-success">{{__(session('info'))}}</div>
                  </div>
                  <div class="px-2  bg-success">
                    <button  @click="isShow = false; setTimeout(()=>$root.remove(),100)"
                      class="btn size-7 rounded-full p-0 font-medium text-white hover:bg-white/20 focus:bg-info/20 active:bg-info/25">
                      <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none"  viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
          @endif
          
        @livewire('blog.admin-blog')
   
    </main>
  
</x-app-layout>


