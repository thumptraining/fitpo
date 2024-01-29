<x-app-layout title="Blog Details" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)]">
        
        <div class="grid grid-cols-12 lg:gap-6">
            
            <div class="col-span-12 pt-6 lg:col-span-8 lg:pb-6">
                <div class="card p-4 lg:p-6">

                    <!-- Author -->
                    <div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="flex">
                                    
                                    <div x-ref="popperRef" class="avatar size-12">
                                        @if (empty($post->user->profile_photo_path))
                                            <img class="mask is-squircle" src="{{asset('images/avatar-2.png')}}" alt="avatar" />
                                        @else
                                            <img class="mask is-squircle" src="{{ Storage::url($post->user->profile_photo_path) }}" alt="avatar" />
                                        @endif
                                    </div>
                                  
                                </div>

                                <div>
                                    <p class="font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary">
                                        {{$post->user->name}}
                                    </p>
                                    
                                    <div class="mt-1.5 flex items-center text-xs">
                                        <span class="line-clamp-1">{{$post->created_at}}</span>
                                        <div class="mx-2 my-0.5 w-px self-stretch bg-white/20"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
   
                    </div>

                    <!-- Blog Post -->
                    <div class="mt-6 font-inter text-base text-slate-600">
                        <h1 class="text-xl font-medium text-slate-900 lg:text-2xl">
                            {{ $post->name }}
                        </h1>
                        <h3 class="mt-1">
                            {{ $post->extract}}
                        </h3>
                        <img class="mt-5 h-80 w-full rounded-lg object-cover object-center"  src="{{ Storage::url($post->image->url) }}" alt="{{ $post->name }}" />
                      

                        <div class="mt-10 mb-5">
                            {{ $post->body}}
                        </div>
                       
                    </div>

                     <!-- Footer Blog Post -->
                     <div class="mt-5 flex space-x-3">

                        @foreach ($post->tags as $tag)
                            
                            <div class="badge space-x-2 bg-primary text-slate-950 dark:bg-navy-500 dark:text-navy-100 h-10 font-bold" >
                        
                                <span>{{ $tag->name }}</span>
                            </div>
    
                        @endforeach

                    </div>

                </div>
            </div>

            <div class="col-span-12 py-6 lg:sticky lg:bottom-0 lg:col-span-4 lg:self-start">
                <div class="card">
                    <div class="h-24 rounded-t-lg bg-primary">
                        <img class="h-full w-full rounded-t-lg object-cover object-center"
                            src="{{ asset('images/portada-foto.png') }}" alt="image" />
                    </div>
                    <div class="px-4 pt-2 pb-5 sm:px-5">
                        <div class="avatar -mt-12 size-20">
                            @if (empty($post->user->profile_photo_path))
                                <img class="rounded-full border-2 border-white"
                                src="{{asset('images/avatar-2.png')}}" alt="avatar" />
                            @else
                                <img class="rounded-full border-2 border-white"
                                src="{{ Storage::url($post->user->profile_photo_path) }}" alt="avatar" />

                            @endif
                            
                        </div>

                        <h3 class="pt-2 text-lg font-medium text-slate-700">
                            {{$post->user->name}}
                        </h3>
                        <p class="text-xs+ text-slate-400">
                            Coach
                        </p>
                        <p class="mt-3">
                            Professional product designer and amateur cyclist living in
                            New York City, USA.
                        </p>

                        <h5 class="mt-3 mb-0 text-slate-800 font-semibold">{{__('Do you want to talk to your coach?')}}</h5>

                        <div class="mt-5 flex space-x-1">
                            <a href="" class="btn size-9 rounded-full bg-slate-150 px-0 text-xs+ font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80">
                                <i class="fa-brands fa-whatsapp text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
 
    </main>
</x-app-layout>
