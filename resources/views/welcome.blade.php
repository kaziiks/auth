<x-layout>
@auth
  <p>Sveiks, {{ Auth::user()->first_name}}</p>
  <form method="POST" action="{{ route('logout') }}">
  @csrf
  <button type="submit">izlogoties</button> 
  </form>
@endauth
</form>

@guest
  <p>Sveiks, viesi!</p>
@endguest
</x-layout>