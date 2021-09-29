@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-12">
            <a href="{{ route('statement') }}" class="eti-link">
                <div class="card bg-success">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <img class="title-icon" alt="title-icon"
                                         src="https://i.imgur.com/fgZUgjr.png">
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
</div>
@endsection
