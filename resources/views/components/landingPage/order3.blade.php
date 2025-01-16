<link rel="stylesheet" href="{{ asset('css/order3.css') }}">
<link rel="stylesheet" href="{{ asset('css/order.css') }}">
<section>
  <div class="invoice-container">
        <div class="invoice-header">
            <h1>Invoice</h1>
            <div class="invoice-info">
                <p>Invoice No. <strong>#000123</strong></p>
                <p>Issued on<br>December 7, 2022.</p>
                <p>Payment Due<br>December 22, 2022.</p>
            </div>
        </div>
        <div class="invoice-body">
            <h2>Billed To:</h2>
            <p><strong>Client Name</strong><br>Address / Contact Info</p>
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
                    <tr>
                        <td>Travel</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Room in Japan</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Invoice Item 3</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="invoice-footer">
            <div class="total">
                <span>Total (RP) </span>
            </div>
            <div class="details">
                <div>
                    <h3>Tour and Travel C1</h3>
                    <p>Address / Contact Info</p>
                    <p><a href="mailto:email@company.com">email@company.com</a></p>
                    <p>ID#1 Label<br>1234567890-123</p>
                    <p>ID#2 Label<br>ABC-0987654321</p>
                </div>
                <div>
                    <h3>Payment Instructions</h3>
                    <p>Voluptas nisi aut. Est vitae dolore molestias porro praesentium. Tempore recusandae voluptatem necessitatibus corporis inventore neque magnam ut.</p>
                    <p>ID#1 Label<br>1234567890-123</p>
                    <p>ID#2 Label<br>ABC-0987654321</p>
                </div>
                <div>
                    <h3>Additional Notes</h3>
                    <p>Have a great day</p>
                    <a href="{{ url('/') }}">
                        <button type="button">Home</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="button-container">
        <button class = "button-download" id="download-pdf" type="button">Download PDF</button>
    </div>

</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<!-- <script>
document.getElementById('download-pdf').addEventListener('click', function () {
    const invoiceElement = document.querySelector('.invoice-container'); // Elemen yang ingin diubah menjadi gambar

    // Dapatkan dimensi elemen
    const elementWidth = invoiceElement.offsetWidth; // Lebar elemen dalam piksel
    const elementHeight = invoiceElement.offsetHeight; // Tinggi elemen dalam piksel
    const dpi = 96; // Resolusi standar browser (96 DPI)
    const mmPerInch = 25.4;

    // Hitung ukuran halaman PDF berdasarkan elemen
    const pdfWidth = (elementWidth / dpi) * mmPerInch; // Lebar dalam mm
    const pdfHeight = (elementHeight / dpi) * mmPerInch; // Tinggi dalam mm

    // Buat PDF dengan ukuran halaman dinamis
    const pdf = new jspdf.jsPDF({
        orientation: pdfWidth > pdfHeight ? 'l' : 'p', // Orientasi otomatis
        unit: 'mm',
        format: [pdfWidth, pdfHeight], // Ukuran halaman PDF dinamis
    });

    // Konversi elemen menjadi gambar
    domtoimage.toPng(invoiceElement)
        .then(function (dataUrl) {
            // Tambahkan gambar ke PDF
            pdf.addImage(dataUrl, 'PNG', 0, 0, pdfWidth, pdfHeight);

            // Unduh file PDF
            pdf.save('invoice.pdf');
        })
        .catch(function (error) {
            console.error('Gagal mengonversi ke PDF:', error);
        });
});
</script> -->

<script>
document.getElementById('download-pdf').addEventListener('click', function () {
    const pageElement = document.documentElement; // Target the entire HTML page (document element)

    // Get the dimensions of the entire page
    const elementWidth = pageElement.scrollWidth; // Width of the entire document
    const elementHeight = pageElement.scrollHeight; // Height of the entire document
    const dpi = 96; // Standard browser resolution (96 DPI)
    const mmPerInch = 25.4;

    // Calculate the size of the PDF page based on the entire document's size
    const pdfWidth = (elementWidth / dpi) * mmPerInch; // Width in mm
    const pdfHeight = (elementHeight / dpi) * mmPerInch; // Height in mm

    // Create a new PDF with dynamic page size
    const pdf = new jspdf.jsPDF({
        orientation: pdfWidth > pdfHeight ? 'l' : 'p', // Auto orientation
        unit: 'mm',
        format: [pdfWidth, pdfHeight], // Dynamic page size
    });

    // Convert the entire page (HTML) to an image
    domtoimage.toPng(pageElement)
        .then(function (dataUrl) {
            // Add the image of the entire page to the PDF
            pdf.addImage(dataUrl, 'PNG', 0, 0, pdfWidth, pdfHeight);

            // Save the PDF
            pdf.save('invoice.pdf');
        })
        .catch(function (error) {
            console.error('Failed to convert the entire page to PDF:', error);
        });
});
</script>


