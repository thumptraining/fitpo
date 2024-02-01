<div>

<div class="flex items-center justify-between py-5 lg:py-6">
    <div class="flex items-center space-x-1">
        <h2 class="text-xl font-medium text-slate-700 line-clamp-1 lg:text-2xl">
            {{__('Content')}}
        </h2>
        <div x-data="usePopper({ placement: 'bottom-start', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false" class="inline-flex">
            <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25">
                <i class="fas fa-chevron-down"></i>
            </button>

            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                <div
                    class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter">
                    <ul>
                        <li>
                            <a href="{{route('posts.create')}}"
                                class="flex h-8 items-center space-x-3 px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mt-px size-4.5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                </svg>
                                <span> {{__('New Post')}}</span></a>
                        </li>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center space-x-2">

        <label class="relative hidden sm:flex">
            
            <input 
            wire:model.live="search"  type="search"
                class="form-control form-input peer h-9 w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary"
                placeholder="Search users..." />
            
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
  
    @if (empty($posts))
        <div class="alert flex rounded-lg bg-error px-4 py-4 text-white dark:bg-accent sm:px-5 w-full">
            {{__('No content avaliable')}} <i class="fa-solid fa-face-sad-tear ml-2 text-xl"></i> 
        </div>
    @else
        @foreach ($posts as $post)
            <div class="card flex-row justify-between space-x-2 p-2.5">
                <div class="flex flex-1 flex-col justify-between">
                    <div class="line-clamp-3">
                        <a href="{{ route('posts.show', $post) }}" class="font-medium text-slate-700 hover:text-primary focus:text-primary">
                            {{$post->name}}
                        </a>

                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="avatar size-7">
                                @if (empty($post->user->profile_photo_path))
                                    <img class="rounded-full " src="{{asset('images/avatar-2.png')}}" alt="avatar" />
                                @else
                                    <img class="rounded-full " src="{{ Storage::url($post->user->profile_photo_path) }}" alt="avatar" />
                                @endif
    
                            </div>
                            <div>
                                <p class="text-xs font-medium line-clamp-1">{{$post->user->name}}</p>

                                @if ($post->status == 1)
                                    <span class="text-xs"><i class="fa-solid fa-file-pen mr-1 text-secondary"></i>Borrador</span>
                                @else
                                    
                                    <span class="text-xs"><i class="fa-regular fa-circle-check mr-1 text-success"></i>Publicado</span>
                                @endif
                                
                                
                            </div>
                        </div>
                        <div class="flex">

                            
                            <a  href="{{route('posts.edit', $post)}}"
                                class="btn size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>

                            <form action="{{route('posts.destroy', $post)}}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25">
                                <i class="fa-solid fa-trash hover:text-red-600"></i>
                            </button>
                            </form>
                            

                        </div>
                    </div>
                </div>
                @if (empty($post->image->url))
                    <img src="{{ asset('images/fondo.png') }}" class="size-28 rounded-lg object-cover object-center" alt="image" />
                @else
                    <img src="{{ Storage::url($post->image->url) }}" class="size-28 rounded-lg object-cover object-center" alt="image" />
                @endif
                
            </div>
        @endforeach

    @endif
    
</div>

</div>

