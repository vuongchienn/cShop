
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
                                    User
                                    <div class="page-title-subheading">
                                        View, create, update, delete and manage.
                                    </div>
                                </div>
                            </div>

                            <div class="page-title-actions">
                                <a href="{{ Route('users.create') }}" class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
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

                                    <form action = {{ Route('searchUser') }} method ="POST">
                                        @csrf
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
                                </div>

                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th>Full Name</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Level</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($users as $user)
                                            <tr>

                                                <td class="text-center text-muted">#{{ $user->id }}</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle"
                                                                        data-toggle="tooltip" title="Image"
                                                                        data-placement="bottom"
                                                                        src="./admin/assets/images/_default-user.png" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">{{ $user->name }}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">{{ $user->email }}</td>
                                                <td class="text-center">
                                                    {{ $user->role }}
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ Route('users.show',$user->id) }}"
                                                        class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">
                                                        Details
                                                    </a>
                                                    <a href="{{ Route('users.edit',$user->id) }}" data-toggle="tooltip" title="Edit"
                                                        data-placement="bottom" class="btn btn-outline-warning border-0 btn-sm">
                                                        <span class="btn-icon-wrapper opacity-8">
                                                            <i class="fa fa-edit fa-w-20"></i>
                                                        </span>
                                                    </a>


                                                    <div class="d-inline">
                                                        <button class="btn btn-hover-shine btn-outline-danger border-0 btn-sm"
                                                            type="submit" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $user->id }}">
                                                                <i class="fa fa-trash fa-w-20"></i>
                                                        </button>
                                                    </div>


                                                    <div class="modal fade" id="deleteModal{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $user->id }}" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel{{ $user->id }}">Cảnh báo</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Bạn có muốn xóa người dùng<strong>{{ $user->name }}</strong> không ?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form id="deleteForm{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
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
                                    {{ $users->links('pagination::bootstrap-5') }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- End Main -->
    @endsection

    @section('sidebar')
<div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            <li class="app-sidebar__heading">Menu</li>

            <li class="mm-active">
                <a href="#">
                    <i class="metismenu-icon pe-7s-plugin"></i>Applications
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                        <a href="{{ Route('users.index') }}" class="mm-active">
                            <i class="metismenu-icon"></i>User
                        </a>
                    </li>
                    <li>
                        <a href="{{ Route('orders.index') }}" >
                            <i class="metismenu-icon"></i>Order
                        </a>
                    </li>
                    <li>
                        <a href="{{ Route('product.index') }}" >
                            <i class="metismenu-icon"></i>Product
                        </a>
                    </li>
                    <li>
                        <a href="{{ Route('categories.index') }}" >
                            <i class="metismenu-icon"></i>Category
                        </a>
                    </li>
                    <li>
                        <a href="{{ Route('brands.index')  }}" >
                            <i class="metismenu-icon"></i>Brand
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
@endsection