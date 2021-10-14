@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h4 class="card-title">@lang('labels.user_information_form') @lang('labels.form')</h4>
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
                        <form action="{{ route('user.info.form.update', Auth::user()) }}" method="POST" class="appraisal-request-form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="repeater">
                                <div data-repeater-list="category-group">
                                    <div data-repeater-item>
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-user"></i>@lang('labels.personal_info')</h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="required">@lang('labels.joining_date')</label>
                                                                <input type="text" class="form-control required @error('joining_date') is-invalid @enderror"
                                                                        name="joining_date" value="{{ old('joining_date') }}" placeholder="২১/০৯/২০২১"
                                                                        data-msg-required="{{ __('labels.This field is required') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="required">@lang('labels.current_workplace')</label>
                                                                <input type="text" class="form-control required @error('current_workplace') is-invalid @enderror"
                                                                        name="current_workplace" value="{{ old('current_workplace') }}" placeholder="বর্তমান কর্মস্থল"
                                                                        data-msg-required="{{ __('labels.This field is required') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group {{ $errors->has('signature') ? ' error' : '' }}">
                                                                <label class="required">@lang('labels.signature')</label>
                                                                {!! Form::file('signature', ['class' => 'form-control required' . ($errors->has('signature') ? ' is-invalid' : ''), 'accept' => '.png, .jpg, .jpeg', 'data-msg-required'=>trans('labels.This field is required')]) !!}

                                                                @if ($errors->has('signature'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('signature') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions text-center">
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> @lang('labels.save')
                                </button>
                                <a class="btn btn-warning mr-1" role="button" href="{{ route('type.index') }}">
                                    <i class="la la-close"></i> @lang('labels.cancel')
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('page-js')
<script type="text/javascript"
            src="{{ asset('theme/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('theme/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>

<script>
    $(document).ready(() => {
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation("destroy");

        $('.select').select2();

    });

    jQuery.validator.addMethod("birthDate", function(value, element) {
        return this.optional(element) || /^(?=\d)(?:(?:31(?!.(?:0?[2469]|11))|(?:30|29)(?!.0?2)|29(?=.0?2.(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00)))(?:\x20|$))|(?:2[0-8]|1\d|0?[1-9]))([-.\/])(?:1[012]|0?[1-9])\1(?:1[6-9]|[2-9]\d)?\d\d(?:(?=\x20\d)\x20|$))?(((0?[1-9]|1[012])(:[0-5]\d){0,2}(\x20[AP]M))|([01]\d|2[0-3])(:[0-5]\d){1,2})?$/.test(value);
    });

    // , "Please specify the correct Date!"

    let validator = $('.appraisal-request-form').validate({
        ignore: [],
        errorClass: 'danger',
        successClass: 'success',
        highlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
        },
        errorPlacement: function (error, element) {
            if (element.attr('type') == 'radio') {
                error.insertBefore(element.parents().siblings('.radio-error'));
            } else if (element[0].tagName == "SELECT") {
                error.insertAfter(element.siblings('.select2-container'));
            } else if (element.attr('id') == 'ckeditor') {
                error.insertAfter(element.siblings('#cke_ckeditor'));
            } else {
                error.insertAfter(element);
            }
        },
        rules: {
            birth_date : {
                required : true,
                birthDate : true,
            },
        },
        submitHandler: function (form, event) {
            form.submit();
        }
    });
</script>
@endpush
