<x-app-layout>
    <div class="w-full px-4 py-8 mx-auto sm:px-6 lg:px-8 max-w-9xl">
        <div class="mb-8 bg-white rounded-sm shadow-lg">
            <div class="flex flex-col md:flex-row md:-mr-px">

                <!-- Welcome banner -->
                {{-- <x-dashboard.welcome-banner /> --}}

                <x-dashboard.empty-state title="No Kubes Found" model="Kubes"
                    heading="Create a new highly available Kubernetes cluster" subheading="Craft your next idea without worrying about speed, security or pricing." />

            </div>
        </div>

    </div>
</x-app-layout>
