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


    <main class="flex w-full min-h-screen  flex-col items-center bg-slate-100 dark:bg-navy-700 lg:max-w-md">

        <div class="flex w-full max-w-sm grow flex-col justify-center p-5">
           
            <!--LOGO MOVIL -->
            <div class="text-center">
                <img class="mx-auto mt-10 mb-10 w-40 lg:hidden" src="{{ asset('images/logo-completo.png') }}" alt="thump" />
                <div class="mt-4">
                    <h2 class="text-2xl font-bold text-slate-950 dark:text-navy-100">
                        {{ __('Forgot your password?') }}
                    </h2>
                    <p class="text-slate-800 dark:text-navy-300 text-xs mt-3">
                        {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        
                    </p>
                </div>
            </div>

            <!--FORMULARIOM DE INICIO -->
            <form class="mt-5" action="{{ route('password.email') }}" method="POST">
                @method('POST') @csrf

                <div>
                    <label class="relative flex mb-3">
                        <input
                            class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-300 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                            placeholder="Email" type="email" name="email" id="email"
                            value="{{ old('email')}}" required />
                            <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-slate-800 dark:text-navy-300 dark:peer-focus:text-accent">
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

                <button type="submit"
                    class="btn mt-5 h-15 w-full bg-primary font-medium text-slate-950 hover:bg-secondary-focus focus:bg-secondary-focus  hover:text-white active:bg-secondary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">

                    {{ __('Email Password Reset Link') }}
                    
                </button>

                <div class="mt-4 text-center text-slate-800">
                    <p class="line-clamp-1">
                        <span>{{__('Already have an account?')}}</span>

                        <a class="text-slate-950 transition-colors hover:text-secondary-focus dark:text-accent-light dark:hover:text-accent font-bold" href="{{route('login')}}">{{ __('Login') }}</a>
                    </p>
                </div> 

            </form>
            
        </div>


    </main>

</x-base-layout>
     