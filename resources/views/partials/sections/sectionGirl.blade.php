<div class="container">
    <caption>Liste des éleves: femmes</caption>
    <table class="w-100">
        <tr class="border border-secondary">
            <th>Nom</th>
            <th>Genre</th>
            <th>Email</th>
            <th>Âge</th>
        </tr>
        @foreach ( $girls as $girl )
        <tr class="border-bottom border-dark {{ ($girl->age <= 23 and $girl->age >= 22) ? 'bg-primary' : '' }} {{ ($girl->age > 24) ? 'bg-success' : '' }}">
            <td>{{$girl->nom}}</td>
            <td>{{$girl->genre}}</td>
            <td>{{$girl->email}}</td>
            <td>{{$girl->age}}</td>
        </tr>
        @endforeach
    </table>
</div>