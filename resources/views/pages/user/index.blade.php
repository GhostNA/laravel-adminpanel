@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('User Management')])


@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">group</i>
                            </div>
                            <h4 class="card-title">Users</h4>
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="material-icons">close</i>
                                            </button>
                                            <span>{{ session('status') }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('user.create') }}"
                                       class="btn btn-sm btn-rose">Add user</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div id="datatables_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div id="datatables_filter" class=""><label><span
                                                        class="bmd-form-group bmd-form-group-sm"><input type="search"
                                                                                                        class="form-control form-control-sm"
                                                                                                        placeholder="Search users"
                                                                                                        aria-controls="datatables"></span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="datatables"
                                                   class="table table-striped table-no-bordered table-hover dataTable no-footer dtr-inline collapsed"
                                                   role="grid"
                                                   aria-describedby="datatables_info">
                                                <thead class="text-primary">
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="datatables"
                                                        rowspan="1" colspan="1" style="width: 307px;"
                                                        aria-sort="ascending" aria-label="Photo: activate to sort column descending">
                                                        Photo
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables"
                                                        rowspan="1" colspan="1" style="width: 158px;" aria-label="Name: activate to sort column ascending">
                                                        Name
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables"
                                                        rowspan="1" colspan="1" style="width: 408px;" aria-label="
                        Email
                      : activate to sort column ascending">
                                                        Email
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables"
                                                        rowspan="1" colspan="1" style="width: 158px;" aria-label="
                        Role
                      : activate to sort column ascending">
                                                        Role
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables"
                                                        rowspan="1" colspan="1" style="width: 289px;" aria-label="Creation date: activate to sort column ascending">
                                                        Creation date
                                                    </th>
                                                    <th class="text-right sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 171px;" aria-label="Actions">
                                                        Actions
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($users as $user)
                                                    <tr>
                                                        <td tabindex="0" class="sorting_1" style="">
                                                            <div class="avatar avatar-sm rounded-circle img-circle"
                                                                 style="width:100px; height:100px;overflow: hidden;">
                                                                <img src="http://i.pravatar.cc/200" alt=""
                                                                     style="max-width: 100px;">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            {{ $user->name }}
                                                        </td>
                                                        <td>
                                                            {{ $user->email }}
                                                        </td>
                                                        <td>
                                                            {{ $user->role->name }}
                                                        </td>
                                                        <td>
                                                            {{ $user->created_at->format('Y-m-d') }}
                                                        </td>
                                                        <td class="td-actions text-right">
                                                            @if ($user->id != auth()->id())
                                                                <form action="{{ route('user.destroy', $user) }}" method="post">
                                                                    @csrf
                                                                    @method('delete')

                                                                    <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('user.edit', $user) }}" data-original-title="" title="">
                                                                        <i class="material-icons">edit</i>
                                                                        <div class="ripple-container"></div>
                                                                    </a>
                                                                    <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                                        <i class="material-icons">close</i>
                                                                        <div class="ripple-container"></div>
                                                                    </button>
                                                                </form>
                                                            @else
                                                                <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('profile.edit') }}" data-original-title="" title="">
                                                                    <i class="material-icons">edit</i>
                                                                    <div class="ripple-container"></div>
                                                                </a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="datatables_info" role="status"
                                                 aria-live="polite">Showing {{ count($users) }} entries
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_full_numbers"
                                                 id="datatables_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item first disabled"
                                                        id="datatables_first"><a href="#" aria-controls="datatables"
                                                                                 data-dt-idx="0" tabindex="0"
                                                                                 class="page-link">First</a></li>
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="datatables_previous"><a href="#" aria-controls="datatables"
                                                                                    data-dt-idx="1" tabindex="0"
                                                                                    class="page-link">Prev</a></li>
                                                    <li class="paginate_button page-item active"><a href="#"
                                                                                                    aria-controls="datatables"
                                                                                                    data-dt-idx="2"
                                                                                                    tabindex="0"
                                                                                                    class="page-link">1</a>
                                                    </li>
                                                    <li class="paginate_button page-item next disabled"
                                                        id="datatables_next"><a href="#" aria-controls="datatables"
                                                                                data-dt-idx="3" tabindex="0"
                                                                                class="page-link">Next</a></li>
                                                    <li class="paginate_button page-item last disabled"
                                                        id="datatables_last"><a href="#" aria-controls="datatables"
                                                                                data-dt-idx="4" tabindex="0"
                                                                                class="page-link">Last</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
