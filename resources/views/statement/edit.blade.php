@extends('layouts.app')
@section('title', __('labels.property_statement'))

@push('page-css')

@endpush

@section('content')
<section id="striped-row-form-layouts">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"
                        id="striped-row-layout-basic">@lang('labels.property_statement') @lang('labels.form')</h4>
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
                        {{-- {!! Form::open(['route' =>  ['type.store'], 'class' => 'form appraisal-request-form']) !!}

                        <div class="form-body">
                            <h4 class="form-section"><i class="ft-user"></i> @lang('labels.property_type')</h4>
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('category_id') ? ' error' : '' }}">
                                        {!! Form::label('category_id', trans('labels.type'), ['class' => 'form-label required']) !!}
                                        {!! Form::select('category_id',
                                             $types, null,
                                            [
                                                'class'=>'form-control select required' . ($errors->has('category_id') ? ' is-invalid' : ''),
                                                'data-msg-required' => trans('labels.This field is required'),'placeholder' => 'ধরণ নির্ধারণ করুন'
                                            ])
                                        !!}
                                        <div class="help-block"></div>
                                        @if ($errors->has('category_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('category_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <h4 class="form-section"><i class="ft-user"></i>হিসাব বিবরণ</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="required">সম্পদ অর্জনের তারিখ</label>
                                                <input type="text" class="form-control" name="land_acquisition_date" placeholder="২১/০৯/২০২১" id="land_acquisition_date">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="required">যার নামে অর্জিত</label>
                                                <input type="text" class="form-control" name="land_acquisition_name" placeholder="যার নামে অর্জিত" id="last">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="required">সম্পত্তির পরিমাণ</label>
                                                <input type="text" class="form-control" name="land_property_amount" placeholder="সম্পত্তির পরিমাণ" id="last">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="required">কিভাবে অর্জিত ও অর্জনের তারিখে মূল্য</label>
                                                <input type="text" class="form-control" name="land_reason_price" placeholder="কিভাবে অর্জিত ও অর্জনের তারিখে মূল্য" id="company">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="required">ক্রয় হলে অর্থের উত্স</label>
                                                <input type="text" class="form-control" name="land_source_money" id="phone" placeholder="ক্রয় হলে অর্থের উত্স">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="required">সম্পদ / সম্পত্তির প্রকৃতি ও অবস্থান</label>
                                                <input type="text" class="form-control" name="land_acquisition_address" id="email" placeholder="সম্পদ / সম্পত্তির প্রকৃতি ও অবস্থান">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="required">মন্তব্য</label>
                                                <input type="text" class="form-control" name="land_comments" id="url" placeholder="মন্তব্য">
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
                        </div>
                        {!! Form::close() !!} --}}

                        <form action="{{ route('statement.store') }}" method="POST" class="appraisal-request-form">
                            @csrf
                            <h4 class="form-section"><i class="ft-user"></i> @lang('labels.property_type')</h4>
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('type_id') ? ' error' : '' }}">
                                        {!! Form::label('type_id', trans('labels.type'), ['class' => 'form-label required']) !!}
                                        {!! Form::select('type_id',
                                                $types, $statement->type_id,
                                            [
                                                'class'=>'form-control select required' . ($errors->has('type_id') ? ' is-invalid' : ''),
                                                'data-msg-required' => trans('labels.This field is required'),'placeholder' => 'ধরণ নির্ধারণ করুন'
                                            ])
                                        !!}
                                        <div class="help-block"></div>
                                        @if ($errors->has('type_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('type_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="repeater">
                                <div data-repeater-list="category-group">
                                    <div data-repeater-item>
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-user"></i>হিসাব বিবরণ</h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="required">সম্পদ অর্জনের তারিখ</label>
                                                                <input type="text" class="form-control required @error('acquisition_date') is-invalid @enderror"
                                                                        name="acquisition_date" value="{{ old('acquisition_date') }}" placeholder="২১/০৯/২০২১"
                                                                        data-msg-required="{{ __('labels.This field is required') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>যার নামে অর্জিত</label>
                                                                <input type="text" class="form-control" name="acquisition_name" placeholder="যার নামে অর্জিত" id="last">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="required">সম্পত্তির পরিমাণ</label>
                                                                <input type="text" class="form-control required @error('property_amount') is-invalid @enderror"
                                                                        name="property_amount" placeholder="সম্পত্তির পরিমাণ"
                                                                        data-msg-required="{{ __('labels.This field is required') }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="required">কিভাবে অর্জিত ও অর্জনের তারিখে মূল্য</label>
                                                                <input type="text" class="form-control required @error('reason_price') is-invalid @enderror"
                                                                        name="reason_price" placeholder="কিভাবে অর্জিত ও অর্জনের তারিখে মূল্য"
                                                                        data-msg-required="{{ __('labels.This field is required') }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="required">ক্রয় হলে অর্থের উত্স</label>
                                                                <input type="text" class="form-control required @error('reason_price') is-invalid @enderror"
                                                                        name="source_money" placeholder="ক্রয় হলে অর্থের উত্স"
                                                                        data-msg-required="{{ __('labels.This field is required') }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="required">সম্পদ / সম্পত্তির প্রকৃতি ও অবস্থান</label>
                                                                <input type="text" class="form-control required @error('acquisition_address') is-invalid @enderror"
                                                                        name="acquisition_address" placeholder="সম্পদ / সম্পত্তির প্রকৃতি ও অবস্থান"
                                                                        data-msg-required="{{ __('labels.This field is required') }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="required">মন্তব্য</label>
                                                                <input type="text" class="form-control" name="comments" id="url" placeholder="মন্তব্য">
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>


                                        </div>
                                        <div class="form-group overflow-auto">
                                            <div class="col-12">
                                                <button type="button" data-repeater-delete="" id="add_more_room"
                                                        class="pull-left btn btn-sm btn-outline-danger">
                                                    <i class="ft-minus"></i> @lang('labels.remove')
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                                <div class="form-group overflow-auto">
                                    <div class="col-12">
                                        <button type="button" data-repeater-create="" id="add_more_room"
                                                class="pull-right btn btn-sm btn-outline-primary">
                                            <i class="ft-plus"></i> @lang('labels.add')
                                        </button>
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
</section>
@endsection

@push('page-js')
    <script type="text/javascript" src="{{ asset('theme/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>



    <script>
        $(document).ready(() => {
            $("input,select,textarea").not("[type=submit]").jqBootstrapValidation("destroy");

            $('.select').select2();

            let stateDetails = @json($stateDetails);


            var historyEntryRepeater = $(`.repeater`).repeater({
                // isFirstItemUndeletable: true,
                initEmpty: true,
                show: function () {
                    $(this).slideDown();
                },
                hide: function (deleteElement) {
                    if (confirm('Are you sure you want to delete this element?')) {
                        $(this).slideUp(deleteElement);
                    }
                }
            });

            if (stateDetails.length) {
                historyEntryRepeater.setList(stateDetails);
            }
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

{{-- <script src="{{ asset('js/jquery-reapeter.js') }}"></script> --}}
@endpush
