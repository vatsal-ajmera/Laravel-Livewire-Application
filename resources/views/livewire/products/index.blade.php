<div>
    <div class="page-header">
        <div class="page-title">
            <h4>{{ $page_title }}</h4>
            <h6>{{ $sub_title }}</h6>
        </div>
        <div class="page-btn">
            <button wire:click="create_product()" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img"
                class="me-1">Add New {{ $module_name }}</button>
        </div>
    </div>

    <!-- /product list -->
    <div class="card">
        <div class="card-body">
            <div class="table-top">
                <div class="search-set">
                    <div class="search-path">
                        <a class="btn btn-filter" id="filter_search">
                            <img src="assets/img/icons/filter.svg" alt="img">
                            <span><img src="assets/img/icons/closes.svg" alt="img"></span>
                        </a>
                    </div>
                    <div class="search-input">
                        <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg" alt="img"></a>
                    </div>
                </div>
                <div class="wordset">
                    <ul>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                    src="assets/img/icons/pdf.svg" alt="img"></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                    src="assets/img/icons/excel.svg" alt="img"></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                    src="assets/img/icons/printer.svg" alt="img"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Filter -->
            <div class="card mb-0" id="filter_inputs">
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg col-sm-6 col-12 ">
                                    <div class="form-group">
                                        <select class="select">
                                            <option>Price</option>
                                            <option>150.00</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-sm-6 col-12">
                                    <div class="form-group">
                                        <a class="btn btn-filters ms-auto"><img src="assets/img/icons/search-whites.svg"
                                                alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Filter -->
            <div class="table-responsive">
                <table class="table  datanew">
                    <thead>
                        <tr>
                            <th>
                                <label class="checkboxs">
                                    <input type="checkbox" id="select-all">
                                    <span class="checkmarks"></span>
                                </label>
                            </th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity </th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->status }}</td>
                                <td>
                                    <a class="me-3" wire:click="get_product({{ $product->id }})">
                                        <img src="assets/img/icons/eye.svg" alt="img">
                                    </a>
                                    <a class="me-3" wire:click="get_product({{ $product->id }}, true)">
                                        <img src="assets/img/icons/edit.svg" alt="img">
                                    </a>
                                    {{-- Default alert  --}}
                                    {{-- <a class="me-3" wire:confirm="Are you sure?" wire:click="delete_product({{ $product->id }})"><img src="assets/img/icons/delete.svg" alt="img"></a> --}}

                                    {{-- Sweet Alert --}}
                                     <a class="me-3" wire:click="confirmDelete({{ $product->id }})">
                                        <img src="assets/img/icons/delete.svg" alt="img"> 
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /product list -->
</div>
