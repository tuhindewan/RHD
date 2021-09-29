@extends('layouts.app')

@push('page-css')

@endpush

@section('content')
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h4 class="card-title">@lang('labels.property_type') @lang('labels.list')</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>


                <div class="card-content collapse show">
                    <div class="card-body card-dashboard">

                        <table class="table table-striped table-bordered zero-configuration text-center">
                            <thead>
                            <tr>
                                <th>@lang('labels.serial')</th>
                                <th>@lang('labels.type')</th>
                                <th>@lang('labels.action')</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{-- @foreach($actions as $action) --}}
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        test
                                    </td>
                                    <td>
                                        <button id="btnAction" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="btn btn-info dropdown-toggle">
                                            <i class="la la-cog"></i>
                                        </button>
                                        <span aria-labelledby="btnAction"
                                              class="dropdown-menu mt-1 dropdown-menu-right">
                                                <a class="dropdown-item"
                                                   href=""><i
                                                        class="ft-eye"></i> @lang('labels.details')</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" target="_blank"
                                                   href=""><i
                                                        class="la la-print"></i> @lang('labels.print')</a>
                                            </span>
                                    </td>
                                </tr>
                            {{-- @endforeach --}}
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('page-js')

@endpush
