
<h1>Articoli disponibili</h1>
@forelse ($clothes as $key )
    <ul>
        <li>{{$key->ID}}</li>
        <li>{{$key->Tipo}}</li>
        <li>{{$key->Taglia}}</li>
        <li>{{$key->Colore}}</li>
    </ul>
@empty

@endforelse
