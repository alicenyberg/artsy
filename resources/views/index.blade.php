@if ($errors->any())
<p>
    <u>{{ $errors->first() }}</u>
</p>
@endif

<h1>Welcome to Artsy</h1>

<form method="post">
    @csrf
    <div>
        <label for="email">Email</label>
        <input name="email" id="email" type="email" />
    </div>
    <div>
        <label for="password">Password</label>
        <input name="password" id="password" type="password" />
    </div>
    <button type="submit">Login</button>
</form>