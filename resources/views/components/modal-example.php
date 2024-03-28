<div class="modal fade" tabindex="-1" id="formModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('products.store') }}">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Record</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Name -->
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>