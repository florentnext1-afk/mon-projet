<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container">
    <h2>Mon profil</h2>

    <p style="text-align:left"><b>Nom :</b> {{ Auth::user()->name }}</p>
    <p style="text-align:left"><b>Email :</b> {{ Auth::user()->email }}</p>
    <p style="text-align:left"><b>Inscrit le :</b> {{ Auth::user()->created_at->format('d/m/Y') }}</p>

    <br>
    <a href="/dashboard">⬅ Retour au tableau de bord</a>
    <br><br>
    <form method="POST" action="/logout">
        @csrf
        <button style="background:#dc3545">Déconnexion</button>
    </form>
</div>
