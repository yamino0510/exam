<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Instructions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-4">Exam Instructions</h1>

                    <h2 class="text-xl font-semibold mt-6 mb-3">Overview</h2>
                    <p class="mb-4">This exam requires you to implement a series of operations involving API interactions, data management, and financial calculations.</p>


                    <h2 class="text-xl font-semibold mt-6 mb-3">Remark</h2>
                    <p class="mb-4">
                        You are free to use any tools or libraries, as long as they are compactible with Laravel =.
                    </p>


                    <h2 class="text-xl font-semibold mt-6 mb-3">Tasks</h2>

                    <h3 class="text-lg font-medium mt-4 mb-2">1. Study <a class="text-blue-500" href="https://test.boaal.com">data source</a></h3>

                    <h3 class="text-lg font-medium mt-4 mb-2">2. Perform the following:</h3>
                    <div class="ml-4 border-l-2 border-gray-300 pl-4">
                        <h4 class="text-base font-medium mt-3 mb-2">Data Collection and Storage</h4>
                        <ul class="list-disc pl-6 mb-4">
                            <li>Pull Investor Data from the API endpoint</li>
                            <li>Pull Fund Data from the API endpoint</li>
                            <li>Pull Investor Investment Data from the API endpoint</li>
                            <li>Save all retrieved data to your database</li>
                        </ul>

                        <h4 class="text-base font-medium mt-3 mb-2">Data Update and Submission</h4>
                        <ul class="list-disc pl-6 mb-4">
                            <li>Update investor data according to the requirements</li>
                            <li>Push the updated data back to {url}</li>
                        </ul>
                    </div>

                    <h3 class="text-lg font-medium mt-4 mb-2">3. Draw an Equity Curve</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Using the <a class="text-blue-500" href="{{ asset("sample_data.csv") }}" target="_blank">data</a> given, generate equity against date line chart </li>
                        <li>Include appropriate labels and legends for clarity</li>
                    </ul>

                    <h3 class="text-lg font-medium mt-4 mb-2">4. Calculate Financial Metrics</h3>
                    <div class="ml-4 border-l-2 border-gray-300 pl-4">
                        <h4 class="text-base font-medium mt-3 mb-2">Annual Return</h4>
                        <p class="mb-2">Calculate the annual return based on the following formula:</p>
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-4 rounded shadow-sm">
                            <div class="flex items-center">
                                <div class="font-semibold text-blue-800 mr-2">Annual Return =</div>
                                <div class="flex items-center">
                                    <span class="font-mono">mean(PnL) × 365</span>
                                </div>
                            </div>
                        </div>

                        <h4 class="text-base font-medium mt-3 mb-2">Sharpe Ratio</h4>
                        <p class="mb-2">Calculate the Sharpe Ratio based on the following formula:</p>
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-4 rounded shadow-sm">
                            <div class="flex items-center">
                                <div class="font-semibold text-blue-800 mr-2">Sharpe Ratio =</div>
                                <div class="flex flex-col items-center mx-2">
                                    <div class="border-b border-gray-400 mb-1">
                                        <span class="font-mono">mean(PnL)</span>
                                    </div>
                                    <div>
                                        <span class="font-mono">std.dev(PnL)</span>
                                    </div>
                                </div>
                                <div class="font-mono ml-2">× √365</div>
                            </div>
                        </div>

                        <h4 class="text-base font-medium mt-3 mb-2">Maximum Drawdown</h4>
                        <p class="mb-2">Calculate the Maximum Drawdown based on the following formula:</p>
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-4 rounded shadow-sm">
                            <div class="flex items-center">
                                <div class="font-semibold text-blue-800 mr-2">Maximum Drawdown =</div>
                                <div class="flex items-center">
                                    <span class="font-mono">Max(DD)</span>
                                </div>
                            </div>
                        </div>

                        <h4 class="text-base font-medium mt-3 mb-2">Calmar Ratio</h4>
                        <p class="mb-2">Calculate the Calmar Ratio based on the following formula:</p>
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-4 rounded shadow-sm">
                            <div class="flex items-center">
                                <div class="font-semibold text-blue-800 mr-2">Calmar Ratio =</div>
                                <div class="flex flex-col items-center mx-2">
                                    <div class="border-b border-gray-400 mb-1">
                                        <span class="font-mono">Annual Return</span>
                                    </div>
                                    <div>
                                        <span class="font-mono">|Maximum Drawdown|</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
