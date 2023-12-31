<div class="bg-base-300 fixed right-0 top-0 left-0">
    <div class="container navbar">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl" wire:navigate href="{{ route('home') }}">E-Commerce</a>
            <ul class="flex gap-5 ml-3">
                <li>
                    <a href="#" class="link">Shop</a>
                </li>
                <li>
                    <a href="#" class="link">Browse</a>
                </li>
                <li>
                    <a href="#" class="link">FAQ</a>
                </li>
                <li>
                    <a href="#" class="link">Contact</a>
                </li>
            </ul>
        </div>
        <div class="flex-none">
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <div class="indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="badge badge-sm indicator-item">8</span>
                    </div>
                </div>
                <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-300 shadow">
                    <div class="card-body">
                        <span class="font-bold text-lg">8 Items</span>
                        <span class="">Subtotal: $999</span>
                        <div class="card-actions">
                            <button class="btn btn-primary btn-block">View cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="Tailwind CSS Navbar component"
                            src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-300 rounded-box w-52">
                    <li>
                        <a :active="request() - > routeIs('profile')" href="{{ route('profile') }}" wire:navigate>
                            Profile
                        </a>
                    </li>
                    <li><a :active="request() - > routeIs('setting')" href="{{ route('setting') }}"
                            wire:navigate>Settings</a></li>
                    <li>
                        <form action="{{ route('logout') }}">
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
