<form action="{{ route('search') }}" method="GET">
    <input type="text" name="search" required />
    <button type="submit">Search</button>

</form>



<form action="{{ route('login') }}" method="GET">
    <input type="text" name="email" required />
    <input type="password" name="password" required />
    <button type="submit">Search</button>
</form>