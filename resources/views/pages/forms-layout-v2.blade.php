<x-app-layout title="Form Layout v2" is-header-blur="true">
    <!-- Main Content Wrapper -->
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 lg:text-2xl">
                Form Layout 2
            </h2>
            <div class="hidden h-full py-1 sm:flex">
                <div class="h-full w-px bg-slate-300"></div>
            </div>
            <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                <li class="flex items-center space-x-2">
                    <a class="text-primary transition-colors hover:text-primary-focus"
                        href="#">Forms</a>
                    <svg x-ignore xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </li>
                <li>Form Layout 2</li>
            </ul>
        </div>

        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
            <div class="col-span-12 grid lg:col-span-4 lg:place-items-center">
                <div>
                    <ol class="steps is-vertical line-space [--size:2.75rem] [--line:.5rem]">
                        <li class="step space-x-4 pb-12 before:bg-slate-200">
                            <div class="step-header mask is-hexagon bg-primary text-white">
                                <i class="fa-solid fa-layer-group text-base"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-xs text-slate-400">
                                    Step 1
                                </p>
                                <h3 class="text-base font-medium text-primary">
                                    General
                                </h3>
                            </div>
                        </li>
                        <li class="step space-x-4 pb-12 before:bg-slate-200">
                            <div
                                class="step-header mask is-hexagon bg-slate-200 text-slate-500">
                                <i class="fa-solid fa-list text-base"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-xs text-slate-400">
                                    Step 2
                                </p>
                                <h3 class="text-base font-medium">Description</h3>
                            </div>
                        </li>
                        <li class="step space-x-4 pb-12 before:bg-slate-200">
                            <div
                                class="step-header mask is-hexagon bg-slate-200 text-slate-500">
                                <i class="fa-solid fa-truck-fast text-base"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-xs text-slate-400">
                                    Step 3
                                </p>
                                <h3 class="text-base font-medium">Shipping</h3>
                            </div>
                        </li>
                        <li class="step space-x-4 before:bg-slate-200">
                            <div
                                class="step-header mask is-hexagon bg-slate-200 text-slate-500">
                                <i class="fa-solid fa-check text-base"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-xs text-slate-400">
                                    Step 4
                                </p>
                                <h3 class="text-base font-medium">Confirm</h3>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-span-12 grid lg:col-span-8">
                <div class="card">
                    <div class="border-b border-slate-200 p-4 sm:px-5">
                        <div class="flex items-center space-x-2">
                            <div
                                class="flex size-7 items-center justify-center rounded-lg bg-primary/10 p-1 text-primary">
                                <i class="fa-solid fa-layer-group"></i>
                            </div>
                            <h4 class="text-lg font-medium text-slate-700">
                                General
                            </h4>
                        </div>
                    </div>
                    <div class="space-y-4 p-4 sm:p-5">
                        <label class="block">
                            <span>Product name</span>

                            <input
                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary"
                                placeholder="Enter product name" type="text" />
                        </label>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <label class="block">
                                <span>Category</span>
                                <select class="mt-1.5 w-full" x-init="$el._x_tom = new Tom($el, { create: true, sortField: { field: 'text', direction: 'asc' } })">
                                    <option>Digital</option>
                                    <option>Technology</option>
                                    <option>Home</option>
                                    <option>Other</option>
                                </select>
                            </label>

                            <div class="grid grid-cols-2 gap-4">
                                <label class="block">
                                    <span>SKU</span>
                                    <input
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary"
                                        placeholder="SKU" type="text" />
                                </label>

                                <label class="block">
                                    <span>Price</span>
                                    <input
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary"
                                        placeholder="Price" type="text" />
                                </label>
                            </div>
                        </div>
                        <div>
                            <span>Images</span>
                            <div class="filepond fp-bordered fp-grid mt-1.5 [--fp-grid:2]">
                                <input type="file" x-init="$el._x_filepond = FilePond.create($el)" multiple />
                            </div>
                        </div>
                        <div class="flex justify-center space-x-2 pt-4">
                            <button
                                class="btn space-x-2 bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Prev</span>
                            </button>
                            <button
                                class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90">
                                <span>Next</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
