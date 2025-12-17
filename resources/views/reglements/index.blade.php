@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">

    <h1 class="text-3xl font-semibold mb-6">Liste des factures</h1>

    <div class="bg-white shadow rounded-xl overflow-hidden text-center">
        <table class="w-full border-collapse">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-3 text-sm text-gray-800">ID</th>
                    <th class="px-4 py-3 text-sm text-gray-800">ID Facture</th>
                    <th class="px-4 py-3 text-sm text-gray-800">Date</th>
                    <th class="px-4 py-3 text-sm text-gray-800">Montant</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($reglements as $reglement)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $reglement->id }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $reglement->id_facture }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $reglement->date_reglement }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $reglement->montant_regle }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
