<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <link rel="stylesheet" href="{{ asset('css/pdf.css') }}">
</head>
<body>
    <div class="invoice-header">
        <h1>Invoice</h1>
        <p>Invoice No: {{ $invoice_number }}</p>
        <p>Issued on: {{ $issued_date }}</p>
        <p>Payment Due: {{ $due_date }}</p>
    </div>

    <div>
        <h2>Billed To:</h2>
        <p>{{ $client_name }}</p>
    </div>

    <h2>Services</h2>
    <table>
        <thead>
            <tr>
                <th>Service</th>
                <th>Qty.</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
            <tr>
                <td>{{ $service['name'] }}</td>
                <td>{{ $service['qty'] }}</td>
                <td>{{ $service['price'] }}</td>
                <td>{{ $service['total'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="invoice-footer">
        <h3>Total (RP): {{ $total }}</h3>
        <p>Company: {{ $company }}</p>
        <p>Email: <a href="mailto:{{ $contact_email }}">{{ $contact_email }}</a></p>
        <p>Payment Instructions: {{ $payment_instructions }}</p>
        <p>Notes: {{ $additional_notes }}</p>
    </div>

    <!-- Tombol Download PDF -->
    <div style="text-align: center;">
        <a href="{{ url('/export-pdf') }}" class="btn-download">Download PDF</a>
    </div>
</body>
</html>
