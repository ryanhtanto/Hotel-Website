<!DOCTYPE html>
<html lang="en">
@include('head')
<body>
    <x-navbar-pages></x-navbar-pages>
    <div class="container-fluid text-center">
        <table class="table">
            <thead>
                <th>Order ID</th>
                <th>Item</th>
                <th>Duration</th>
                <th>Games</th>
                <th>Total Price</th>
                <th>Status</th>
                <th>Ordered at</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        @if($order)
                            <td>{{$order['order_id']}}</td>
                            <td>{{$order['item_name']}}</td>
                            <td>{{$order['duration']}}</td>
                            <td>{{$order['games']}}</td>
                            <td>Rp. {{number_format($order['total_price'], 2)}}</td>
                            <td>{{$order['status']}}</td>
                            <td>{{$order['created_at']}}</td>
                            <td><a href="req_pickup/{{$order['order_id']}}"><button class="btn btn-info" @if($order['status'] != "Sudah Dikirim") disabled @endif>Request Pickup</button></a></td>
                        @endif
                    </tr>  
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>