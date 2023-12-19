<div class="flex items-center justify-center h-screen">
    <div class="card card-compact w-96 bg-base-100 shadow-xl border">
        <div class="card-body">
            <h2 class="font-semibold text-2xl text-center">Login</h2>
            <form action="" wire:submit="login" novalidate>
                <x-auth-input label="Email" type="text" name="email"/>
                @error('email')
                    <span class="text-rose-500">{{ $message }}</span>
                @enderror
                <x-auth-input label="Password" type="password" name="password"/>
                @error('password')
                    <span class="text-rose-500">{{ $message }}</span>
                @enderror
                <div class="card-actions justify-start mt-3">
                    <button class="btn btn-outline" type="submit">
                        Submit
                        <span class="loading loading-dots loading-md" wire:loading></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
