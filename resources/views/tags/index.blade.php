<x-app-layout title="Table Advanced Component" is-sidebar-open="true" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">

        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          
          <!-- tags Table -->
          <div>
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

            

            <!-- tabla -->
            <div class="card mt-3 px-5 pb-10">
              <div class="mx-5 flex">
                <h2 class="text-xl font-medium text-slate-800 lg:text-2xl my-10 w-full">
                  {{__('Manage tags')}}
                </h2>

                <div class="my-10 object-right">
                  <a href="{{route('tags.create')}}" class="btn size-9 rounded-full bg-info p-0 font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90 ml-3">
                    <i class="fa-solid fa-plus"></i>
                  </a>
                </div>
                
              </div>
              

              <div class="is-scrollbar-hidden min-w-full overflow-x-auto" x-data="pages.tables.initExample1">

                <table class="is-hoverable w-full text-left">
                  <thead>

                    <tr>
                     
                      <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5">
                        {{__('Name')}}
                      </th>

                      <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5" >
                        Slug
                      </th>
                      
                      <th class="whitespace-nowrap rounded-tr-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 lg:px-5" >
                       {{ __('Actions')}}
                      </th>

                    </tr>

                  </thead>

                  <tbody>

                      @foreach ($tags as $tag)
                      <tr class="border-y border-transparent border-b-slate-200">

                        <td class="whitespace-nowrap px-3 py-3 font-medium text-slate-700 lg:px-5">
                          {{ __($tag->name)}}
                        </td>

                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                          {{ $tag->slug}}
                        </td>

                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                          <div class="flex">
                            
                            @if ($tag->name == 'Recipes')
                              <div></div>
                            @else
                              <a href="{{route('tags.edit', $tag)}}" class="btn size-9 rounded-full bg-success p-0 font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90 mr-2">
                              <i class="fa-solid fa-pen"></i>
                              </a>

                              <form action="{{route('tags.destroy', $tag)}}" method="POST">
                                @csrf @method('delete')
                                <button type="submit" class="btn size-9 rounded-full bg-error p-0 font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90">
                                  <i class="fa-solid fa-trash"></i>
                                </button>
                              </form>
                            @endif

                            
  
                          </div>
                          
                        </td>
                      </tr>

                        
                      @endforeach
                      
                    </tr>
                    
                  </tbody>
                </table>

              </div>

            </div>

          </div>

        </div>

      </main>
</x-app-layout>
