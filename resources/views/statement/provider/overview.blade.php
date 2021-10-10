@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="float: left">সম্পদের হিসাব বিবরণী</h3>
                      <div class="card-tools" style="float: right">
                          <a href="{{ route('statement.overview.print') }}" class="btn btn-success print_statement">
                              <i class="fas fa-print"></i> প্রিন্ট করুন
                          </a>
                      </div>
                </div>
                <div class="card-body printable">
                    <div class="row">
                        <div class="col-md-12" style="text-align: center">
                            <h5>সম্পদের হিসাব বিবরণী</h5>
                            <h5>সরকারি কর্মচারী আচরণ বিধিমালা, ১৯৭৯ এর ১৩(১) বিধি</h5>
                            <hr style="border-top: 1px solid #eee">
                        </div>
                        <div class="col-md-12">
                            <h3 style="text-align: center">(স্থাবর)</h3>
                            <table class="table table-bordered table-responsive table-hover">
                                <thead>
                                    <tr>
                                      <th scope="col">সম্পদ / সম্পত্তির বিবরণ</th>
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
                                    <tr style="text-align: center">
                                      <th scope="row">১</th>
                                      <th scope="row">২</th>
                                      <th scope="row">৩</th>
                                      <th scope="row">৪</th>
                                      <th scope="row">৫</th>
                                      <th scope="row">৬</th>
                                      <th scope="row">৭</th>
                                      <th scope="row">৮</th>
                                    </tr>
                                    @foreach ($movables as $movable)

                                    <tr>
                                      <th scope="row" rowspan="{{ $movable->details->count() }}">{{ $movable->type->name }}</th>
                                      <td>{{ $movable->details[0]->acquisition_date }}</td>
                                      <td>{{ $movable->details[0]->acquisition_name }}</td>
                                      <td>{{ $movable->details[0]->acquisition_address }}</td>
                                      <td>{{ $movable->details[0]->property_amount }}</td>
                                      <td>{{ $movable->details[0]->reason_price }}</td>
                                      <td>{{ $movable->details[0]->source_money }}</td>
                                      <td>{{ $movable->details[0]->comments }}</td>

                                    </tr>
                                    @for($i=1;$i<$movable->details->count();$i++)
                                    <tr>
                                      <td>{{ $movable->details[$i]->acquisition_date }}</td>
                                      <td>{{ $movable->details[$i]->acquisition_name }}</td>
                                      <td>{{ $movable->details[$i]->acquisition_address }}</td>
                                      <td>{{ $movable->details[$i]->property_amount }}</td>
                                      <td>{{ $movable->details[$i]->reason_price }}</td>
                                      <td>{{ $movable->details[$i]->source_money }}</td>
                                      <td>{{ $movable->details[$i]->comments }}</td>
                                    </tr>
                                    @endfor
                                      @endforeach
                                </tbody>
                            </table>
                            <hr style="border-top: 1px solid #eee">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h3 style="text-align: center">(অস্থাবর)</h3>
                            <table class="table table-bordered table-responsive table-hover">
                                <thead>
                                    <tr>
                                      <th scope="col">সম্পদ / সম্পত্তির বিবরণ</th>
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
                                    <tr style="text-align: center">
                                      <th scope="row">১</th>
                                      <th scope="row">২</th>
                                      <th scope="row">৩</th>
                                      <th scope="row">৪</th>
                                      <th scope="row">৫</th>
                                      <th scope="row">৬</th>
                                      <th scope="row">৭</th>
                                      <th scope="row">৮</th>
                                    </tr>
                                    @foreach ($immovables as $immovable)

                                    <tr>
                                      <th scope="row" rowspan="{{ $immovable->details->count() }}">{{ $immovable->type->name }}</th>
                                      <td>{{ $immovable->details[0]->acquisition_date }}</td>
                                      <td>{{ $immovable->details[0]->acquisition_name }}</td>
                                      <td>{{ $immovable->details[0]->acquisition_address }}</td>
                                      <td>{{ $immovable->details[0]->property_amount }}</td>
                                      <td>{{ $immovable->details[0]->reason_price }}</td>
                                      <td>{{ $immovable->details[0]->source_money }}</td>
                                      <td>{{ $immovable->details[0]->comments }}</td>

                                    </tr>
                                    @for($i=1;$i<$immovable->details->count();$i++)
                                    <tr>
                                      <td>{{ $immovable->details[$i]->acquisition_date }}</td>
                                      <td>{{ $immovable->details[$i]->acquisition_name }}</td>
                                      <td>{{ $immovable->details[$i]->acquisition_address }}</td>
                                      <td>{{ $immovable->details[$i]->property_amount }}</td>
                                      <td>{{ $immovable->details[$i]->reason_price }}</td>
                                      <td>{{ $immovable->details[$i]->source_money }}</td>
                                      <td>{{ $immovable->details[$i]->comments }}</td>
                                    </tr>
                                    @endfor
                                      @endforeach
                                </tbody>
                            </table>
                            <hr style="border-top: 1px solid #eee">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
