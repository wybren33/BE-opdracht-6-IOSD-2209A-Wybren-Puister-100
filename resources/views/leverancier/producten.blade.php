<x-app-layout>

    <head>

        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />

    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Geleverde Producten') }}
        </h2>
    </x-slot>

    <h2 class="center">Naam leverancier: {{ $leveranciers->naam }}</h2>
    <h2 class="center">Contactpersoon leverancier: {{ $leveranciers->contactpersoon }}</h2>
    <h2 class="center">Leverancier nummer: {{ $leveranciers->leverancier_nummer }}</h2>
    <h2 class="center">Mobiel: {{ $leveranciers->mobiel }}</h2>

    <table>
        <thead>
            <th>Naam Product</th>
            <th>Aantal in magazijn</th>
            <th>Verpakkingseenheid</th>
            <th>Laatste levering</th>
            <th>Nieuwe levering</th>
        </thead>
        <tbody>
            @foreach($leveranciers->productPerLeveranciers as $perProduct)
            <tr>
                <td>{{ $perProduct->product->naam }}</td>
                <td>{{ $perProduct->product->magazijn->aantal_aanwezig }}</td>
                <td>{{ $perProduct->product->magazijn->verpakkings_eenheid }} kg</td>
                <td>{{ $perProduct->datum_levering }}</td>
                <td>{{ $perProduct->datum_eerstvolgende_levering }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="center">
        <x-primary-button style="margin-top: 1rem;" class="center">
            <a href="{{ route('leverancier') }}">Terug</a>
        </x-primary-button>
        <x-primary-button style="margin-top: 1rem; margin-left: 1rem;" class="center">
            <a href="{{ route('home') }}">Home</a>
        </x-primary-button>
    </div>
</x-app-layout>