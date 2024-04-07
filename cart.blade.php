@extends('layouts.app')

@section('content')
<div class="container">
  
    <h1>سلة التسوق</h1>
    <table class="table">
        <thead>
            <tr>
                <th>رقم المنتج</th>
                <th>اسم المنتج</th>
                <th>السعر</th>
                <th>الكمية</th>
                <th>الضريبة</th>
                <th>الإجمالي</th>
                <th>الوصف</th>
                <th>الصافي</th>
                <th>رقم المستخدم</th>
                <th>اسم المستخدم</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartItems as $item)
            <tr>
                <td>{{ $item->productid }}</td>
                <td>{{ $item->producname }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->Qty }}</td>
                <td>{{ $item->Tax }}</td>
                <td>{{ $item->Total }}</td>
                <td>{{ $item->Desc }}</td>
                <td>{{ $item->Net }}</td>
                <td>{{ $item->Userid }}</td>
                <td>{{ $item->Username }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection