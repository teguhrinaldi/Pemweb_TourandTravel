<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class InvoiceController extends Controller
{
    public function showInvoice()
    {
    $data = [
        'invoice_number' => '#000123',
        'issued_date' => 'December 7, 2022',
        'due_date' => 'December 22, 2022',
        'client_name' => 'Client Name',
        'services' => [
            ['name' => 'Travel', 'qty' => 1, 'price' => 4000, 'total' => 4000],
            ['name' => 'Room in Japan', 'qty' => 1, 'price' => 4000, 'total' => 4000],
            ['name' => 'Invoice Item 3', 'qty' => 1, 'price' => 4000, 'total' => 4000],
        ],
        'total' => 12000,
        'company' => 'Tour and Travel C1',
        'contact_email' => 'email@company.com',
        'payment_instructions' => 'Est vitae dolore molestias...',
        'additional_notes' => 'Have a great day',
    ];

    return view('invoices.show', $data);
    }

    public function exportPDF()
    {
        $data = [
            'invoice_number' => '#000123',
            'issued_date' => 'December 7, 2022',
            'due_date' => 'December 22, 2022',
            'client_name' => 'Client Name',
            'services' => [
                ['name' => 'Travel', 'qty' => 1, 'price' => 4000, 'total' => 4000],
                ['name' => 'Room in Japan', 'qty' => 1, 'price' => 4000, 'total' => 4000],
                ['name' => 'Invoice Item 3', 'qty' => 1, 'price' => 4000, 'total' => 4000],
            ],
            'total' => 12000,
            'company' => 'Tour and Travel C1',
            'contact_email' => 'email@company.com',
            'payment_instructions' => 'Est vitae dolore molestias...',
            'additional_notes' => 'Have a great day',
        ];

        $pdf = PDF::loadView('invoices.pdf', $data);
        return $pdf->download('invoice.pdf');
    }
}
