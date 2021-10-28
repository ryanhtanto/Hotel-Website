<!DOCTYPE html>
<html lang="en">
@include('head')
<body>
    <x-admin_navbar></x-admin_navbar>
    <div class="container-fluid">
        <table class="table table-light table-hover text-center">
            <thead>
                <th>Order ID</th>
                <th>User ID</th>
                <th>Item</th>
                <th>Duration</th>
                <th style="width: 25%">Games</th>
                <th>Total Price</th>
                <th>Status</th>
                <th>Ordered at</th>
                <th>Change Status</th>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{$order['order_id']}}</td>
                        <td>{{$order['user_id']}}</td>
                        <td>{{$order['item_name']}}</td>
                        <td>{{$order['duration']}}</td>
                        <td>{{$order['games']}}</td>
                        <td>Rp. {{number_format($order['total_price'], 2)}}</td>
                        <td>{{$order['status']}}</td>
                        <td>{{$order['created_at']}}</td>
                        <td>
                            <form method="POST" action="{{url('change_status/'.$order['order_id'])}}">
                                @csrf
                                <select class="form-control" name="new_status">
                                    <option value="Sudah Dikirim" @if($order['status'] != 'Sedang dikirim') disabled @endif>Sudah Dikirim</option>
                                    <option value="Selesai" @if($order['status'] != 'Siap di Pick-up') disabled @endif>Selesai</option>
                                </select>
                                <br>
                                <button class="btn btn-info" type="submit">Change</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>