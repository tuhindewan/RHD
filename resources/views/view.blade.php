@extends('layouts.app')

@push('page-css')

@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="float: left">সম্পদের হিসাব বিবরণী</h3>
                      <div class="card-tools" style="float: right">
                          <a href="" class="btn btn-success print_statement">
                              <i class="fas fa-print"></i> প্রিন্ট করুন
                          </a>
                      </div>
                </div>
                <div class="card-body printable">
                    <div class="col-md-12" style="text-align: center">
                        <h1>স্থাবর</h1>
                        <hr style="border-top: 1px solid #eee">
                    </div>
                    <table class="table table-bordered">
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
                          <tr>
                            <th scope="row">জমি (কৃষি/অকৃষি)</th>
                            <td>{{ $land->land_acquisition_date }}</td>
                            <td>{{ $land->land_acquisition_name }}</td>
                            <td>{{ $land->land_acquisition_address }}</td>
                            <td>{{ $land->land_property_amount }}</td>
                            <td>{{ $land->land_reason_price }}</td>
                            <td>{{ $land->land_source_money }}</td>
                            <td>{{ $land->land_comments }}</td>
                          </tr>
                          <tr>
                            <th scope="row">ইমারত</th>
                            <td>{{ $building->building_acquisition_date }}</td>
                            <td>{{ $building->building_acquisition_name }}</td>
                            <td>{{ $building->building_acquisition_address }}</td>
                            <td>{{ $building->building_property_amount }}</td>
                            <td>{{ $building->building_reason_price }}</td>
                            <td>{{ $building->building_source_money }}</td>
                            <td>{{ $building->building_comments }}</td>
                          </tr>
                          <tr>
                            <th scope="row">বসতবাড়ি</th>
                            <td>{{ $home->home_acquisition_date }}</td>
                            <td>{{ $home->home_acquisition_name }}</td>
                            <td>{{ $home->home_acquisition_address }}</td>
                            <td>{{ $home->home_property_amount }}</td>
                            <td>{{ $home->home_reason_price }}</td>
                            <td>{{ $home->home_source_money }}</td>
                            <td>{{ $home->home_comments }}</td>
                          </tr>
                          <tr>
                            <th scope="row">ব্যবসা প্রতিষ্ঠান</th>
                            <td>{{ $business->business_acquisition_date }}</td>
                            <td>{{ $business->business_acquisition_name }}</td>
                            <td>{{ $business->business_acquisition_address }}</td>
                            <td>{{ $business->business_property_amount }}</td>
                            <td>{{ $business->business_reason_price }}</td>
                            <td>{{ $business->business_source_money }}</td>
                            <td>{{ $business->business_comments }}</td>
                          </tr>
                        </tbody>
                    </table>

                    <div class="col-md-12" style="text-align: center">
                        <hr style="border-top: 1px solid #eee">
                        <h1>অস্থাবর</h1>
                        <hr style="border-top: 1px solid #eee">
                    </div>
                    <table class="table table-bordered">
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
                          <tr>
                            <th scope="row">অলংকারাদি</th>
                            <td>{{ $ornament->ornament_acquisition_date }}</td>
                            <td>{{ $ornament->ornament_acquisition_name }}</td>
                            <td>{{ $ornament->ornament_acquisition_address }}</td>
                            <td>{{ $ornament->ornament_property_amount }}</td>
                            <td>{{ $ornament->ornament_reason_price }}</td>
                            <td>{{ $ornament->ornament_source_money }}</td>
                            <td>{{ $ornament->ornament_comments }}</td>
                          </tr>
                          <tr>
                            <th scope="row">স্টকস</th>
                            <td>{{ $stock->stock_acquisition_date }}</td>
                            <td>{{ $stock->stock_acquisition_name }}</td>
                            <td>{{ $stock->stock_acquisition_address }}</td>
                            <td>{{ $stock->stock_property_amount }}</td>
                            <td>{{ $stock->stock_reason_price }}</td>
                            <td>{{ $stock->stock_source_money }}</td>
                            <td>{{ $stock->stock_comments }}</td>
                          </tr>
                          <tr>
                            <th scope="row">শেয়ার</th>
                            <td>{{ $share->share_acquisition_date }}</td>
                            <td>{{ $share->share_acquisition_name }}</td>
                            <td>{{ $share->share_acquisition_address }}</td>
                            <td>{{ $share->share_property_amount }}</td>
                            <td>{{ $share->share_reason_price }}</td>
                            <td>{{ $share->share_source_money }}</td>
                            <td>{{ $share->share_comments }}</td>
                          </tr>
                          <tr>
                            <th scope="row">বীমা</th>
                            <td>{{ $bima->bima_acquisition_date }}</td>
                            <td>{{ $bima->bima_acquisition_name }}</td>
                            <td>{{ $bima->bima_acquisition_address }}</td>
                            <td>{{ $bima->bima_property_amount }}</td>
                            <td>{{ $bima->bima_reason_price }}</td>
                            <td>{{ $bima->bima_source_money }}</td>
                            <td>{{ $bima->bima_comments }}</td>
                          </tr>
                          <tr>
                            <th scope="row">নগদ/ব্যাংকে গচ্ছিত অর্থ</th>
                            <td>{{ $cash->cash_acquisition_date }}</td>
                            <td>{{ $cash->cash_acquisition_name }}</td>
                            <td>{{ $cash->cash_acquisition_address }}</td>
                            <td>{{ $cash->cash_property_amount }}</td>
                            <td>{{ $cash->cash_reason_price }}</td>
                            <td>{{ $cash->cash_source_money }}</td>
                            <td>{{ $cash->cash_comments }}</td>
                          </tr>
                          <tr>
                            <th scope="row">মোটর ভেহিকলস</th>
                            <td>{{ $vehicle->vehicle_acquisition_date }}</td>
                            <td>{{ $vehicle->vehicle_acquisition_name }}</td>
                            <td>{{ $vehicle->vehicle_acquisition_address }}</td>
                            <td>{{ $vehicle->vehicle_property_amount }}</td>
                            <td>{{ $vehicle->vehicle_reason_price }}</td>
                            <td>{{ $vehicle->vehicle_source_money }}</td>
                            <td>{{ $vehicle->vehicle_comments }}</td>
                          </tr>
                          <tr>
                            <th scope="row">ইলেক্ট্রনিক্স জিনিসপত্র</th>
                            <td>{{ $electronics->electronics_acquisition_date }}</td>
                            <td>{{ $electronics->electronics_acquisition_name }}</td>
                            <td>{{ $electronics->electronics_acquisition_address }}</td>
                            <td>{{ $electronics->electronics_property_amount }}</td>
                            <td>{{ $electronics->electronics_reason_price }}</td>
                            <td>{{ $electronics->electronics_source_money }}</td>
                            <td>{{ $electronics->electronics_comments }}</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page-js')

@endpush
