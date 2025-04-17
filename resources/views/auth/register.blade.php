<x-layout>
  <h1>Reģistrēties</h1>

    <form method="POST" action="{{ route('register') }}">
    @csrf
   
    @if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif
<div>
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
    </div>

    <div>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
    </div>

    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
    </div>

    <button type="submit">Register</button>
</form>
</x-layout>