@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">

    <h1 class="text-3xl font-semibold mb-6">Liste des factures</h1>

    <div class="bg-white shadow rounded-xl overflow-hidden text-center">
        <table class="w-full border-collapse">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-3 text-sm text-gray-800">ID</th>
                    <th class="px-4 py-3 text-sm text-gray-800">ID Client</th>
                    <th class="px-4 py-3 text-sm text-gray-800">ID Chantier</th>
                    <th class="px-4 py-3 text-sm text-gray-800">Numero situation</th>
                    <th class="px-4 py-3 text-sm text-gray-800">Numero Pv</th>
                    <th class="px-4 py-3 text-sm text-gray-800">Date</th>
                    <th class="px-4 py-3 text-sm text-gray-800">Sous Total</th>
                    <th class="px-4 py-3 text-sm text-gray-800">Montant Facture</th>
                    <th class="px-4 py-3 text-sm text-gray-800">Echeance</th>
                    <th class="px-4 py-3 text-sm text-gray-800">Affacturage</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($factures as $facture)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $facture->id }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $facture->id_client }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $facture->id_chantier }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $facture->numero_situation }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $facture->pv_numero }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $facture->date_facture }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $facture->sous_total }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $facture->montant_facture }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $facture->echeance }}</td>
                        <td class="px-4 py-3 text-sm text-gray-800">{{ $facture->affacturage == 1 ? 'Oui' : 'Non' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
