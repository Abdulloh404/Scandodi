@extends('layouts.dashboard')

@section('title',trans('layout.restaurant_owner_create'))

@section('css')

@endsection

@section('main-content')
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>{{trans('layout.restaurant_owner')}}</h4>
                <p class="mb-0">{{trans('layout.create')}}</p>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('layout.home')}}</a></li>
                @if(auth()->user()->type =='admin')
                    <li class="breadcrumb-item"><a href="{{route('customers.index')}}">{{trans('layout.customer')}}</a></li>
                @else
                    <li class="breadcrumb-item"><a href="{{route('customers.index')}}">{{trans('layout.staff')}}</a></li>
                @endif
                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{trans('layout.create')}}</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-xxl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{trans('layout.create')}}</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('customers.store')}}" method="post" id="step-form-horizontal"
                          class="step-form-horizontal" enctype="multipart/form-data">
                        @include('customer.form')
                        <div class="pull-right">
                            <button class="btn btn-primary btn-sm" type="submit">{{trans('layout.submit')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        const address = $('#billing_street_address').val();
        const post_code = $('#billing_post_code').val();
        const town = $('#billing_town').val();
        console.log(address);
        if (address != '' || post_code != '' || town != '') {
            $('#alternativeLabel').trigger('click');
        }
    </script>

@endsection
