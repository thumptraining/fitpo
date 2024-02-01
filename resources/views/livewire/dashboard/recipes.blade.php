<div>
    <div class="mt-4 transition-all duration-[.25s] sm:mt-5 lg:mt-6">

        <div class="flex h-8 items-center justify-between">
            <h2 class="text-base font-medium tracking-wide text-slate-700">
                <i class="fa-solid fa-bowl-rice mr-2"></i> {{__('Latest recipes')}} 
            </h2>
            
        </div>

        <div class="mt-3 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4">

            @forelse ($recipes as $post)
                <div class="flex flex-col">
                    <img class="h-44 w-full rounded-2xl object-cover object-center"
                        src="{{ Storage::url($post->image->url) }}" alt="image" />
                    <div class="card -mt-8 grow rounded-2xl p-4">
                        <div>
                            <a class="text-xs+ text-info" href="#">{{$post->category->name}}</a>
                        </div>
                        <div>
                            <a href="{{ route('posts.show', $post) }}"
                                class="text-sm+ font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary">{{$post->name}}</a>
                        </div>

                        <p class="mt-2 grow line-clamp-3">
                            {{$post->extract}}
                        </p>

                        <div class="mt-4 flex items-center justify-between overflow-hidden">

                            @foreach ($post->tags as $tag)
                                <div class="badge bg-secondary text-white dark:bg-accent mr-2">{{$tag->name}}</div> 
                            @endforeach
                            
                            
                        </div>

                    
                    </div>
                </div>
            @empty
                <div class="flex flex-col">
                    <img class="h-44 w-full rounded-2xl object-cover object-center"
                        src="{{ asset('images/fondo.png') }}" alt="thump" />
                    <div class="card -mt-8 grow rounded-2xl p-4">
                        <div>
                            <a class="text-xs+ text-info" >{{__('Coming soon')}}</a>
                        </div>
                        <div>
                            <a 
                                class="text-sm+ font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary">{{__('More post soon')}}</a>
                        </div>

                        <p class="mt-2 grow line-clamp-3">
                        {{__(' We work hard to bring you the best training information...')}}
                        </p>

                        <div class="mt-4 flex items-center justify-between overflow-hidden">

                        
                            <div class="badge bg-info text-white dark:bg-accent mr-2">{{__('More')}}</div> 
                        
                            
                        </div>

                    
                    </div>
                </div>
            @endforelse

        </div>
    </div>

</div>
