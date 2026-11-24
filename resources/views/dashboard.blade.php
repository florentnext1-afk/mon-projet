<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container" style="max-width:500px">
    <h2>Tableau de bord</h2>
    <p>Bonjour, {{ Auth::user()->name }} 👋</p>
    <p>Email : {{ Auth::user()->email }}</p>
    <br>
    <a href="/profile">Voir mon profil</a> | 
    <form method="POST" action="/logout" style="display:inline">
        @csrf
        <button style="width:auto; padding:8px 15px; background:#dc3545">Déconnexion</button>
    </form>
</div>