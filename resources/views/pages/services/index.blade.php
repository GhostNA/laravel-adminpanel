@extends('layouts.app', ['activePage' => 'services-management', 'titlePage' => __('Services Management')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">recent_actors</i>
                            </div>
                            <h4 class="card-title">Services</h4>
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
                                    <a href="{{ route('role.create') }}"
                                       class="btn btn-sm btn-rose">{{ __('Add service') }}</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div id="datatables_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div id="datatables_filter" class=""><label><span
                                                        class="bmd-form-group bmd-form-group-sm"><input type="search"
                                                                                                        class="form-control form-control-sm"
                                                                                                        placeholder="Search services"
                                                                                                        aria-controls="datatables"></span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="datatables"
                                                   class="table table-striped table-no-bordered table-hover dataTable no-footer dtr-inline collapsed"
                                                   style="" role="grid"
                                                   aria-describedby="datatables_info">
                                                <thead class="text-primary">
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="datatables"
                                                        rowspan="1" colspan="1" style=""
                                                        aria-sort="ascending" aria-label="Name: activate to sort column descending">
                                                        Name
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables"
                                                        rowspan="1" colspan="1" style="" aria-label="Description: activate to sort column ascending">
                                                        Description
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables"
                                                        rowspan="1" colspan="1" style="" aria-label="Creation date: activate to sort column ascending">
                                                        Creation date
                                                    </th>
                                                    <th class="text-right sorting_disabled" rowspan="1" colspan="1"
                                                        style=" " aria-label="Actions">
                                                        Actions
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
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
