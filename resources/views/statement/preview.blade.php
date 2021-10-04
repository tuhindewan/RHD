@extends('layouts.app')
@section('title', __('labels.property_statement'))

@push('page-css')

<style>
    table td input {
  display: block;
  top:0;
  left:0;
  margin: 0;
  height: 100%;
  width: 100%;
  border: none;
  padding: 10px;
  box-sizing: border-box;
}
</style>
@endpush

@section('content')
<section id="striped-row-form-layouts">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"
                        id="striped-row-layout-basic">@lang('labels.property_statement')</h4>
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
                        <div class="row" style="text-align: center">
                            <div class="col-md-12">
                                <h1>{{ $statement->type->category->name }}</h1>
                                <h5>{{ $statement->type->name }}</h5>
                                <hr style="border-top: 1px solid #eee">
                            </div>
                        </div>
                        <form action="">
                            <table class="table table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th scope="col">সম্পদ অর্জনের তারিখ</th>
                                    <th scope="col">যার নামে অর্জিত</th>
                                    <th scope="col">সম্পদ / সম্পত্তির প্রকৃতি ও অবস্থান</th>
                                    <th scope="col">সম্পত্তির পরিমাণ</th>
                                    <th scope="col">কিভাবে অর্জিত ও অর্জনের তারিখে মূল্য</th>
                                    <th scope="col">ক্রয় হলে অর্থের উত্স</th>
                                    <th scope="col">মন্তব্য</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($statement->details as $res)
                                    <tr ng-repeat="name in getdrugnameNewArray">
                                        <td>{{ $res['acquisition_date'] }}</td>
                                        <td>{{ $res['acquisition_name'] }}</td>
                                        <td>{{ $res['acquisition_address'] }}</td>
                                        <td>{{ $res['property_amount'] }}</td>
                                        <td>{{ $res['reason_price'] }}</td>
                                        <td>{{ $res['source_money'] }}</td>
                                        <td>{{ $res['comments'] }}</td>
                                      </tr>
                                    @endforeach

                                </tbody>
                              </table>
                              @if (!$statement->final_submition)
                              <div class="form-actions text-center">
                                <a href="{{ route('statement.submit', $statement->id) }}" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> @lang('labels.submit')
                                </a>
                                <a class="btn btn-warning mr-1" role="button" href="{{ route('type.index') }}">
                                    <i class="la la-edit"></i> @lang('labels.edit')
                                </a>
                            </div>
                              @endif
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('page-js')

@endpush
