<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container">
    <h2>Inscription</h2>

    @if($errors->any())
        <p class="error">{{ $errors->first() }}</p>
    @endif

    <form method="POST" action="/register">
        @csrf
        <input type="text" name="name" placeholder="Nom" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <input type="password" name="password_confirmation" placeholder="Confirme mot de passe" required>
        <button>S'inscrire</button>
    </form>
    <br>
    <a href="/login">Déjà un compte ? Se connecter</a>
</div>