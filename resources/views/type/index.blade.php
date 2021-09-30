@extends('layouts.app')
@section('title', __('labels.property_type'))

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
                        {{-- <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul> --}}
                        <a href="{{ route('type.create') }}" class="btn btn-primary btn-lg">
                            <i class="ft-plus white"></i> @lang('labels.add')
                        </a>
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
                            @foreach($types as $type)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>
                                        {{ $type->name }}
                                    </td>
                                    <td>
                                        <button id="btnAction" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="btn btn-info dropdown-toggle">
                                            <i class="la la-cog"></i>
                                        </button>
                                        <span aria-labelledby="btnAction"
                                              class="dropdown-menu mt-1 dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ route('type.edit', $type) }}">
                                                   <i class="ft-edit"></i> @lang('labels.edit')
                                                </a>
                                                {{-- <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" target="_blank"
                                                   href=""><i
                                                        class="la la-print"></i> @lang('labels.print')</a> --}}
                                            </span>
                                    </td>
                                </tr>
                            @endforeach
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
