<x-base-layout title="Register">
    <!--LOGO LG-->
    <div class="fixed top-0 hidden p-6 lg:block lg:px-12">
        <a href="#" class="flex items-center space-x-2">
            <img class="w-40" src="{{ asset('images/logo-limon.svg') }}" alt="thump" />
        </a>
    </div>

     <!--ilustracion-->
     <div class="hidden w-full place-items-center lg:grid bg-slate-950">
        <div class="w-full  p-6">
            <img class="w-full" x-show="!$store.global.isDarkModeEnabled"
                src="{{ asset('images/illustrations/fondo-fit.png') }}" alt="thump" />
            <img class="w-full" x-show="$store.global.isDarkModeEnabled"
                src="{{ asset('images/illustrations/fondo-fit.png') }}" alt="thump" />
        </div>
    </div>


    <main class="flex w-full min-h-screen flex-col items-center bg-slate-100 lg:max-w-md ">
        <div class="flex w-full max-w-sm grow flex-col justify-center p-5">
            <div class="text-center mb-5">
                <!--LOGO MOVIL -->
                <img class="mx-auto mt-10 mb-10 w-40 lg:hidden" src="{{ asset('images/logo-completo.png') }}" alt="thump" />

                <div class="mt-4">
                    <h2 class="text-2xl font-bold text-slate-950">
                        {{__('Welcome To')}} {{ config('app.name') }}
                    </h2>
                    <p class="text-slate-800">
                        {{__('Please sign up to continue')}}
                    </p>
                </div>
            </div>

            <!--FORMULARIOM DE registro -->
            <form class="mt-4" action="{{ route('register') }}" method="POST">
              @csrf
                <div class="space-y-4">

                    <div>
                        <label class="relative flex mb-3">
                            <input
                            class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-800 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="{{__('Name')}}" type="text" name="name"  id="name" value="{{ old('name') }}" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </span>
                        </label>
                        @error('name')
                            <span class="text-tiny+ text-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="relative flex mb-3">
                            <input
                            class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-800 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="Email" type="email" name="email" id="email" value="{{ old('email') }}" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                        </label>
                        @error('email')
                            <span class="text-tiny+ text-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="relative flex mb-3">
                            <input
                                class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-800 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="{{__('Password')}}" type="password" name="password" id="password" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </span>
                        </label>
                        @error('password')
                            <span class="text-tiny+ text-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="relative flex mb-3">
                            <input
                            class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-800 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="{{__('Repeat Password')}}" type="password" name="password_confirmation" id="password_confirmation"  />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </span>
                        </label>
                        @error('password_confirmation')
                            <span class="text-tiny+ text-error">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <button type="submit"
                class="btn mt-10 h-10 w-full bg-primary font-medium text-slate-950 hover:bg-secondary-focus focus:bg-secondary-focus  hover:text-white active:bg-secondary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                    {{__('Sign In')}}
                </button>

            </form>
            <div class="mt-4 text-center text-slate-700">
                <p class="line-clamp-1">
                    <span>{{__('Already have an account?')}}</span>
                    <a class="text-slate-950 transition-colors hover:text-slate-950-focus font-bold"
                        href="{{ route('login') }}">{{__('Sign In')}}
                    </a>
                </p>
            </div>
        </div>
    </main>
</x-base-layout>
