<x-app-layout title="Table Advanced Component" is-sidebar-open="true" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">

        <div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2 class="text-xl font-medium text-slate-800 lg:text-2xl">
            {{__('Create categories')}}
          </h2>
        </div>

        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <div class="card py-5 px-4  sm:px-5">
                <form action="{{route('categories.store')}}" method="POST" wire:poll>
                    @csrf
                    <div class="mx-5 my-3">
                        <label class="block">
                            <input class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                              placeholder="{{__('Name')}}"
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
    
                    <div class="mx-5 my-3">
                        <label class="block">
                            <input class="form-input w-full rounded-lg border border-slate-300 bg-slate-200 px-3 py-2 placeholder:text-slate-950/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                              placeholder="Slug..."
                              type="text"
                              name="slug"
                              id="slug"
                              readonly

                            />
                        </label>

                        @error('slug')
                        <span class="text-error text-xs my-3">{{ $message }}</span>
                        @enderror
        
                       
                    </div>

                    <div class="mx-5 my-5 flex">
                        <button class="btn bg-primary font-medium text-white hover:bg-primary-focus hover:shadow-lg hover:shadow-primary/50 focus:bg-primary-focus focus:shadow-lg focus:shadow-primary/50 active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:hover:shadow-accent/50 dark:focus:bg-accent-focus dark:focus:shadow-accent/50 dark:active:bg-accent/90 w-full" type="submit">
                            <i class="fa-solid fa-circle-plus mr-2"></i> {{__('Create')}}
                      </button>

                      <a href="{{route('categories.index')}}" class="btn bg-slate-800 font-medium text-white hover:bg-slate-800-focus hover:shadow-lg hover:shadow-slate-800/50 focus:bg-slate-800-focus focus:shadow-lg focus:shadow-slate-800/50 active:bg-slate-800-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:hover:shadow-accent/50 dark:focus:bg-accent-focus dark:focus:shadow-accent/50 dark:active:bg-accent/90 w-full mx-3">
                        <i class="fa-solid fa-circle-chevron-left mr-2"></i> {{__('Back')}}
                      </a>
                    </div>
                    
                </form>
                
            </div>
            
        </div>

    </main>

    
  
</x-app-layout>

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
