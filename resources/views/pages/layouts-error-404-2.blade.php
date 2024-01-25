<x-base-layout title="Error 404 v2">
    <main class="grid w-full grow grid-cols-1 place-items-center">
        <div class="grid max-w-screen-lg grid-cols-1 place-items-center gap-12 p-6 lg:grid-cols-2 lg:gap-24">
            <div class="absolute p-6 opacity-20 lg:static lg:opacity-100">
                <img width="440" x-show="!$store.global.isDarkModeEnabled" src="{{asset('images/illustrations/penguins.svg')}}"
                    alt="404 image" />
                <img width="440" x-show="$store.global.isDarkModeEnabled" src="{{asset('images/illustrations/penguins-dark.svg')}}"
                    alt="404 image" />
            </div>
            <div class="z-2 text-center lg:text-left">
                <p class="mt-4 text-7xl font-bold text-primary lg:mt-0">
                    404
                </p>
                <p class="mt-6 text-xl font-semibold text-slate-800 lg:mt-10 lg:text-3xl">
                    Oops. This Page Not Found.
                </p>
                <p class="pt-2 text-slate-500 lg:text-lg">
                    This page you are looking not available
                </p>

                <button
                    class="btn mt-10 h-11 bg-primary text-base font-medium text-white hover:bg-primary-focus hover:shadow-lg hover:shadow-primary/50 focus:bg-primary-focus focus:shadow-lg focus:shadow-primary/50 active:bg-primary-focus/90">
                    Back To Home
                </button>
            </div>
        </div>
    </main>
</x-base-layout>
