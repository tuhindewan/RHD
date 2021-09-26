@extends('layouts.app')

@push('page-css')

@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">সম্পদের হিসাব বিবরণী</div>
                <div class="card-body">
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
                            <td >Larry the Bird</td>
                            <td>@twitter</td>
                            <td>@fat</td>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>sdhskajdh kjsdhkjashf kfhkdjsfhds ksdfhksfkjdshf kdfhkdsjhfajfasn </td>
                          </tr>
                          <tr>
                            <th scope="row">বসতবাড়ি</th>
                            <td >Larry the Bird</td>
                            <td>@twitter</td>
                            <td>@fat</td>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>sdhskajdh kjsdhkjashf kfhkdjsfhds ksdfhksfkjdshf kdfhkdsjhfajfasn </td>
                          </tr>
                          <tr>
                            <th scope="row">ব্যবসা প্রতিষ্ঠান</th>
                            <td >Larry the Bird</td>
                            <td>@twitter</td>
                            <td>@fat</td>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>sdhskajdh kjsdhkjashf kfhkdjsfhds ksdfhksfkjdshf kdfhkdsjhfajfasn </td>
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
