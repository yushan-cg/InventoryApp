<x-layout heading="Outgoing Orders">
    <h2 class="font-semibold text-gray-700">Outgoing Orders</h2>
    
    <table class="table">
        <thead>
            <tr>
                <th>Order Date&nbsp;&nbsp;</th>
                <th>Product&nbsp;&nbsp;</th>
                <th>Number Shipped&nbsp;&nbsp;</th>
                <th>First&nbsp;&nbsp;</th>
                <th>Last&nbsp;&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                @foreach ($orders as $order)
                    @if ($order->ProductId === $product->id)
                        <!-- Display purchase data -->
                        <tr>
                            <td>{{ $order->OrderDate }}&nbsp;</td>
                            <td>{{ $product->ProductName }} - {{ $product->PartNumber }}&nbsp;</td>
                            <td>{{ $order->NumberShipped }}&nbsp;</td>
                            <td>{{ $order->First  }}&nbsp;</td>
                            <td>{{ $order->Last  }}&nbsp;</td>
                        </tr>
                    @endif
                @endforeach
            @endforeach
        </tbody>
    </table>
</x-layout>