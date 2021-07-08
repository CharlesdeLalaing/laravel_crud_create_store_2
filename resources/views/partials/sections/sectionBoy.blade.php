<div class="container">
    <caption>Liste des éleves: hommes</caption>
    <table class="w-100">
        <tr class="border border-secondary">
            <th>Nom</th>
            <th>Genre</th>
            <th>Email</th>
            <th>Âge</th>
        </tr>
        @foreach ( $guys as $guy )
        <tr class="border-bottom border-dark {{ ($guy->age <= 23 and $guy->age >= 22) ? 'bg-primary' : '' }} {{ ($guy->age > 24) ? 'bg-success' : '' }}">
            <td>{{$guy->nom}}</td>
            <td>{{$guy->genre}}</td>
            <td>{{$guy->email}}</td>
            <td>{{$guy->age}}</td>
        </tr>
        @endforeach
    </table>
</div>