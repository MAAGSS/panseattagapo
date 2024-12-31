<x-app-layout>
    <div class="flex min-h-screen bg-cream">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-light-cream flex flex-col p-6">
            <h1 class="text-green text-2xl font-bold mb-6">PansEat Tagapo</h1>
            <nav class="space-y-4">
                <a href="#calendar" class="flex items-center space-x-2 text-orange font-medium hover:underline">
                    <span>●</span> <span>Calendar</span>
                </a>
                <a href="#logs" class="flex items-center space-x-2 text-green font-medium hover:underline">
                    <span>●</span> <span>Logs</span>
                </a>
                <a href="#requests" class="flex items-center space-x-2 text-green font-medium hover:underline">
                    <span>●</span> <span>Requests</span>
                </a>
                <a href="#bundles" class="flex items-center space-x-2 text-green font-medium hover:underline">
                    <span>●</span> <span>Bundles</span>
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <!-- Header -->
            <header class="flex items-center justify-between mb-6">
                <h2 class="text-green text-xl font-bold">Dashboard</h2>
                <a href="{{ route('logout') }}" 
                    class="text-yellow font-medium hover:underline"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </header>

            <!-- Calendar Section -->
            <section id="calendar" class="mb-10">
                <h3 class="text-orange text-lg font-bold mb-4">Calendar</h3>
                <div class="bg-yellow p-6 rounded-lg shadow-md">
                    <h4 class="text-red text-2xl font-bold mb-4">2024</h4>
                    <div class="grid grid-cols-7 gap-2 text-center text-green font-medium">
                        <div>Sunday</div>
                        <div>Monday</div>
                        <div>Tuesday</div>
                        <div>Wednesday</div>
                        <div>Thursday</div>
                        <div>Friday</div>
                        <div>Saturday</div>
                        <!-- Calendar Placeholder -->
                        <div class="col-span-7 bg-light-cream rounded-lg p-4 text-orange">
                            3:00 PM – Birthday
                        </div>
                    </div>
                </div>
            </section>

            <!-- Logs Section -->
            <section id="logs" class="mb-10">
                <h3 class="text-green text-lg font-bold mb-4">Logs</h3>
                <div class="bg-light-green p-6 rounded-lg shadow-md">
                    <p class="text-green">Logs feature will track events here.</p>
                </div>
            </section>

            <!-- Requests Section -->
            <section id="requests" class="mb-10">
                <h3 class="text-green text-lg font-bold mb-4">Requests</h3>
                <div class="bg-light-green p-6 rounded-lg shadow-md">
                    <p class="text-green">This is where users can see and manage requests.</p>
                </div>
            </section>

            <!-- Bundles Section -->
            <section id="bundles" class="mb-10">
                <h3 class="text-green text-lg font-bold mb-4">Bundles</h3>
                <div class="bg-light-green p-6 rounded-lg shadow-md">
                    <p class="text-green">Add bundle features here for managing restaurant bundles.</p>
                </div>
            </section>
        </main>
    </div>
</x-app-layout>
