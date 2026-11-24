<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container">
    <h2>Connexion</h2>

    @if(session('success')) <p class="success">{{ session('success') }}</p> @endif
    @if($errors->any()) <p class="error">{{ $errors->first() }}</p> @endif

    <form method="POST" action="/login">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <button>Se connecter</button>
    </form>
    <br>
    <a href="/register">Pas de compte ? S'inscrire</a>
</div>