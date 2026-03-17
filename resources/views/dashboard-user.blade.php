<x-app-layout>
    <x-slot name="header">
        <div>
            <p class="text-sm font-semibold text-violet-600">Dashboard</p>
            <h1 class="mt-1 text-3xl font-bold tracking-tight text-slate-900">
                User Dashboard
            </h1>
            <p class="mt-2 text-sm text-slate-500">
                Welcome back to your account.
            </p>
        </div>
    </x-slot>

    <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm">
        <h2 class="text-xl font-semibold text-slate-900">
            Hello, {{ auth()->user()->name }}
        </h2>
        <p class="mt-2 text-sm text-slate-500">
            You are logged in as a regular user.
        </p>
    </div>
</x-app-layout>