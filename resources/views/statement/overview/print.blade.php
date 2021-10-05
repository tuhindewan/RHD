<!Doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> - ACR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <script async src="{{ asset('print/plugins/fontawesome-free-5.7.2/js/all.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('print/plugins/bootstrap-4.3.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('print/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('print/css/style.css') }}">
</head>
<body onload="window.print()" onafterprint="closeWindow()">
<script type="text/javascript">
    function closeWindow() {
        window.close();
    }
</script>

<div class="container print-as-pages p-0">
    <div class="page-margin">
        <div class="row">
            <div class="col-md-12" style="text-align: center">
                <h5>সম্পদের হিসাব বিবরণী</h5>
                <h5>সরকারি কর্মচারী আচরণ বিধিমালা, ১৯৭৯ এর ১৩(১) বিধি</h5>
                <hr style="border-top: 1px solid #eee">
            </div>
            <div class="col-md-12" style="text-align: center">
                <p>আমি: সাইদুজ্জামান তুহিন পরিচিতি নম্বর (যদি থাকে): ১২৩৪৫৬৭৮৯ পদবী: সহকারী কর্নকর্তা চাকরিতে যোগদানের তারিখ: ২৬/১২/ট২১ বর্তমান কর্মস্থল: ঢাকা এ মর্মে ঘোষণা করছি যে, আমার/আমার পরিবারের সদস্যগণের নামে চাকরিতে প্রথম যোগদানের তারিখ পর্যন্ত নিন্মে বর্ণিত সম্পদ/ সম্পত্তি বিদ্যমান আছে:</p>
                <hr style="border-top: 1px solid #eee">
            </div>
            <div class="col-md-12">
                <h1 style="text-align: center">(স্থাবর)</h1>
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
        <div class="pagebreak"></div>
    </div>
    <div class="page-margin">
        <div class="row" style="margin-top: 50px">
            <div class="col-md-12">
                <h1 style="text-align: center">(অস্থাবর)</h1>
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

        <div class="row">
            <div class="col-md-12" style="text-align: center">
                <p>আমি আর ও ঘোষণা করছি যে, উপর্যক্ত সম্পদ/সম্পত্তির (স্থাবর/অস্থাবর) বিবরণী আমার জ্ঞান ও বিশ্বাসমতে সত্য এমন কোন সম্পদ/সম্পত্তির (স্থাবর/অস্থাবর) বিবরণ এ হিসাব বিবরণী হতে গোপন হয়নি, যাতে আমার নিজের অথবা আমার পরিবারের সদস্যগণের মাধ্যমে আমার স্বার্থ নিহিত আছে</p>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p>স্বাক্ষর:</p><br>
                        <p>নাম:</p><br>
                        <p>পদবি:</p><br>
                    </div>
                </div>
                <hr style="border-top: 1px solid #eee">
            </div>
        </div>
        <div class="pagebreak"></div>
    </div>




</div>
</body>
</html>
