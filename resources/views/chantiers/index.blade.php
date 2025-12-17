@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">

    <h1 class="text-3xl font-semibold mb-6">Liste des chantiers</h1>

    <div class="bg-white shadow rounded-xl overflow-hidden text-center">
        <table class="w-full border-collapse">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-3 text-sm text-gray-800">ID</th>
                    <th class="px-4 py-3 text-sm text-gray-800">ID Client</th>
                    <th class="px-4 py-3 text-sm text-gray-800">Nom Chantier</th>
                    <th class="px-4 py-3 text-sm text-gray-800">Adress Chantier</th>
                    <th class="px-4 py-3 text-sm text-gray-800">Code Postal Chantier</th>
                    <th class="px-4 py-3 text-sm text-gray-800">Ville Chantier</th>
                    <th class="px-4 py-3 text-sm text-gray-800">Conducteur</th>
                    
                </tr>
            </thead>

            <tbody>
                @foreach ($chantiers as $chantier)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $chantier->id }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $chantier->id_client }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $chantier->nom_chantier }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $chantier->adresse_chantier }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $chantier->code_postal_chantier }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $chantier->ville_chantier }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $chantier->conducteur }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
