<x-layout>
    <x-slot:heading>
        Current Inventory
    </x-slot>
    <div>
    <h2 class="font-semibold text-gray-700">Products</h2>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Part Number</th>
                    <th>Label</th>
                    <th>Starting Inventory</th>
                    <th>Inventory Received</th>
                    <th>Inventory Shipped</th>
                    <th>Inventory on Hand</th>
                    <th>Minimum Required</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
                <tr>
                    <td>{{ $product['ProductName'] }}</td>
                    <td>{{ $product['PartNumber'] }}</td>
                    <td>{{ $product['ProductLabel'] }}</td>
                    <td>{{ $product['StartingInventory'] }}</td>
                    <td>{{ $product['InventoryReceived'] }}</td>
                    <td>{{ $product['InventoryShipped'] }}</td>
                    <td>{{ $product['InventoryOnHand'] }}</td>
                    <td>{{ $product['MinimumRequired'] }}</td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h2 class="font-semibold text-gray-700">Incoming Purchases</h2>
        <small class="hidden">Show selected product's incoming purchase(s)</small>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Purchase Date&nbsp;&nbsp;</th>
                    <th>Product&nbsp;&nbsp;</th>
                    <th>Number Received&nbsp;&nbsp;</th>
                    <th>Supplier&nbsp;&nbsp;</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="col-sm-6">
    <h2 class="font-semibold text-gray-700">Outgoing Orders</h2>
        <small class="hidden">Show selected product's outgoing order(s)</small>
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
        </table>
    </div>
</x-layout>