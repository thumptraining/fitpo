
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
            <h2 class="text-xl font-medium text-slate-800 lg:text-2xl">
              {{__('Create Post')}}
            </h2>
        </div>

      
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <div class="card py-5 px-4  sm:px-5">
                <form action="{{route('posts.store')}}" method="POST">
                    @csrf

                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
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
                              value="{{ old('name') }}"
                            />
                        </label>
                        @error('name')
                            <span class="text-error text-xs my-3">{{ $message }}</span>
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
                              value="{{ old('slug') }}"
                            />
                        </label>
                        @error('slug')
                            <span class="text-error text-xs my-3">{{ $message }}</span>
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
                                <option disabled>{{__('Choose an option')}}</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{__($category->name)}}</option>
                                @endforeach
                              
                              
                            </select>
                        </label>
                        @error('category_id')
                            <span class="text-error text-xs my-3">{{ $message }}</span>
                        @enderror
                    </div>

                    <!--tags-->
                    <div class="mx-5 my-5">
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
                                <option disabled>{{__('Choose an option')}}</option>

                                @foreach ($tags as $tag)
                                <option value="{{$tag->id}}">{{__($tag->name)}}</option>
                                @endforeach
                            
                            </select>
                        </label>
                        @error('tags')
                            <span class="text-error text-xs my-3">{{ $message }}</span>
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
                            <p>Borrador</p>
                        </label>
                          
                        <label class="inline-flex items-center space-x-2">
                        <input
                            class="form-radio is-basic size-5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                            name="status"
                            type="radio"
                            value="2"
                        />
                        <p>Publicar</p>
                        </label>

                        @error('status')
                            <span class="text-error text-xs my-3">{{ $message }}</span>
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
                              
                            ></textarea>
                        </label>

                        @error('extract')
                            <span class="text-error text-xs my-3">{{ $message }}</span>
                        @enderror

                    </div>
                    <!--Body-->
                    <div class="mx-5 my-5">
                        <label class="block">

                            <span>{{__('Body')}}</span>
                            
                            <div class="my-3">
                                <div class="ql-header-filled w-full">
                                    <input type="hidden" id="quillContent" name="body">
                                    <div id="body"  class="h-48"></div>
                                </div>
    
                            </div>
                            
                        </label>

                        @error('body')
                            <span class="text-error text-xs my-3">{{ $message }}</span>
                        @enderror
                
                    </div>

                    <div class="mx-5 my-5">
                        <button class="w-full btn bg-success font-medium text-white hover:bg-success-focus hover:shadow-lg hover:shadow-success/50 focus:bg-success-focus focus:shadow-lg focus:shadow-success/50 active:bg-success-focus/90" type="submit">Crear Post</button>
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

</script>

