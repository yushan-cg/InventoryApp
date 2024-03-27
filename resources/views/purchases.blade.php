<x-layout heading="Incoming Purchases">
    <h2 class="font-semibold text-gray-700">Incoming Purchases</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Date of Purchase&nbsp;&nbsp;</th>
                <th>Product&nbsp;&nbsp;</th>
                <th>Number Received&nbsp;&nbsp;</th>
                <th>Supplier</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                @php
                    $firstPurchase = true; // Flag to check if it's the first purchase for the product
                    $purchaseCount = \App\Models\Purchase::where('ProductId', $product->id)->count();
                @endphp

                @foreach ($purchases as $purchase)
                    @if ($purchase->ProductId === $product->id)
                        @if ($firstPurchase)
                            <!-- Display the product name only for the first purchase -->
                                <tr>
                                    <td colspan='2'>{{ $product->ProductName }} - {{ $product->PartNumber }} - {{ $purchaseCount }} Item[s]</td>
                                </tr>
                            @php 
                                $firstPurchase = false; // Set flag to false after displaying the product name once
                            @endphp
                        @endif
                        <!-- Display purchase data -->
                        <tr>
                            <td>{{ $purchase->PurchaseDate }}&nbsp;</td>
                            <td>{{ $product->ProductName }} - {{ $product->PartNumber }}&nbsp;</td>
                            <td>{{ $purchase->NumberReceived }}&nbsp;</td>
                            <td>{{ $purchase->SupplierId }}&nbsp;</td>
                        </tr>
                    @endif
                @endforeach
            @endforeach
        </tbody>
    </table>
</x-layout>
