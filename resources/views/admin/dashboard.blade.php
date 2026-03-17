<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-5 lg:flex-row lg:items-end lg:justify-between">
            <div>
                <p class="text-sm font-semibold text-violet-600">Overview</p>
                <h1 class="mt-1 text-3xl font-bold tracking-tight text-slate-900">
                    Admin Dashboard
                </h1>
                <p class="mt-2 text-sm text-slate-500">
                    Manage users, roles and account activity from one place.
                </p>
            </div>

            <a href="{{ route('users.create') }}"
               class="inline-flex h-12 items-center justify-center rounded-2xl bg-violet-600 px-6 text-sm font-semibold text-white shadow-sm transition hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-violet-500 focus:ring-offset-2">
                Create User
            </a>
        </div>
    </x-slot>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
        <div class="rounded-3xl border border-slate-200 bg-white p-7 shadow-sm">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">Total Users</p>
                    <p class="mt-4 text-4xl font-bold tracking-tight text-slate-900">{{ $totalUsers }}</p>
                </div>
                <div class="rounded-2xl bg-violet-50 p-3 text-violet-600">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 20h5V4H2v16h5m10 0v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6m10 0H7" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="rounded-3xl border border-slate-200 bg-white p-7 shadow-sm">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">Admins</p>
                    <p class="mt-4 text-4xl font-bold tracking-tight text-slate-900">{{ $adminCount }}</p>
                </div>
                <div class="rounded-2xl bg-sky-50 p-3 text-sky-600">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422A12.083 12.083 0 0112 20.055a12.083 12.083 0 01-6.16-9.477L12 14z" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="rounded-3xl border border-slate-200 bg-white p-7 shadow-sm">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">New Users</p>
                    <p class="mt-4 text-4xl font-bold tracking-tight text-slate-900">{{ $newUsers }}</p>
                </div>
                <div class="rounded-2xl bg-amber-50 p-3 text-amber-600">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M18 9v6m3-3h-6M5 19a4 4 0 110-8 5 5 0 019.9-1A4.5 4.5 0 0119.5 19H5z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>