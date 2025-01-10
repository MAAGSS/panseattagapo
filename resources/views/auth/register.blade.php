<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-[#4A7C59]">
        <div class="w-full max-w-md bg-[#4A7C59] rounded-lg shadow-lg">
            <div class="flex justify-center items-center bg-[#4A7C59] rounded-t-lg">
                <div class="w-[120px] h-[120px] bg-[#e17055] rounded-lg relative p-4">
                    <div class="absolute inset-2 bg-[#ffd32a] rounded-lg flex items-center justify-center p-4">
                        <div class="w-[32px] h-[32px] bg-[#4A7C59] rounded"></div>
                    </div>
                </div>
            </div>
            <div class="p-8">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h1 class="text-2xl font-semibold text-center mb-6 text-[#FFD166]">Register Admin</h1>

                    @if ($errors->any())
                        <div class="alert bg-red-500 text-white p-4 rounded-lg mb-4">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

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
                            <option value="admin">Admin</option>
                        </select>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="login-button w-full bg-[#FFD166] text-[#4A7C59] py-4 rounded-lg font-bold transition duration-300 hover:bg-[#ffc107]">
                            Signup
                        </button>
                    </div>

                    <p class="login-message text-center mt-4 text-white">
                        Already registered? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Sign In</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>