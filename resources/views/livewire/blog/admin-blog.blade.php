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

                            <button
                                class="btn size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>

                            <button
                                class="btn size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25">
                                <i class="fa-solid fa-trash hover:text-red-600"></i>
                            </button>

                        </div>
                    </div>
                </div>
                <img src="{{ Storage::url($post->image->url) }}" class="size-28 rounded-lg object-cover object-center" alt="image" />
            </div>
        @endforeach

    @endif
    
</div>

