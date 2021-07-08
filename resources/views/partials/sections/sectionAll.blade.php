<div class="container">
    <caption>Liste des éleves: tous</caption>
    <table class="w-100">
        <tr class="border border-secondary">
            <th>Nom</th>
            <th>Genre</th>
            <th>Email</th>
            <th>Âge</th>
        </tr>
        @foreach ( $students as $student )
        <tr class="border-bottom border-dark {{ ($student->age <= 23 and $student->age >= 22) ? 'bg-primary' : '' }} {{ ($student->age > 24) ? 'bg-success' : '' }}">
            <td>{{$student->nom}}</td>
            <td>{{$student->genre}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->age}}</td>
        </tr>
        @endforeach
    </table>
</div>