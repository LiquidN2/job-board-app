<div class="flex min-h-screen flex-col justify-center px-6 py-12 lg:px-8">
    <x-slot:title>Sign In</x-slot:title>
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
             alt="Your Company">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Log in to your
            account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" wire:submit="signin">
            <div>
                <x-input-label for="email">Email address</x-input-label>
                <x-input-text class="mt-2" type="email" name="email" id="email" autocomplete="email" required
                              wire:model="email"/>
                <x-input-error name="email"/>
            </div>

            <div>
                <x-input-label for="password">Password</x-input-label>
                <x-input-text class="mt-2" type="password" name="password" id="password" required
                              wire:model="password"/>
                <x-input-error name="password"/>
            </div>

            <div>
                <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Login
                </button>
            </div>
        </form>

        <p class="mt-10 text-center text-sm text-gray-500">
            Don't have an account?
            <a href="/register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Register here</a>
        </p>
    </div>
</div>
