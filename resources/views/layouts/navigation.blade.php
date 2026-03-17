<nav x-data="{ open: false }" class="sticky top-0 z-50 border-b border-slate-200/80 bg-white/95 backdrop-blur">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center gap-8">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-2xl bg-violet-600 text-sm font-bold text-white">
                        UM
                    </div>

                    <div class="hidden sm:block">
                        <div class="text-sm font-semibold text-slate-900">User Management</div>
                        <div class="text-xs text-slate-500">Admin Panel</div>
                    </div>
                </a>

                <div class="hidden sm:flex items-center gap-2">
                   @if(auth()->user()->role === 'admin')
                        <a href="{{ route('admin.dashboard') }}"
                        class="rounded-xl px-4 py-2 text-sm font-medium transition
                        {{ request()->routeIs('admin.dashboard') ? 'bg-violet-50 text-violet-700 ring-1 ring-violet-100' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}">
                            Dashboard
                        </a>

                        <a href="{{ route('users.index') }}"
                        class="rounded-xl px-4 py-2 text-sm font-medium transition
                        {{ request()->routeIs('users.*') ? 'bg-violet-50 text-violet-700 ring-1 ring-violet-100' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}">
                            Users
                        </a>
                    @else
                        <a href="{{ route('dashboard') }}"
                        class="rounded-xl px-4 py-2 text-sm font-medium transition
                        {{ request()->routeIs('dashboard') ? 'bg-violet-50 text-violet-700 ring-1 ring-violet-100' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}">
                            Dashboard
                        </a>
                    @endif
                    </a>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center gap-3 rounded-2xl border border-slate-200 bg-white px-3.5 py-2 shadow-sm transition hover:border-slate-300 hover:bg-slate-50">
                            <div class="flex h-9 w-9 items-center justify-center rounded-full bg-violet-600 text-sm font-semibold text-white">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>

                            <div class="text-left leading-tight">
                                <div class="text-sm font-semibold text-slate-800">{{ Auth::user()->name }}</div>
                                <div class="text-xs text-slate-500">{{ Auth::user()->email }}</div>
                            </div>

                            <svg class="h-4 w-4 text-slate-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            Profile
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Log Out
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <div class="sm:hidden">
                <button @click="open = !open" class="rounded-xl p-2 text-slate-500 hover:bg-slate-100">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>