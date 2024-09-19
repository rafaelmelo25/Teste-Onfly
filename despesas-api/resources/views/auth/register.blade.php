<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="logo" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="registration-form-container">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="form-group">
                    <label for="name" class="form-label">{{ __('Name') }}</label>
                    <input id="name" class="form-input" type="text" name="name" :value="old('name')" required autofocus />
                </div>

                <!-- Email Address -->
                <div class="form-group mt-4">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input id="email" class="form-input" type="email" name="email" :value="old('email')" required />
                </div>

                <!-- Password -->
                <div class="form-group mt-4">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" class="form-input" type="password" name="password" required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="form-group mt-4">
                    <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                    <input id="password_confirmation" class="form-input" type="password" name="password_confirmation" required />
                </div>

                <div class="form-actions mt-4">
                    <a class="login-link" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button class="submit-button ml-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>

<style>
    .logo {
        width: 80px;
        height: 80px;
        fill: #4a5568;
    }

    .registration-form-container {
        max-width: 400px;
        margin: 0 auto;
        padding: 2rem;
        border-radius: 8px;
        background: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: 1px solid #e2e8f0;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-label {
        display: block;
        font-weight: bold;
        margin-bottom: 0.5rem;
        color: #333;
    }

    .form-input {
        width: 100%;
        padding: 0.75rem;
        border-radius: 4px;
        border: 1px solid #e2e8f0;
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    .form-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .login-link {
        color: #3182ce;
        text-decoration: none;
        font-size: 0.875rem;
    }

    .login-link:hover {
        text-decoration: underline;
    }

    .submit-button {
        background-color: #3182ce;
        color: #fff;
        padding: 0.75rem 1.25rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1rem;
    }

    .submit-button:hover {
        background-color: #2b6cb0;
    }
</style>
