<div class="h-full flex flex-col items-center justify-center">
    <form action="login" method="POST">
        <h1>Log In</h1>
        <div>
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Log In</button>
        <a href="/register">I don't have an account</a>
    </form>
</div>

<!-- class="flex flex-col gap-4 bg-white p-6 rounded shadow-md" -->