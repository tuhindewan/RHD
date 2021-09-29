@extends('layouts.app')
@section('title', __('labels.property_type'))

@push('page-css')

@endpush

@section('content')
<section id="striped-row-form-layouts">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"
                        id="striped-row-layout-basic">@lang('labels.property_type') @lang('labels.form')</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        {{-- <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul> --}}
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        {!! Form::open(['route' =>  ['type.store'], 'class' => 'form appraisal-request-form']) !!}


                            <div class="form-body">
                                <div class="row row justify-content-center">
                                    <div class="col-md-6">

                                        <div class="form-group {{ $errors->has('name') ? ' error' : '' }}">
                                            {!! Form::label('name', trans('labels.type'), ['class' => 'form-label required']) !!}
                                            {!! Form::text('name', null,
                                                [
                                                    'class' => "form-control",
                                                    "required ",
                                                    "placeholder" => trans('labels.type'),
                                                    'data-msg-required' => trans('labels.This field is required'),
                                                    'data-rule-maxlength' => 100,
                                                    'data-msg-maxlength'=> trans('labels.At most 100 characters'),
                                                    'style' => 'margin: 0px'

                                                ])
                                            !!}
                                            <div class="help-block"></div>
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('is_divisional_exam_passed') ? ' error' : '' }}">


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

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('page-js')
<script type="text/javascript"
            src="{{ asset('theme/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>

    <script>
        $(document).ready(() => {
            $("input,select,textarea").not("[type=submit]").jqBootstrapValidation("destroy");
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
