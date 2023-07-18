@extends('layouts.master')
@section('title')
    <title>Home Page</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('home/home.css') }}">
@endsection

@section('js')
    <script src="{{ asset('vendors/sweetAlert2/sweetAlert2.js') }}"></script>
    <script src="{{ asset('home/home.js') }}"></script>
    <script src="{{ asset('AddToCart/add.js') }}"></script>
@endsection

@section('content')
    {{-- slider --}}
    @include('home.components.slider')
    {{-- endslider --}}

    <section>
        <div class="container">
            <div class="row">

                @include('components.sidebar')

                <div class="col-sm-9 padding-right">
                    <!--features_items-->
                    @include('home.components.feature_product')
                    <!--features_items-->

                    <!--/category-tab-->
                    @include('home.components.category_tabs')
                    <!--/category-tab-->

                    <!--/recommended_items-->
                    @include('home.components.recommend_product')
                    <!--/recommended_items-->

                </div>
            </div>
        </div>
    </section>


    <!--/Footer-->
@endsection

</html>
