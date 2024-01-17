@extends('client.layouts.main')

@section('content')

    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ route('client.home') }}">home</a></li>
                            <li>Delivery Information</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="privacy_policy_bg">
        <div class="container">
            <div class="privacy_policy_main_area" style="margin: 0 3%">
                <div class="row">
                    <div class="col-12">
                        <div class="privacy_policy_header" style="margin-bottom: 0px;">
                            <h3 style="color: #af090d; font-weight: bold; text-align: left;">DELIVERY INFORMATION</h3>
                        </div>
                        <div class="privacy_content section_2">
                            <p style="text-align: justify">
                                WAAW highly values the urgency of your orders. We endeavor to make sure that your ordered products reach your door in the fastest possible time. Once your order is confirmed, you will receive a confirmation mail from our Customer Services Department.
                            </p>
                            <p style="text-align: justify">
                                Your ordered products will be sent to your given address in 5 to 8 business days for anywhere in Bangladesh.
                                We start the shipping process within 24 hours. So, if you want to cancel or modify any order, please inform our Customer Services Department at your earliest.
                            </p>
                            <p style="text-align: justify">

                                After you receive the shipment, our delivery team will wait for 10 minutes to let you try on the product. If you have any issue with the product you can contact our Customer Services Department and return the product instantly.


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
