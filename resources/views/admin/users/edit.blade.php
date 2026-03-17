<x-app-layout>
    <x-slot name="header">
        <div class="flex items-end justify-between gap-6">
            <div>
                <p class="text-sm font-medium text-violet-600">Users</p>
                <h1 class="mt-1 text-2xl font-bold tracking-tight text-slate-900">Edit User</h1>
                <p class="mt-1 text-sm text-slate-500">
                    Update account details and permissions.
                </p>
            </div>

            <a href="{{ route('users.index') }}"
               class="inline-flex h-11 items-center justify-center rounded-xl border border-slate-300 bg-white px-5 text-sm font-medium text-slate-700 transition hover:bg-slate-50">
                Back to Users
            </a>
        </div>
    </x-slot>

    <div class="mx-auto max-w-5xl">
        <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <div class="border-b border-slate-200 px-8 py-6">
                <h2 class="text-xl font-semibold text-slate-900">Edit {{ $user->name }}</h2>
                <p class="mt-1 text-sm text-slate-500">
                    Change user information and update the assigned role.
                </p>
            </div>

            <div class="p-8">
                @if ($errors->any())
                    <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 px-4 py-4">
                        <div class="mb-2 text-sm font-semibold text-red-700">
                            Please fix the following errors:
                        </div>
                        <ul class="list-disc space-y-1 pl-5 text-sm text-red-600">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('users.update', $user) }}" class="space-y-8">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label for="name" class="mb-2 block text-sm font-semibold text-slate-700">
                                Full Name
                            </label>
                            <input
                                id="name"
                                type="text"
                                name="name"
                                value="{{ old('name', $user->name) }}"
                                class="h-11 w-full rounded-xl border-slate-300 bg-white px-4 text-sm text-slate-900 shadow-sm placeholder:text-slate-400 focus:border-violet-500 focus:ring-violet-500"
                            >
                        </div>

                        <div>
                            <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">
                                Email Address
                            </label>
                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email', $user->email) }}"
                                class="h-11 w-full rounded-xl border-slate-300 bg-white px-4 text-sm text-slate-900 shadow-sm placeholder:text-slate-400 focus:border-violet-500 focus:ring-violet-500"
                            >
                        </div>

                        <div class="md:col-span-2">
                            <label for="role" class="mb-2 block text-sm font-semibold text-slate-700">
                                Role
                            </label>
                            <select
                                id="role"
                                name="role"
                                class="h-11 w-full rounded-xl border-slate-300 bg-white px-4 text-sm text-slate-900 shadow-sm focus:border-violet-500 focus:ring-violet-500"
                            >
                                <option value="user" {{ old('role', $user->role) === 'user' ? 'selected' : '' }}>User</option>
                                <option value="admin" {{ old('role', $user->role) === 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>

                            <p class="mt-2 text-xs text-slate-500">
                                Be careful when granting admin access.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center justify-end gap-3 border-t border-slate-200 pt-6">
                        <a href="{{ route('users.index') }}"
                           class="inline-flex h-11 items-center justify-center rounded-xl border border-slate-300 bg-white px-5 text-sm font-medium text-slate-700 transition hover:bg-slate-50">
                            Cancel
                        </a>

                        <button
                            type="submit"
                            class="inline-flex h-11 items-center justify-center rounded-xl bg-violet-600 px-5 text-sm font-semibold text-white shadow-sm transition hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-violet-500 focus:ring-offset-2"
                        >
                            Update User
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>