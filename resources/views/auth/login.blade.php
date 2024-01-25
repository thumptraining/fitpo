<x-base-layout title="Login">
    
    <!--LOGO LG-->
    <div class="fixed top-0 hidden p-6 lg:block lg:px-12">
        <a href="#" class="flex items-center space-x-2">
            <img class="w-40" src="{{ asset('images/logo-limon.svg') }}" alt="logo" />
        </a>
    </div>
    
    <!--ilustracion-->
    <div class="hidden w-full place-items-center lg:grid bg-slate-950">
        <div class="w-full  p-6">
            <img class="w-full" x-show="!$store.global.isDarkModeEnabled"
                src="{{ asset('images/illustrations/fondo-fit.png') }}" alt="image" />
            <img class="w-full" x-show="$store.global.isDarkModeEnabled"
                src="{{ asset('images/illustrations/fondo-fit.png') }}" alt="image" />
        </div>
    </div>

    <main class="flex w-full min-h-screen  flex-col items-center bg-lime-400 dark:bg-navy-700 lg:max-w-md">
        <div class="flex w-full max-w-sm grow flex-col justify-center p-5">
           
            <!--LOGO MOVIL -->
            <div class="text-center">
                <img class="mx-auto mt-10 mb-10 w-40 lg:hidden" src="{{ asset('images/logo-completo.png') }}" alt="thump" />
                <div class="mt-4">
                    <h2 class="text-2xl font-bold text-slate-950 dark:text-navy-100">
                        {{ __('Login') }}
                    </h2>
                    <p class="text-slate-800 dark:text-navy-300">
                        {{ __('Please sign in to continue') }}
                        
                    </p>
                </div>
            </div>

            <!--FORMULARIOM DE INICIO -->
            <form class="mt-16" action="{{ route('login') }}" method="POST">
                @method('POST') @csrf

                <div>
                    <label class="relative flex mb-3">
                        <input
                            class="form-input border-inherit peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-slate-800/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring focus:ring-slate-700 dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                            placeholder="Email" type="email" name="email" id="email"
                            value="{{ old('email')}}" />
                            <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-secondary dark:text-navy-300 dark:peer-focus:text-accent">
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

                <div class="mt-4">
                    <label class="relative flex mb-3">
                        <input class="form-input peer border-inherit w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-slate-800/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring focus:ring-slate-700 dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                            placeholder="{{__('Password')}}" type="password" name="password"
                            value="{{ old('password') ?? 'password' }}" />
                        <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
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

                <div class="mt-4 flex items-center justify-between space-x-2">
                    <label class="inline-flex items-center space-x-2">
                        <input
                            class="form-checkbox is-outline size-5 rounded border-slate-700 bg-slate-100 before:bg-secondary checked:border-secondary hover:border-secondary focus:border-secondary dark:border-navy-500 dark:bg-navy-900 dark:before:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent"
                            type="checkbox" />
                        <span class="line-clamp-1 text-slate-700 text-sm">{{ __('Remember me') }}</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            class="text-sm text-slate-950 transition-colors line-clamp-1 hover:text-slate-800 focus:text-slate-800 dark:text-navy-300 dark:hover:text-navy-100 dark:focus:text-navy-100">{{ __('Forgot Password?') }}
                        </a>
                    @endif

                </div>

                <button type="submit"
                    class="btn mt-10 h-10 w-full bg-secondary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                    {{ __('Sign In') }}
                    
                </button>

                <div class="mt-4 text-center text-slate-800">
                    <p class="line-clamp-1">
                        <span>{{ __('Dont have Account?') }}</span>

                        <a class="text-slate-950 transition-colors hover:text-secondary-focus dark:text-accent-light dark:hover:text-accent font-bold" href="{{route('register')}}">{{ __('Register') }}</a>
                    </p>
                </div> 

            </form>
            
        </div>

        <div class="my-5 flex justify-center text-xs text-slate-100 dark:text-navy-300">
            <a href="#">Privacy Notice</a>
            <div class="mx-3 my-1 w-px bg-slate-100 dark:bg-navy-500"></div>
            <a href="#">Term of service</a>
        </div>

    </main>

</x-base-layout>
     