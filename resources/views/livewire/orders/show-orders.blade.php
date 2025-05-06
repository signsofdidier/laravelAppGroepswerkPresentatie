<div>
    <div class="p-6">
        <h2 class="text-2xl font-bold mb-4">Mijn bestellingen</h2>

        @if ($orders->isEmpty())
            <p>Je hebt nog geen bestellingen.</p>
        @else
            <table class="w-full border-collapse table-auto">
                <thead class="bg-gray-100 dark:bg-zinc-700 text-left">
                <tr>
                    <th class="p-2">Datum</th>
                    <th class="p-2">Plan</th>
                    <th class="p-2">Bedrag</th>
                    <th class="p-2">Transactie ID</th>
                    <th class="p-2">Status</th>
                    <th class="p-2">Acties</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($orders as $order)
                    <tr class="border-b">
                        <td class="p-2">{{ $order->created_at->format('Y-m-d H:i') }}</td>
                        <td class="p-2">{{ $order->plan->name ?? '—' }}</td>
                        <td class="p-2">€{{ number_format($order->amount, 2) }}</td>
                        <td class="p-2">{{ $order->stripe_transaction_id }}</td>
                        <td class="p-2">{{ ucfirst($order->status) }}</td>
                        <td class="p-2">
                            <a href="{{ route('orders.download', $order->id) }}"
                               class="text-blue-600 hover:text-blue-800"
                               title="Download factuur">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>

</div>
