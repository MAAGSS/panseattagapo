<<<<<<< HEAD
<x-app-layout>
    <div class="flex min-h-screen bg-cream">
=======
<meta name="csrf-token" content="{{ csrf_token() }}">

<x-app-layout>
<div class="flex min-h-screen bg-cream">
>>>>>>> master
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
<<<<<<< HEAD
=======
                <div>{{ Auth::user()->name }}</div>
>>>>>>> master
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
<<<<<<< HEAD
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
=======
                    
                    <div class="grid grid-cols-7 gap-2 text-center text-green font-medium">
                        
>>>>>>> master
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
<<<<<<< HEAD
                    <p class="text-green">Add bundle features here for managing restaurant bundles.</p>
                </div>
            </section>
        </main>
    </div>
</x-app-layout>
=======
                    <button 
                        class="bg-green-500 text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-green-600 transition duration-200"
                        onclick="openModal('addBundleModal')">
                        <span class="text-2xl">+</span>
                    </button>
                    <div class="flex justify-between items-center mb-4">
                        <div id="bundleList" class="flex flex-row space-x-4 overflow-x-auto p- 8">
                            @foreach ($bundles as $bundle)
                                <div class="flex-none bg-cream p-6 rounded-xl shadow-md flex flex-col items-center" style="width: 300px; margin-right: 16px;">
                                    <img 
                                        src="{{ asset('storage/' . $bundle->image) }}" 
                                        alt="{{ $bundle->name }}" 
                                        class="w-48 h-48 object-cover rounded-lg mb-4"
                                    >
                                    <h4 class="text-green-700 font-bold text-lg mb-4">{{ $bundle->name }}</h4>
                                    
                                    <div class="flex gap-4">
                                        <button class="bg-yellow-400 text-gray-700 px-6 py-2 rounded-full hover:bg-yellow-500 font-medium">
                                            VIEW
                                        </button>
                                        <button class="bg-yellow-400 text-gray-700 px-6 py-2 rounded-full hover:bg-yellow-500 font-medium">
                                            REMOVE
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <div id="addBundleModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
                <div class="bg-white p-6 rounded-lg w-1/3 shadow-lg">
                    <h2 class="text-lg font-bold text-green mb-4">Add/Edit Bundle</h2>
                    <form id="bundleForm">
                        <div class="mb-4">
                            <label for="bundleName" class="block text-gray-700">Name</label>
                            <input
                                type="text"
                                id="bundleName"
                                name="name"
                                class="w-full border border-gray-300 rounded px-3 py-2"
                                required
                            />
                        </div>
                        <div class="mb-4">
                            <label for="bundleDescription" class="block text-gray-700">Description</label>
                            <textarea
                                id="bundleDescription"
                                name="description"
                                class="w-full border border-gray-300 rounded px-3 py-2"
                                rows="4"
                                required
                            ></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="bundleImage" class="block text-gray-700">Image</label>
                            <input
                                type="file"
                                id="bundleImage"
                                name="image"
                                class="w-full border border-gray-300 rounded"
                            />
                        </div>
                        <div class="flex justify-end">
                            <button
                                type="button"
                                class="bg-gray-300 text-gray-700 px-4 py-2 rounded mr-2"
                                onclick="closeModal('addBundleModal')"
                            >
                                Cancel
                            </button>
                            <button
                                type="submit"
                                class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600"
                            >
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- User Management Section -->
            @if(Auth::user()->role === 'admin')
            <section id="staff" class="mb-10">
                <h3 class="text-green text-lg font-bold mb-4">User  Management</h3>
                @if(session('success'))
                <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
                    {{ session('success') }}
                </div>
                @endif
                <div class="bg-light-green p-6 rounded-lg shadow-md">
                    <p class="text-green">Manage your staffs here.</p>
                    <!-- Add User Button -->
<button 
    class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-200"
    onclick="openModal('addUser  Modal')"> <!-- Ensure this matches the modal ID -->
    +
</button>
                    
                    <div class="mt-4">
                        <h4 class="text-green text-md font-bold mb-2">Current Users</h4>
                        <table class="min-w-full bg-white border border-gray-300">
                            <thead>
                                <tr class="bg-light-cream text-green-700">
                                    <th class="py-2 px-4 border-b">ID</th>
                                    <th class="py-2 px-4 border-b">Name</th>
                                    <th class="py-2 px-4 border-b">Email</th>
                                    <th class="py-2 px-4 border-b">Role</th>
                                    <th class="py-2 px-4 border-b">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr class="hover:bg-gray-100">
                                        <td class="py-2 px-4 border-b">{{ $user->id }}</td>
                                        <td class="py-2 px-4 border-b">{{ $user->name }}</td>
                                        <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                                        <td class="py-2 px-4 border-b">{{ $user->role }}</td>
                                        <td class="py-2 px-4 border-b">
                                            <button class="bg-blue-500 text-black px-2 py-1 rounded hover:bg-blue-600 transition duration-200" onclick="editUser ({{ $user->id }})">Edit</button>
                                            <button class="bg-red-500 text-black px-2 py-1 rounded hover:bg-red-600 transition duration-200" onclick="removeUser  ({{ $user->id }})">Remove</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- Add User Modal -->
<div id="addUser  Modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg w-1/3 shadow-lg">
        <h2 class="text-lg font-bold text-green mb-4">Add Staff</h2>
        <form id="userForm"> <!-- Change to use AJAX -->
            @csrf
            <input
                id="name"
                type="text"
                name="name"
                placeholder="Full Name"
                class="login-input block mt-1 w-full p-4 border-2 border-gray-300 rounded-lg mb-4 focus:border-[#4A7C59] transition duration-300"
                value="{{ old('name') }}"
                required
                autofocus
            />
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror

            <input
                id="email"
                type="email"
                name="email"
                placeholder="Email Address"
                class="login-input block mt-4 w-full p-4 border-2 border-gray-300 rounded-lg mb-4 focus:border-[#4A7C59] transition duration-300"
                value="{{ old('email') }}"
                required
            />
            @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror

            <input
                id="password"
                type="password"
                name="password"
                placeholder="Password"
                class="login-input block mt-4 w-full p-4 border-2 border-gray-300 rounded-lg mb-4 focus:border-[#4A7C59] transition duration-300"
                required
            />
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror

            <div class="mt-4">
                <label for="role" class="block font-medium text-sm text-gray-700">Register as</label>
                <select id="role" name="role" class="block mt-1 w-full p-4 border-2 border-gray-300 rounded-lg" required>
                    <option value="staff">Staff</option>
                    <option value="admin">Admin</option> </select>
            </div>

            <div class="mt-4">
                <button type="submit" class="login-button w-full bg-[#FFD166] text-[#4A7C59] py-4 rounded-lg font-bold transition duration-300 hover:bg-[#ffc107]">
                    Signup
                </button>
            </div>

            <div class="flex justify-end mt-4">
            <button type="button" class="bg-gray-300 text-gray-700 px-4 py-2 rounded mr-2" onclick="closeModal('addUser  Modal')"> <!-- Ensure this matches the modal ID -->
                    Cancel
                </button>
            </div>
        </form>
    </div>
</div>
            @endif

        </main>
    </div>
</x-app-layout>

<script>
    function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.remove('hidden'); // Show the modal
    }
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.add('hidden'); // Hide the modal
    }
}

    document.getElementById('bundleForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch('/bundles', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
 },
        })
            .then(response => response.json())
            .then(data => {
                alert('Bundle saved!');
                location.reload(); // Reload to fetch updated data
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Failed to save bundle.');
            });
    });

    document.getElementById('userForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch('{{ route('staff.store') }}', { // Use the correct route for user creation
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(err => { throw new Error(err.errors[Object.keys(err.errors)[0]][0]); });
            }
            return response.json();
        })
        .then(data => {
            alert(data.success); // Display the success message
            closeModal('addUser  Modal'); // Close the modal
            location.reload(); // Reload to fetch updated user list
        })
        .catch (error => {
            console.error('Error:', error);
            alert('Failed to register user: ' + error.message);
        });
    });
</script>
>>>>>>> master
