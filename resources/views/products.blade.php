@extends('layout')

@section('title', 'Products')

@section('content')

    <div class="container products">
        <h1>ベトナム店へようこそ</h1>
        <div class="row">

            @foreach ($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{ $product->photo }}" width="500" height="200">
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ str_limit(strtolower($product->description), 70) }}</p>
                            <p><strong>価格: </strong> {{ $product->price }}￥</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/' . $product->id) }}"
                                    class="btn btn-success btn-block text-center" role="button">カートに入れ</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!-- End row -->
    </div>
    <div id="wrapper">
        <div class="center">
            {{ $products->appends(['sort' => 'votes'])->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
