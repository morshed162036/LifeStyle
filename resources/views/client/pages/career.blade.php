@extends('client.layouts.main')

@section('content')

    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ route('client.home') }}">home</a></li>
                            <li>Career</li>
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
                            <h3 style="color: #af090d; font-weight: bold; text-align: left;">CAREER</h3>
                        </div>
                        <div class="privacy_content section_2">
                            <p style="text-align: justify">
                               <strong> HR Related Queries:</strong> career@waaw.com
                                <br>
                                <strong>Recruitment Related Queries:</strong> career@waaw.com

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
