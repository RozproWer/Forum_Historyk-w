<x-app-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <section class="px-6">
        <div class="overflow-hidden border-b border-gray-200">
            <table class="min-w-full">
                <thead class="bg-blue-500">
                    <tr>
                        <x-table.head>Name</x-table.head>
                        <x-table.head>Bio</x-table.head>
                        <x-table.head class="text-center">Role</x-table.head>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200 divide-solid">
                @foreach($users as $user)
                    <tr>
                        <x-table.data>
                            <div>{{ $user->name }}</div>
                        </x-table.data>
                        <x-table.data>
                            <div>{{ $user->bio }}</div>
                        </x-table.data>
                        <x-table.data>
                            <div class="px-2 py-1 text-center text-gray-700 bg-green-200 rounded">
                            {{ $user->roles() }}
                            </div>
                        </x-table.data>
                    </tr>
                 @endforeach
                </tbody>

            </table>
        </div>
    </section>


</x-app-layout>
