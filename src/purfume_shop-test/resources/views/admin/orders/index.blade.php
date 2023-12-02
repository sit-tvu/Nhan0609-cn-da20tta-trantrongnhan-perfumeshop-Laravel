@extends('layouts.admin')

@section('title')
    Đơn Đặt Hàng
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Đơn Hàng Mới
                        <a href="{{ 'order-history' }} " class="btn btn-warning float-right"> Lịch Sử Đặt Hàng</a>
                    </h4>
                </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Ngày Đặt Hàng</th>
                                    <th>Tracking Number</th>
                                    <th>Tổng Tiền</th>
                                    <th>Trạng Thái</th>
                                    <th>Xử Lý</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $item)

                                    <tr>
                                        <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                                        <td>{{ $item->tracking_no }}</td>
                                        <td>{{ $item->total_price }}</td>
                                        <td>{{ $item->status == '0' ? 'Chưa Xử Lý':'Đã Xử Lý'}} </td>
                                        <td>
                                            <a href="{{ url('admin/view-order/'.$item->id)}}" class="btn btn-primary">Xem</a>
                                        </td>
                                    </tr> 
        
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection