<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
            <input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name') }}" required autofocus />
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email -->
        <div class="mt-4">
            <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
            <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') }}" required />
            @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block font-medium text-sm text-gray-700">Password</label>
            <input id="password" class="block mt-1 w-full" type="password" name="password" required />
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation" class="block font-medium text-sm text-gray-700">Confirm Password</label>
            <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
        </div>

        <!-- Role Selection -->
        <div class="mt-4">
            <label for="role" class="block font-medium text-sm text-gray-700">Register as</label>
            <select id="role" name="role" class="block mt-1 w-full" required>
                <option value="staff">Staff</option>
                <option value="admin">Admin</option>
            </select>
        </div>

        <div class="mt-4">
            <button type="submit" class="w-full bg-yellow-500 text-white py-2 px-4 rounded-lg">
                Register
            </button>
        </div>
    </form>
</x-guest-layout>
