@extends('layouts.app')

@section('content')
<div class="container">
    @if (Auth::user()->type == 'user')
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-12">
            <a href="{{ route('statement.create') }}" class="eti-link">
                <div class="card bg-success">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <img class="title-icon" alt="title-icon"
                                         src="{{ asset('images/img/fgZUgjr.png') }}">
                                </div>
                                <div class="media-body text-white text-right">
                                    <h3 class="text-white">হিসাব বিবরণী @lang('labels.form')</h3>
                                    {{-- <span>@lang('labels.gazetted') @lang('labels.officer')</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    @endif

    @if (Auth::user()->type == 'user')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h4 class="card-title">@lang('labels.property_statement') @lang('labels.list')</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        {{-- <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul> --}}
                        <a href="{{ route('statement.overview') }}" class="btn btn-primary btn-lg">
                            <i class="fa fa-file-pdf white"></i> পূর্ণাঙ্গ @lang('labels.statement')
                        </a>
                    </div>
                </div>


                <div class="card-content collapse show">
                    <div class="card-body card-dashboard">

                        <table class="table table-striped table-bordered zero-configuration text-center">
                            <thead>
                            <tr>
                                <th>@lang('labels.serial')</th>
                                <th>@lang('labels.category')</th>
                                <th>@lang('labels.type')</th>
                                <th>@lang('labels.action')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($statements as $statement)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>
                                        {{ $statement->type->category->name }}
                                    </td>
                                    <td>
                                        {{ $statement->type->name }}
                                    </td>
                                    <td>
                                        <button id="btnAction" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="btn btn-info dropdown-toggle">
                                            <i class="la la-cog"></i>
                                        </button>
                                        <span aria-labelledby="btnAction"
                                            class="dropdown-menu mt-1 dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('statement.show', $statement->id) }}">
                                                <i class="ft-eye"></i> @lang('labels.details')
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
    @endif

    @if (Auth::user()->type == 'admin')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h4 class="card-title">@lang('labels.property_statement') @lang('labels.list')</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        {{-- <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul> --}}
                    </div>
                </div>


                <div class="card-content collapse show">
                    <div class="card-body card-dashboard">

                        <table class="table table-striped table-bordered zero-configuration text-center">
                            <thead>
                            <tr>
                                <th>@lang('labels.serial')</th>
                                <th>@lang('labels.category')</th>
                                <th>@lang('labels.type')</th>
                                <th>@lang('labels.action')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($allStatements as $statement)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>
                                        {{ $statement->type->category->name }}
                                    </td>
                                    <td>
                                        {{ $statement->type->name }}
                                    </td>
                                    <td>
                                        <button id="btnAction" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="btn btn-info dropdown-toggle">
                                            <i class="la la-cog"></i>
                                        </button>
                                        <span aria-labelledby="btnAction"
                                            class="dropdown-menu mt-1 dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('statement.show', $statement->id) }}">
                                                <i class="ft-eye"></i> @lang('labels.details')
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
    @endif

</div>
@endsection
