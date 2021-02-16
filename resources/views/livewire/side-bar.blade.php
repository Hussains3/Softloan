{{-- side navbar starting--}}
<nav id="sideNav" class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-no-wrap md:overflow-hidden shadow-xl bg-indigo-500 flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div class="text-white md:flex-col md:items-stretch md:min-h-full md:flex-no-wrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        {{-- akaunting --}}
        <div class="sidenav-header flex items-center">
            <ul id="appBrand" class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link flex items-center" href="{{ route('dashboard') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="avatar menu-avatar background-unset ">
                            <svg class="border-radius-none border-0 mr-3 h-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 4a1 1 0 000 2 1 1 0 011 1v1H7a1 1 0 000 2h1v3a3 3 0 106 0v-1a1 1 0 10-2 0v1a1 1 0 11-2 0v-3h3a1 1 0 100-2h-3V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <span id="appName" class="menuText font-bold nav-link-text long-texts pl-2 mwpx-100">SOFT LOAN</span>
                    </a>
                </li>
            </ul>
            <div id="onOffBtn" class="flex ml-auto left-menu-toggle-position overflow-hidden ">
                <svg class="p-0.5 inline w-7 mr-5 text-white hover:text-indigo-500 rounded-full hover:bg-yellow-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M8 5a1 1 0 100 2h5.586l-1.293 1.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L13.586 5H8zM12 15a1 1 0 100-2H6.414l1.293-1.293a1 1 0 10-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L6.414 15H12z" />
                </svg>
            </div>
        </div>
        {{-- side navbar menu --}}
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
            <!-- Divider -->
            <hr id="sideNavHr" class="md:min-w-full" />
            <!-- Navigation -->
            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center hover:bg-white hover:text-indigo-600 pl-2">
                    <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="text-xs uppercase py-3 font-bold block">
                        <svg  class="inline w-5 mr-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                        </svg>
                        <span class="menuText">{{ __('Dashboard') }}</span>
                    </a>
                </li>
            </ul>
            <!-- Navigation -->
            <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                <li class="items-center hover:bg-white hover:text-indigo-600 pl-2">
                    <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="text-xs uppercase py-3 font-bold block">
                        <svg class="inline w-5 mr-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="menuText">{{ __('Purchese') }}</span>
                    </a>
                </li>

                <li class="items-center hover:bg-white hover:text-indigo-600 pl-2">
                    <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="text-xs uppercase py-3 font-bold block">
                        <svg class="inline w-5 mr-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span class="menuText">{{ __('User') }}</span>
                    </a>
                </li>
                <li class="items-center hover:bg-white hover:text-indigo-600 pl-2">
                    <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="text-xs uppercase py-3 font-bold block">
                        <svg  class="inline w-5 mr-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                        </svg>
                        <span class="menuText">{{ __('Activity Log') }}</span>
                    </a>
                </li>
                <li class="items-center hover:bg-white hover:text-indigo-600 pl-2">
                    <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="text-xs uppercase py-3 font-bold block">
                        <svg class="inline w-5 mr-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="menuText">{{ __('Settings') }}</span>
                    </a>
                </li>
                <li class="items-center hover:bg-white hover:text-indigo-600 pl-2">
                    <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="text-xs uppercase py-3 font-bold block">
                        <svg class="inline w-5 mr-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                        </svg>
                        <span class="menuText">{{ __('Backup') }}</span>
                    </a>
                </li>
                <li class="items-center hover:bg-white hover:text-indigo-600 pl-2">
                    <a href="#" :active="request()->routeIs('support')" class="text-xs uppercase py-3 font-bold block">
                        <svg class="inline w-5 mr-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <span class="menuText">{{ __('Support') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- side navbar closing --}}
