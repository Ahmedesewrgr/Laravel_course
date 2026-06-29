{{-- <x-guest-layout title="Signup" bodyClass="page-signup">
    <h1 class="auth-page-title">Signup</h1>

    <form action="" method="post">
        <div class="form-group">
            <input type="email" placeholder="Your Email" />
        </div>
        <div class="form-group">
            <input type="password" placeholder="Your Password" />
        </div>
        <div class="form-group">
            <input type="password" placeholder="Repeat Password" />
        </div>
        <hr />
        <div class="form-group">
            <input type="text" placeholder="First Name" />
        </div>
        <div class="form-group">
            <input type="text" placeholder="Last Name" />
        </div>
        <div class="form-group">
            <input type="text" placeholder="Phone" />
        </div>
        <button class="btn btn-primary btn-login w-full">Register</button>
    </form>


    <x-slot:footerLink>
        Already have an account? -
        <a href="/login"> Click here to login </a>
    </x-slot:footerLink>
</x-guest-layout> --}}
<x-guest-layout title="Signup" bodyClass="page-signup">
    <h1 class="auth-page-title">Signup</h1>

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="email" name="email" placeholder="Your Email" required />
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Your Password" required />
        </div>
        <div class="form-group">
            <input type="password" name="password_confirmation" placeholder="Repeat Password" required />
        </div>
        <hr />
        <div class="form-group">
            <input type="text" name="first_name" placeholder="First Name" required />
        </div>
        <div class="form-group">
            <input type="text" name="last_name" placeholder="Last Name" required />
        </div>
        <div class="form-group">
            <input type="text" name="phone" placeholder="Phone" />
        </div>
        <button type="submit" class="btn btn-primary btn-login w-full">Register</button>
<<<<<<< HEAD

=======
>>>>>>> 5e246acb31178e9f76957c5b91fef062be249b02
    </form>

    <x-slot:footerLink>
        Already have an account? -
        <a href="{{ route('login') }}"> Click here to login </a>
    </x-slot:footerLink>
</x-guest-layout>
