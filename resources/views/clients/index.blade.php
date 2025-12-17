@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">

    <h1 class="text-3xl font-semibold mb-6">Liste des clients</h1>

    <div class="bg-white shadow rounded-xl overflow-hidden text-center">
        <table class="w-full border-collapse">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-3 text-sm font-medium text-gray-700">ID</th>
                    <th class="px-4 py-3 text-sm font-medium text-gray-700">Civilité</th>
                    <th class="px-4 py-3 text-sm font-medium text-gray-700">Nom</th>
                    <th class="px-4 py-3 text-sm font-medium text-gray-700">Adresse</th>
                    <th class="px-4 py-3 text-sm font-medium text-gray-700">Code Postal</th>
                    <th class="px-4 py-3 text-sm font-medium text-gray-700">Ville</th>
                    <th class="px-4 py-3 text-sm font-medium text-gray-700">Téléphone</th>
                    <th class="px-4 py-3 text-sm font-medium text-gray-700">TVA Intra</th>
                    <th class="px-4 py-3 text-sm font-medium text-gray-700">RCS</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($clients as $client)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $client->id }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $client->civilite }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $client->nom_client }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $client->adresse_client }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $client->code_postal_client }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $client->ville_client }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $client->tel }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $client->tva_intra }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $client->rcs }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
