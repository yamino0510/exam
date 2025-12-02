<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Investor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-end mb-4">
                        <a href="{{ route('investors.sync') }}" style="background-color: #3b82f6; color: white; font-weight: 600; padding: 0.5rem 1rem; border-radius: 0.375rem; text-decoration: none; display: inline-block;">Pull Investor Data</a>&nbsp;&nbsp;
                        <a href="{{ route('investors.create') }}" style="background-color: #3b82f6; color: white; font-weight: 600; padding: 0.5rem 1rem; border-radius: 0.375rem; text-decoration: none; display: inline-block;">Add New Investor</a>
                    </div>
                    <table border="1" cellpadding="5" cellspacing="0">
                        <tr>
                            <th>Investor ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($investors as $investor)
                            <tr>
                                <td>{{ $investor->investor_id }}</td>
                                <td>{{ $investor->name }}</td>
                                <td>{{ $investor->email }}</td>
                                <td>
                                    <a href="{{ route('investors.edit', $investor->id) }}" style="background-color: #10b981; color: white; font-weight: 600; padding: 0.25rem 0.5rem; border-radius: 0.375rem; text-decoration: none; display: inline-block;">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
