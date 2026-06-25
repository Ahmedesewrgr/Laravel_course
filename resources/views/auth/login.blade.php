{{-- <x-guest-layout title="Login" bodyClass="login-page">
    <h1 class="auth-page-title">Login</h1>

    <form action="" method="post">
        <div class="form-group">
            <input type="email" placeholder="Your Email" />
        </div>
        <div class="form-group">
            <input type="password" placeholder="Your Password" />
        </div>
        <div class="text-right mb-medium">
            <a href="/password-reset.html" class="auth-page-password-reset">Reset Password</a>
        </div>

        <button class="btn btn-primary btn-login w-full">Login</button>
    </form>

</x-guest-layout> --}}
<x-guest-layout title="Login">
    <h1 class="auth-page-title">Login</h1>

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="email" name="email" placeholder="Your Email" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Your Password" required>
        </div>
        <button class="btn btn-primary w-full">Login</button>
    </form>

    @error('email')
        <p class="text-red-500">{{ $message }}</p>
    @enderror
     <x-slot:footerLink>
        Don't have an account? -
        <a href="/signup"> Click here to create one</a>
    </x-slot:footerLink>
</x-guest-layout>
