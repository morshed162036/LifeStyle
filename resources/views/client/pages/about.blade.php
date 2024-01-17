@extends('client.layouts.main')

@section('content')

    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ route('client.home') }}">home</a></li>
                            <li>About Us</li>
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
                            <h3 style="color: #af090d; font-weight: bold; text-align: left;">About Us</h3>
                        </div>
                        <div class="privacy_content section_2">
                            <p style="text-align: justify">
                                WAAW, the trendiest fashion brand from Bangladesh, is mostly distinguished for its true international quality designs and fabrics. We are inspired by our customers- souls full of unconventional fashion senses. As a retailer of our parent brand Akij Group, we started our journey in 2013 and now we have 10 stores across Bangladesh and a 24/7 online store. Since origin, we have been offering world class designs at amazing value price. Our product line includes a wide range of fashion clothing, fragrance, and accessories for men, women and children; and many more.
                                Explore WAAW and look through our windows for contemporary global fashion trends.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
