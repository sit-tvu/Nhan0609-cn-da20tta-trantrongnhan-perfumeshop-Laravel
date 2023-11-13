@extends('layouts.front')

@section('title', $products->name)
    
@section('content')
    
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">Bộ sưu tập / {{ $products->category->name }} / {{$products->name}} </h6>
        </div>
    </div>

    <div class="container">
        <div class="card-shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-mb4 border-right">
                        <img src="{{ asset('assets/uploads/products/'.$products->image) }}" class="" alt="">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{ $products->name }}
                            @if($products->trending == '1')
                                <label style="font-size: 16px;" class="float-end badge bg-danger trending_tag">Trending </label>
                            @endif
                        </h2>

                        <hr>
                        <label class="me-3">Giá Gốc: <s> {{ $products->original_price }}</s></label>
                        <label class="fw-bold">Giảm Còn: {{ $products->selling_price }}</label>
                        <p class="mt-3">
                            {!! $products->small_description !!}
                        </p>
                        <hr>
                    @if($products->qty > 0)
                        <label class="bagde bg-success">Còn Hàng</label>
                    @else
                        <label class="bagde bg-danger">Hết Hàng</label>
                    @endelse
                    @endif
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <label for="Quantity">Số lượng</label>
                            <div class="input-group text-center mb-3">
                                <span class="input-group-text">-</span>
                                <input type="text" name="quantity" value="1" class="form-control" />
                                <span class="input-group-text">+</span>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <br>
                            <button type="button" class="btn btn-success me-3 float-start">Thêm vào danh sách yêu thích</button>
                            <button type="button" class="btn btn-primary me-3 float-start">Thêm Vòa Giỏ Hàng</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection