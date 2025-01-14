<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .invoice-header, .invoice-footer {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
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
</body>
</html>
