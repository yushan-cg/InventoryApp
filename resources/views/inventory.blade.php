<x-layout>
    <x-slot name="heading">
        Current Inventory
    </x-slot>

    <div class="row">

        <div class="col-sm-2">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addProductModal">
                Add Product
            </button>
        </div>        

        <!-- Add product form-->
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
                            <th></th>
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
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProductModal{{ $product->id }}" 
                                        onclick="editProduct('{{ json_encode($product)}}')">
                                    Edit
                                </button>
                                <!-- Edit product form-->
                                <x-modal-form 
                                    modalId="editProductModal{{ $product->id }}" 
                                    modalTitle="Edit Product" 
                                    formId="editProductForm{{ $product->id }}" 
                                    formAction="{{ route('products.update', $product) }}" 
                                    submitButton="Edit">
                                    @method('PATCH')
                                    <!-- Form fields -->
                                    <!-- Product Name -->
                                    <div class="form-group">
                                        <label for="inputName2">Product Name</label>
                                        <input type="text" class="form-control" name="ProductName" id="inputName2" placeholder="Enter name" value="{{ $product->ProductName }}">
                                        @error('ProductName')
                                            <div class="text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Part Number -->
                                    <div class="form-group">
                                        <label for="inputPartNumber2">Part Number</label>
                                        <input type="text" class="form-control" name="PartNumber" id="inputPartNumber2" placeholder="Enter part number" value="{{ $product->PartNumber }}">
                                        @error('PartNumber')
                                            <div class="text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Label -->
                                    <div class="form-group">
                                        <label for="inputLabel2">Label</label>
                                        <input type="text" class="form-control" name="ProductLabel" id="inputLabel2" placeholder="Enter label" value="{{ $product->ProductLabel }}">
                                        @error('Label')
                                            <div class="text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Repeat this structure for each field -->
                                    <!-- Starting Inventory, Inventory Received, Inventory Shipped, Inventory On Hand, Minimum Required -->
                                    <div class="form-group">
                                        <label for="inputStartingInventory2">Starting Inventory</label>
                                        <input type="number" class="form-control" name="StartingInventory" id="inputStartingInventory2" placeholder="Enter starting inventory" value="{{ $product->StartingInventory }}">
                                        @error('StartingInventory')
                                            <div class="text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="inputInventoryReceived2">Inventory Received</label>
                                        <input type="number" class="form-control" name="InventoryReceived" id="inputInventoryReceived2" placeholder="Enter inventory received" value="{{ $product->InventoryReceived }}">
                                        @error('InventoryReceived')
                                            <div class="text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="inputInventoryShipped2">Inventory Shipped</label>
                                        <input type="number" class="form-control" name="InventoryShipped" id="inputInventoryShipped2" placeholder="Enter inventory shipped" value="{{ $product->InventoryShipped }}">
                                        @error('InventoryShipped')
                                            <div class="text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="inputInventoryOnHand2">Inventory On Hand</label>
                                        <input type="number" class="form-control" name="InventoryOnHand" id="inputInventoryOnHand2" placeholder="Enter inventory on hand" value="{{ $product->InventoryOnHand }}">
                                        @error('InventoryOnHand')
                                            <div class="text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="inputMinimumRequired2">Minimum Required</label>
                                        <input type="number" class="form-control" name="MinimumRequired" id="inputMinimumRequired2" placeholder="Enter minimum required" value="{{ $product->MinimumRequired }}">
                                        @error('MinimumRequired')
                                            <div class="text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </x-modal-form>

                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delProductModal{{ $product->id }}">
                                    Delete
                                </button>
                                <!-- Delete product form-->
                                <x-modal-form
                                    modalId="delProductModal{{ $product->id }}" 
                                    modalTitle="Delete Product" 
                                    formId="delProductForm{{ $product->id }}" 
                                    formAction="{{ route('products.destroy', $product) }}" 
                                    submitButton="Delete">
                                    @method('DELETE')
                                    <!-- Form fields -->
                                    <div class="form-group">
                                        Confirm delete?
                                    </div>
                                </x-modal-form>
                            </td>
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

    <script setup>
        props = ['product'];

        // Function to handle edit action
        function editProduct(productData) {
            const product = JSON.parse(productData);
            // Populate form fields with product data
            $('#inputName2').val(product.ProductName);
            $('#inputPartNumber2').val(product.PartNumber);
            $('#inputLabel2').val(product.ProductLabel);
            $('#inputStartingInventory2').val(product.StartingInventory);
            $('#inputInventoryReceived2').val(product.InventoryReceived);
            $('#inputInventoryShipped2').val(product.InventoryShipped);
            $('#inputInventoryOnHand2').val(product.InventoryOnHand);
            $('#inputMinimumRequired2').val(product.MinimumRequired);
        }
    </script>
</x-layout>
