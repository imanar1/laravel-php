@extends('layouts.app')

@section('content')
<div class="container">
    <h1>الفواتير</h1>
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
            @foreach($invoices as $invoice)
            <tr>
                <td>{{ $invoice->productid }}</td>
                <td>{{ $invoice->producname }}</td>
                <td>{{ $invoice->price }}</td>
                <td>{{ $invoice->Qty }}</td>
                <td>{{ $invoice->Tax }}</td>
                <td>{{ $invoice->Total }}</td>
                <td>{{ $invoice->Desc }}</td>
                <td>{{ $invoice->Net }}</td>
                <td>{{ $invoice->Userid }}</td>
                <td>{{ $invoice->Username }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
