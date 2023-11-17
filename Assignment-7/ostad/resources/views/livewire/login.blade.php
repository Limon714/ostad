<div>
    @if (session('success'))

    <h2 style="margin-left: 250px; margin-top:100px"> {{ session('success') }}</h2>
        
    @endif

    @if (session('error'))

    <h2  style="margin-left: 280px; margin-top:100px"> {{ session('error') }}</h2>
        
    @endif


    <form wire:submit='signin' style="margin-left:340px;margin-top:250px">
        <input type="email" wire:model.live='email' id="" placeholder=" Enter your email">
        @error('email')
            <h5>{{ $message }}</h5>
        @enderror
        <input type="password" wire:model.live='password' id="" placeholder=" Enter your password">
        @error('password')
            <h5>{{ $message }}</h5>
        @enderror
        <input type="submit" value="Submit">
    </form>
</div>
