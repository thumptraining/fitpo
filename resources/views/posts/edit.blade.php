
<style>
    .ck-editor__editable
    {
       min-height: 150px !important;
       max-height: 400px !important;
    }
</style>

<x-app-layout title="Blog Card 6" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <a href="{{route('posts.index')}}" class="btn w-24 py-3 bg-slate-800 text-primary hover:bg-secondary hover:text-white focus:bg-secondary  focus:text-white active:bg-secondary active:text-white dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 text-xs">
                <i class="fa-solid fa-circle-chevron-left mr-2 text-lg"></i> {{__('Back')}}
            </a>
            
            <h2 class="text-xl font-medium text-slate-800 lg:text-2xl">
              {{__('Edit Post')}}
            </h2>
        </div>

    
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <div class="card py-5 px-4  sm:px-5">
                <form action="{{route('posts.update', $post)}}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')


                    <!--FOTO-->
                    <div class="card">

                        <div class="p-2.5">
                            @if ($post->image)
                                <img id="picture" src="{{Storage::url($post->image->url)}}" class="h-52 w-full lg:w-2/4 rounded-lg object-cover object-center mx-auto" alt="image">
                            @else
                                <img id="picture" src="{{asset('images/fondo.png')}}" class="h-52 w-full lg:w-2/4 rounded-lg object-cover object-center mx-auto" alt="image">
                            @endif
                          
                        </div>

                        <div class="flex grow flex-col px-4 pb-5 pt-1 text-center sm:px-5">

                            <div class="mt-1">
                                <p  class="text-lg font-medium text-slate-700 ">{{__('Choose your cover image')}}</p>
                            </div>
 
                            <div class="my-3">

                                <label class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                    <input
                                    
                                    type="file"
                                    name="cover"
                                    id="cover"
                                    accept="image/*"
                                    class="pointer-events-none absolute inset-0 h-full w-full opacity-0"
                                    
                                    />
                                    <div class="flex items-center space-x-2">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="size-5"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"
                                        />
                                    </svg>
                                    <span>{{__('Upload image')}}</span>
                                    </div>
                                </label>

                                @error('cover')
                                <span class="text-tiny+ text-error">{{ $message }}</span>
                            @enderror

                            </div>

                        </div>

                      
                    </div>

                    <!--Name-->
                    <div class="mx-5 my-5">
                        <label class="block">
                            <span>{{__('Title')}}</span>
                            <input
                              class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                              placeholder="{{__('Enter the title of the post or recipe')}}"
                              type="text"
                              name="name"
                              id="name"
                              value="{{ $post->name }}"
                            />
                        </label>
                        @error('name')
                            <span class="text-tiny+ text-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <!--slug-->
                    <div class="mx-5 my-5">
                        <label class="block">
                            <span>{{__('Slug')}}</span>
                            <input
                              class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-slate-200 px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                              type="text"
                              name="slug"
                              id="slug"
                              readonly
                              value="{{$post->slug}}"
                            />
                        </label>
                        @error('slug')
                            <span class="text-tiny+ text-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <!--Category-->
                    <div class="mx-5 my-5">
                        <label class="block">
                            <span>{{__('Category')}}</span>
                            <select
                              class="form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                              name="category_id" id="category_id"
                              
                            >
                                <option value="{{ $post->category->id }}" disabled>{{ __($post->category->name) }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{__($category->name)}}</option>
                                @endforeach
                              
                              
                            </select>
                        </label>
                        @error('category_id')
                            <span class="text-tiny+ text-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <!--tags-->
                    <div class="mx-5 my-5 h-fit">
                        <label class="block">
                            <span>{{__('Tags')}}</span>
                            <select  x-init="$el._tom = new Tom($el,{
                                    plugins: {
                                    'clear_button':{
                                        'title':'Remove all selected options',
                                    }
                                    },
                                    persist: false,
                                    create: true
                                })"
                              class="mt-1.5 w-full"
                              
                              multiple
                              name="tags[]"

                            >
                                @foreach ($tags as $tag)
                                    <option value="{{$tag->id}}">{{__($tag->name)}}</option>
                                @endforeach
                            
                            </select>
                        </label>
                        @error('tags')
                            <span class="text-tiny+ text-error">{{ $message }}</span>
                        @enderror
                    </div>

                    
                    <!--Extract-->
                    <div class="mx-5 my-5">
                        <label class="block">

                            <span class="my-3">{{__('Extract')}}</span>

                            <textarea
                              rows="8"
                              placeholder=" Enter Text"
                              name="extract"
                              id="extract"
                              class="form-textarea w-full resize-none rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent mt-2"
                              
                            >{{$post->extract}}</textarea>
                        </label>

                        @error('extract')
                            <span class="text-tiny+ text-error">{{ $message }}</span>
                        @enderror

                    </div>

                    <!--Body-->
                    <div class="mx-5 my-5">
                        <label class="block">

                            <span>{{__('Body')}}</span>
                            
                            <div class="my-3">
                                <div class="ql-header-filled w-full">
                                    <input type="hidden" id="quillContent" name="body" value="{{$post->body}}">
                                    <div id="body"  class="h-48">{!! $post->body !!}</div>
                                </div>
    
                            </div>
                            
                        </label>

                        @error('body')
                            <span class="text-tiny+ text-error">{{ $message }}</span>
                        @enderror
                
                    </div>

                    <!--status-->
                    <div class="mx-5 my-5">
                        <h2 class="my-3">Estado</h2>

                        <label class="inline-flex items-center space-x-2 mr-4">
                           
                            <input
                              checked
                              class="form-radio is-basic size-5 rounded-full border-slate-400/70 checked:border-slate-500 checked:bg-slate-500 hover:border-slate-500 focus:border-slate-500 dark:border-navy-400 dark:checked:bg-navy-400"
                              name="status"
                              type="radio"
                              value="1"
                            />
                            <p>{{__("Draft")}}</p>
                        </label>
                          
                        <label class="inline-flex items-center space-x-2">
                        <input
                            class="form-radio is-basic size-5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                            name="status"
                            type="radio"
                            value="2"
                        />
                        <p>{{__("Post")}}</p>
                        </label>

                        @error('status')
                            <span class="text-tiny+ text-error">{{ $message }}</span>
                        @enderror
                 
                    </div>

                    <div class="mx-5 my-5">
                        <button class="w-full btn bg-success font-medium text-white hover:bg-success-focus hover:shadow-lg hover:shadow-success/50 focus:bg-success-focus focus:shadow-lg focus:shadow-success/50 active:bg-success-focus/90" type="submit">{{__("Create Post")}}</button>
                    </div>
 
                </form>
            </div>
        </div>
       
    </main>
</x-app-layout>


<!-- Include the Quill library -->
<script src="{{asset('js/quill/quill.js')}}"></script>


<!-- Initialize Quill editor -->
<script>
  const quill = new Quill("#body", {
    modules : {
      toolbar: [
        ['bold', 'italic', 'underline', 'strike'], // toggled buttons
        ['blockquote', 'code-block'],
        [{ header: 1 }, { header: 2 }], // custom button values
        [{ list: 'ordered' }, { list: 'bullet' }],
        [{ script: 'sub' }, { script: 'super' }], // superscript/subscript
        [{ indent: '-1' }, { indent: '+1' }], // outdent/indent
        [{ align: [] }],

      ],
    },
    theme: "snow",
  });

  // Event listener para el evento input de Quill
    quill.on('text-change', function() {
        var contenidoQuill = quill.root.innerHTML;
        document.getElementById('quillContent').value = contenidoQuill;
    });
</script>

<script> 

    function stringToSlug(text) {
        return text
            .toLowerCase()
            .normalize('NFD')  // Normaliza las letras con acentos
            .replace(/[\u0300-\u036f]/g, '')  // Elimina los diacríticos
            .replace(/[^a-z0-9]+/g, '-')  // Reemplaza caracteres no alfanuméricos por guiones
            .replace(/^-+|-+$/g, '');  // Elimina guiones al principio y al final
    }
    
    document.addEventListener("DOMContentLoaded", function () {
        const nameInput = document.getElementById("name");
        const slugInput = document.getElementById("slug");
    
        nameInput.addEventListener("input", function () {
            const slug = stringToSlug(nameInput.value);
            slugInput.value = slug;
        });
    });

    document.getElementById("cover").addEventListener('change', cambiarImagen);

    function cambiarImagen(event){

        var file = event.target.files[0];

        var reader = new FileReader();

        reader.onload= (event)=>{

            document.getElementById("picture").setAttribute('src', event.target.result)

        };

        reader.readAsDataURL(file);

    }

</script>

