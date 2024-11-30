<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <main>
        <div class="flex items-center justify-center flex-wrap md:flex-nowrap mt-40">

            <div class="text-left max-w-2xl px-4 md:w-1/2">
                <h1 class="text-6xl font-bold text-white leading-tight mb-4">
                    Your all-in-one destination to satisfy every craving.
                </h1>
                <p class="text-lg text-white mb-8">
                    Discover endless options tailored just for you. Dive in, explore, and let your cravings lead the way!
                </p>
                <a href="#restaurants"
                   class="inline-block bg-white text-skyGradientStart px-6 py-3 rounded-lg font-semibold shadow hover:shadow-lg transition duration-200">
                    Browse Restaurants
                </a>
            </div>

            <div class="flex justify-center md:w-1/2">
                <img src="/images/main-cupcake.png" alt="Image" class="h-69 w-69 object-contain">
            </div>
        </div>
    </main>

    <footer>
        <div class="container mx-auto px-4 text-white">
            <div class="flex flex-col items-center">
                <img src="/images/valeats-logo.png" alt="Val Eats Logo" class="h-16 mb-2">
                <div class="w-full border-t border-white opacity-50 mt-2"></div>
            </div>
            <div class="flex flex-wrap justify-between items-center space-y-6 md:space-y-0 mt-16" >

                <div class="flex flex-col text-sm space-y-2">
                    <a href="#" class="hover:underline">About Us</a>
                    <a href="#" class="hover:underline">Privacy Policy</a>
                    <a href="#" class="hover:underline">Cookie Policy</a>
                </div>
                <div class="flex flex-col text-sm space-y-3">
                    <a href="#" class="hover:underline">Terms and Conditions</a>
                    <a href="#" class="hover:underline">Developers</a>
                </div>

                <div class="flex flex-col text-sm items-center space-y-2">
                    <p>Having trouble?</p>
                    <a href="#" class="hover:underline">Contact Us</a>
                    <div class="flex space-x-4 mt-2">
                        <a href="#" class="hover:text-gray-300">
                            <img src="/images/light-mode-facebook.png" alt="Facebook" class="h-8">
                        </a>
                        <a href="#" class="hover:text-gray-300">
                            <img src="/images/light-mode-ig.png" alt="Instagram" class="h-8">
                        </a>
                        <a href="#" class="hover:text-gray-300">
                            <img src="/images/light-mode-gmail.png" alt="Email" class="h-8">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</x-app-layout>
