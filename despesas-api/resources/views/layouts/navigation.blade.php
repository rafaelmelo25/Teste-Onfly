<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex dis">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <!-- <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div> -->

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>


<style>
    /* Global Styling */
body {
    font-family: 'Inter', sans-serif;
    background-color: #f8fafc;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Centered Container for Navbar */
nav {
    background-color: #ffffff;
    border: 1px solid #e2e8f0;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    border-radius: 0.5rem;
    max-width: 500px;
    width: 100%;
    padding: 1rem;
}

/* Flex Container for the Header */
.flex {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

/* Logo Section */
.shrink-0 {
    display: flex;
    align-items: center;
}

/* Navigation Links */
.space-x-8 > * {
    margin-right: 2rem;
}

nav a {
    color: #4b5563; /* Gray 600 */
    font-size: 1rem;
    font-weight: 500;
    text-decoration: none;
}

nav a:hover, nav a:focus {
    color: #1f2937; /* Gray 800 */
    border-bottom: 2px solid #4b5563;
}

nav a.active {
    color: #1f2937; /* Gray 800 */
    border-bottom: 2px solid #6366f1; /* Indigo 500 */
}

/* User Menu */
button {
    display: flex;
    align-items: center;
    background-color: transparent;
    border: none;
    font-size: 1rem;
    color: #6b7280;
    cursor: pointer;
    transition: all 0.3s ease;
}

button:hover, button:focus {
    color: #374151;
}

button svg {
    margin-left: 0.25rem;
    height: 1rem;
    width: 1rem;
}

/* Dropdown Menu */
.x-dropdown {
    position: absolute;
    right: 1rem;
    top: 4rem;
    background-color: #fff;
    border-radius: 0.25rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 12rem;
    display: none;
}

.x-dropdown[aria-expanded="true"] {
    display: block;
}

/* Dropdown Links */
.x-dropdown a {
    display: block;
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
    color: #4b5563;
    text-decoration: none;
}

.x-dropdown a:hover {
    background-color: #f3f4f6;
    color: #1f2937;
}

/* Hamburger Menu for Mobile */
.hamburger {
    display: flex;
    align-items: center;
    padding: 0.5rem;
    border-radius: 0.25rem;
    background-color: transparent;
    color: #6b7280;
}

.hamburger:hover {
    background-color: #f3f4f6;
    color: #374151;
}

.hamburger svg {
    height: 1.5rem;
    width: 1.5rem;
}

/* Responsive Menu */
.responsive-menu {
    display: none;
    flex-direction: column;
    padding: 1rem 0;
    background-color: #fff;
}

.responsive-menu.active {
    display: flex;
}

.responsive-menu a {
    padding: 0.75rem 1rem;
    font-size: 1rem;
    color: #374151;
    text-decoration: none;
}

.responsive-menu a:hover {
    background-color: #f3f4f6;
    color: #1f2937;
}

/* Responsive Settings Section */
.responsive-settings {
    padding: 1rem;
    border-top: 1px solid #e5e7eb;
}

.responsive-settings .user-info {
    margin-bottom: 0.75rem;
}

.responsive-settings .user-info div {
    font-size: 1rem;
    color: #374151;
}

.responsive-settings .user-info div.email {
    font-size: 0.875rem;
    color: #6b7280;
}

.responsive-settings a {
    display: block;
    padding: 0.5rem 1rem;
    color: #4b5563;
}

.responsive-settings a:hover {
    background-color: #f3f4f6;
    color: #1f2937;
}

/* Utilities */
.bg-white {
    background-color: #ffffff;
}

.border-b {
    border-bottom: 1px solid #e2e8f0;
}

.mx-auto {
    margin-left: auto;
    margin-right: auto;
}

.px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
}

.sm\\:px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
}

.lg\\:px-8 {
    padding-left: 2rem;
    padding-right: 2rem;
}

.h-16 {
    height: 4rem;
}

</style>