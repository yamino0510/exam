<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Graph') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <div class="flex justify-between mb-4">
                        <p>
                            {{ __('Graph') }}
                        </p>

                        <x-button onclick="downloadSampleData()">
                            Download Sample Data
                        </x-button>
                    </div>
                    <div class="flex justify-between mb-4">
                        <canvas id="equityChart" height="120"></canvas>{{-- Graph --}}
                    </div>
                    <div class="flex">
                        <p>{{ __('Equity Over Graph Line Chart')}}</p>
                    </div>
                </div>

                {{-- Metrics Section --}}
                <div class="grid grid-cols-2 gap-4 p-6">
                    <div class="shadow-xl border p-4 rounded-lg">
                        <h1>Annual Return</h1><p>{{ $annualReturn }}%</p>
                    </div>
                    <div class="shadow-xl border p-4 rounded-lg">
                        <h1>Sharpe Ratio</h1><p>{{ $sharpeRatio }}</p>
                    </div>
                    <div class="shadow-xl border p-4 rounded-lg">
                        <h1>Maximum Drawdown</h1><p>{{ $maxDrawdown }}%</p>
                    </div>
                    <div class="shadow-xl border p-4 rounded-lg">
                        <h1>Calmar Ratio</h1><p>{{ $calmarRatio }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Chart.js --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        function downloadSampleData() {
            window.open('{{ asset("sample_data.csv") }}', "_blank");
        }

        const labels = @json($dates);
        const equityData = @json($equity);

        new Chart(document.getElementById('equityChart'), {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Equity Curve',
                    data: equityData,
                    borderWidth: 2,
                    tension: 0.3,
                }]
            }
        });
    </script>

</x-app-layout>
