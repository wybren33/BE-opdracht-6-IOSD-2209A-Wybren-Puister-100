<x-app-layout>

    <head>


        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />


    </head>

    <table>

        <th>Barcode</th>
        <th>Naam</th>
        <th>Verpakkingseenheid</th>
        <th>Aantal aanwezig</th>
        <th>Allergene info</th>
        <th>leverantier info</th>

        @foreach ($products as $product)
        <tr>
            <td>{{ $product->barcode }}</td>
            <td>{{ $product->naam }}</td>
            <td>{{ $product->magazijn->verpakkings_eenheid }}</td>
            <td>{{ $product->magazijn->aantal_aanwezig ?? '✗' }}</td>
            <td>
                @if($product->productperallergeens->count() > 0)
                <a href="{{ route('allergenen.show', $product->id) }}">&#10004;</a> <!-- Dit is een vinkje -->
                @else
                <span>&#10006;</span> <!-- Dit is een kruisje -->
                @endif
            </td>
            <td></td>
        </tr>
        @endforeach
    </table>

</x-app-layout>