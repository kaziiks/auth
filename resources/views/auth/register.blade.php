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
    <label for="first_name">First name:</label>
  <input type="text" name="first_name" required><br><br>
  <label for="last_name">Last name:</label>
  <input type="text" name="last_name" required><br><br>
  <label for="email">email</label>
  <input type="email" name="email" required><br><br>
  <label for="password">password</label>
  <input type="text" name="password" required><br><br>
  <label for="password">password confirmation</label>
  <input type="text" name="password_confirmation" required><br><br>
  <input type="submit" value="Submit">
    </form>
</x-layout>