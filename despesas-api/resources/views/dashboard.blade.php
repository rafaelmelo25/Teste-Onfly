<x-app-layout>
    <x-slot name="header">
    <div class="dashboard-container py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dashboard-card">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="dashboard-header">
                        {{ __('Dashboard') }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    </x-slot>

    <!-- <div class="dashboard-container py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dashboard-card">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> -->
</x-app-layout>

<style>
    .dashboard-header {
        font-size: 1.25rem;
        font-weight: 600;
        color: #4a5568;
        margin: 0;
    }

    .dashboard-container {
        padding-top: 3rem;
        padding-bottom: 3rem;
    }

    .dashboard-card {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: 1px solid #e2e8f0;
    }

    .dashboard-card .p-6 {
        padding: 1.5rem;
    }
</style>
