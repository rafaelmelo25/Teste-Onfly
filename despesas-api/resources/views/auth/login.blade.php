<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="logo" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="login-form-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input id="email" class="form-input" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <!-- Password -->
                <div class="form-group mt-4">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" class="form-input" type="password" name="password" required autocomplete="current-password" />
                </div>

                <!-- Remember Me -->
                <div class="form-group mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                        <span class="ml-2">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="form-actions mt-4">
                    @if (Route::has('password.request'))
                        <a class="forgot-password" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <button type="submit" class="submit-button">
                        {{ __('Log in') }}
                    </button>
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

    .login-form-container {
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

    .form-checkbox {
        width: 1rem;
        height: 1rem;
        border: 1px solid #e2e8f0;
        border-radius: 4px;
    }

    .form-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .forgot-password {
        color: #3182ce;
        text-decoration: none;
        font-size: 0.875rem;
    }

    .forgot-password:hover {
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
