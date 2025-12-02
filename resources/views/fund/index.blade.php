<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fund') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-end mb-4">
                        <a href="{{ route('funds.sync') }}" style="background-color: #3b82f6; color: white; font-weight: 600; padding: 0.5rem 1rem; border-radius: 0.375rem; text-decoration: none; display: inline-block;">Pull Fund Data</a>
                    </div>
                    <table border="1" cellpadding="5" cellspacing="0">
                        <tr>
                            <th>Fund ID</th>
                            <th>Name</th>
                            <th>Category</th>
                        </tr>
                        @foreach ($funds as $fund)
                            <tr>
                                <td>{{ $fund->fund_id }}</td>
                                <td>{{ $fund->fund_name }}</td>
                                <td>{{ $fund->category }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
