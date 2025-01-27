@extends('admin.layout.master')

@section('content')
                <!-- Main -->
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                                </div>
                                <div>
                                    Product Detail
                                    <div class="page-title-subheading">
                                        View, create, update, delete and manage.
                                    </div>
                                </div>
                            </div>

                            <div class="page-title-actions">
                                <a href="./admin/product/{{ $product->id }}/detail/create" class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-plus fa-w-20"></i>
                                    </span>
                                    Create
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">

                                <div class="card-header">

                                    <form>
                                        <div class="input-group">
                                            <input type="search" name="search" id="search"
                                                placeholder="Search everything" class="form-control">
                                            <span class="input-group-append">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-search"></i>&nbsp;
                                                    Search
                                                </button>
                                            </span>
                                        </div>
                                    </form>

                                    <div class="btn-actions-pane-right">
                                        <div role="group" class="btn-group-sm btn-group">
                                            <button class="btn btn-focus">This week</button>
                                            <button class="active btn btn-focus">Anytime</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="pl-4">Product Name</th>
                                                <th>Color</th>
                                                <th>Size</th>
                                                <th>Qty</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($productDetails as $productDetail)
                                                <tr>
                                                    <td class="pl-4 text-muted">{{ $product->name }}

                                                    <td class="">{{ $productDetail->color }}</td>
                                                    <td class="">{{ $productDetail->size }}</td>
                                                    <td class="">{{ $productDetail->quantity }}</td>
                                                    
                                                    <td class="text-center">
                                                        <a href="./admin/product/{{ $product->id }}/detail/{{ $productDetail->id }}/edit" data-toggle="tooltip" title="Edit"
                                                            data-placement="bottom" class="btn btn-outline-warning border-0 btn-sm">
                                                            <span class="btn-icon-wrapper opacity-8">
                                                                <i class="fa fa-edit fa-w-20"></i>
                                                            </span>
                                                        </a>

                                                       
                                                            <button class="btn btn-hover-shine btn-outline-danger border-0 btn-sm"
                                                                type="submit" data-toggle="tooltip" title="Delete"
                                                                data-placement="bottom"
                                                                data-bs-toggle="modal" data-bs-target="#deleteModal{{ $productDetail->id }}">
                                                                <span class="btn-icon-wrapper opacity-8">
                                                                    <i class="fa fa-trash fa-w-20"></i>
                                                                </span>
                                                            </button>
                                                        
                                                            <div class="modal fade" id="deleteModal{{ $productDetail->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $productDetail->id }}" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel{{ $productDetail->id }}">Cảnh báo</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Bạn có muốn xóa không ?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <form id="deleteForm{{ $productDetail->id }}" action="admin/product/{{ $product->id }}/detail/{{ $productDetail->id }}" method="POST" style="display: inline-block;">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit" class="btn btn-danger">Có</button>
                                                                            </form>
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Không</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                    </td>

                                                </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>

                                <div class="d-block card-footer">
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Main -->
@endsection