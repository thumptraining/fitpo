<div>
    <div class="flex items-center justify-between py-5 lg:py-6">

        <div class="flex items-center space-x-1">
            <h2 class="text-xl font-medium text-slate-700 line-clamp-1 lg:text-2xl">
                Fitness Blog
            </h2>
            <div class="inline-flex"></div>
        </div>

        <div class="flex items-center space-x-2">
            <label class="relative hidden sm:flex">
            
                <input  wire:model.live="search"  type="search" class="form-control form-input peer h-9 w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary" placeholder="Search users..." />
                
                <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4 transition-colors duration-200"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z" />
                    </svg>
                </span>
    
            </label>
        </div>
    </div>

    
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6">
        
        @forelse ($posts as $post)
            <div class="card">

                <div class="p-2.5">
                    @if (empty($post->image->url))
                        <img src="{{ asset('images/fondo.png') }}" class="h-48 w-full rounded-lg object-cover object-center" alt="image" />
                    @else
                        <img src="{{ Storage::url($post->image->url) }}" class="h-48 w-full rounded-lg object-cover object-center" alt="image" />
                    @endif

                </div>

                <div class="flex grow flex-col px-4 pb-5 pt-1 text-center sm:px-5">
                    <div><a class="text-xs+ text-info">{{$post->category->name}}</a></div>
                    <div class="mt-1">

                        <a href="{{ route('posts.show', $post) }}"
                            class="text-lg font-medium text-slate-700 hover:text-primary focus:text-primary">{{$post->name}}
                        </a>
                    </div>

                    <div class="my-2 flex items-center space-x-3 text-xs">
                        <div class="h-px flex-1 bg-slate-200"></div>
                        <p>{{$post->updated_at->format('d-M-Y');}}</p>
                        <div class="h-px flex-1 bg-slate-200"></div>
                    </div>
                    <p class="my-2 grow text-left line-clamp-3">
                        {{$post->extract}}
                    </p>
                    <div>
                        <a href="{{ route('posts.show', $post) }}"
                            class="btn mt-4 rounded-full bg-primary font-medium text-white hover:bg-primary-focus hover:shadow-lg hover:shadow-primary/50 focus:bg-primary-focus focus:shadow-lg focus:shadow-primary/50 active:bg-primary-focus/90">
                            {{__('Read Article')}}
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="card">
                <div class="p-2.5">
                    <img src="{{asset('images/portada-foto.png')}}" class="h-48 w-full rounded-lg object-cover object-center"
                        alt="thump" />
                </div>
                <div class="flex grow flex-col px-4 pb-5 pt-1 text-center sm:px-5">
                    <div><a class="text-xs+ text-info" href="#">UUUUUP!</a></div>
                    <div class="mt-1">
                        <a href="#"
                            class="text-lg font-medium text-slate-700 hover:text-primary focus:text-primary">
                            {{__('We are working')}}</a>
                    </div>
                    <div class="my-2 flex items-center space-x-3 text-xs">
                        <div class="h-px flex-1 bg-slate-200"></div>
                        <p>{{__('Coming soon')}}</p>
                        <div class="h-px flex-1 bg-slate-200"></div>
                    </div>
                  
                </div>
            </div>
        @endforelse
        
    </div>
</div>

