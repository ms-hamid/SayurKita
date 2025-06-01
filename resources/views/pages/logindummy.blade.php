<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h2>Login</h2>
    <form method="POST" action="/logindummy">
        @csrf
        <label>Username:</label>
        <input type="text" name="username" value="{{ old('username') }}" required><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        @error('username')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Login</button>
    </form>
</body>
</html>