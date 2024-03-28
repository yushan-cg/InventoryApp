<x-layout>
    <x-slot name="heading">
        Current Inventory
    </x-slot>

    <div class="row">

        <div class="col-sm-1">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProductModal">
            Add</button>
        </div>
        <div class="col-sm-1">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
            Edit</button>
        </div>

        <x-modal-form 
            modalId="addProductModal" 
            modalTitle="Add Product" 
            formId="addProductForm" 
            formAction="{{ route('products.store') }}" 
            submitButton="Add">
            <!-- Form fields -->
            <!-- Product Name -->
            <div class="form-group">
                <label for="inputName">Product Name</label>
                <input type="text" class="form-control" name="ProductName" id="inputName" placeholder="Enter name" value="{{ old('Name') }}">
                @error('ProductName')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <!-- Part Number -->
            <div class="form-group">
                <label for="inputPartNumber">Part Number</label>
                <input type="text" class="form-control" name="PartNumber" id="inputPartNumber" placeholder="Enter part number" value="{{ old('PartNumber') }}">
                @error('PartNumber')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <!-- Label -->
            <div class="form-group">
                <label for="inputLabel">Label</label>
                <input type="text" class="form-control" name="ProductLabel" id="inputLabel" placeholder="Enter label" value="{{ old('Label') }}">
                @error('Label')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <!-- Repeat this structure for each field -->
            <!-- Starting Inventory, Inventory Received, Inventory Shipped, Inventory On Hand, Minimum Required -->
            <div class="form-group">
                <label for="inputStartingInventory">Starting Inventory</label>
                <input type="number" class="form-control" name="StartingInventory" id="inputStartingInventory" placeholder="Enter starting inventory" value="{{ old('StartingInventory') }}">
                @error('StartingInventory')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="inputInventoryReceived">Inventory Received</label>
                <input type="number" class="form-control" name="InventoryReceived" id="inputInventoryReceived" placeholder="Enter inventory received" value="{{ old('InventoryReceived') }}">
                @error('InventoryReceived')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="inputInventoryShipped">Inventory Shipped</label>
                <input type="number" class="form-control" name="InventoryShipped" id="inputInventoryShipped" placeholder="Enter inventory shipped" value="{{ old('InventoryShipped') }}">
                @error('InventoryShipped')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="inputInventoryOnHand">Inventory On Hand</label>
                <input type="number" class="form-control" name="InventoryOnHand" id="inputInventoryOnHand" placeholder="Enter inventory on hand" value="{{ old('InventoryOnHand') }}">
                @error('InventoryOnHand')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="inputMinimumRequired">Minimum Required</label>
                <input type="number" class="form-control" name="MinimumRequired" id="inputMinimumRequired" placeholder="Enter minimum required" value="{{ old('MinimumRequired') }}">
                @error('MinimumRequired')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
        </x-modal-form>


        <div>
            <div class="col-sm-12 py-6">
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
        </div>
        
    </div>
</x-layout>