<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Catatan Poin Santri</title>
    <link href="/css/style.css" rel="stylesheet">

</head>
<body>
    <div class="login-container">
        <h2>Selamat Datang</h2>
        <h4>Catatan Poin Santri</h4> 
        
        <!-- Form harus menggunakan method POST dan route Laravel -->
        <form method="POST" action="{{ route('login') }}">
            @csrf <!-- Token CSRF wajib di Laravel -->
            
            <div>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required />
            </div>
            
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required />
            </div>
            
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>