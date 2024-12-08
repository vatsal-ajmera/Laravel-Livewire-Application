<div>
    <div class="page-header">
        <div class="page-title">
            <h4>Product Add</h4>
            <h6>Create new product</h6>
        </div>
    </div>
    <!-- /add -->
    <div class="card">
        <div class="card-body">
            <div class="form-row row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" wire:model="name" @if ($readonly == true) readonly @endif>
                        <div class="invalid-feedback">
                            @error('name'){{ $message }}@enderror
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Product Quantity</label>
                        <input type="text" name="quantity" class="form-control @error('quantity') is-invalid @enderror" wire:model="quantity" @if ($readonly == true) readonly @endif>
                            <div class="invalid-feedback">
                                @error('quantity'){{ $message }}@enderror
                            </div> 
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Product price</label>
                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" wire:model="price" @if ($readonly == true) readonly @endif>
                        <div class="invalid-feedback">
                            @error('price'){{ $message }}@enderror
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="form-group">
                        <label class="form-label">Textarea</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Required example textarea" name="description" wire:model="description" @if ($readonly == true) readonly @endif></textarea>
                        <div class="invalid-feedback">
                            @error('description'){{ $message }}@enderror
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    @if ($edit_product === true)
                        <button wire:click.prevent="update_product()" class="btn btn-submit me-2">update</button>
                        <button wire:click="reset_component()" class="btn btn-cancel">Cancel</button>
                    @elseif ($readonly === false)
                        <button wire:click.prevent="save_product()" class="btn btn-submit me-2">Submit</button>
                        <button wire:click="reset_component()" class="btn btn-cancel">Cancel</button>
                    @endif
            </div>
        </div>
    </div>
    <!-- /add -->
</div>