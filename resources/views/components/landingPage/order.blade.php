<link rel="stylesheet" href="{{ asset('css/order.css') }}">
<section>
<div class="container">
        <div class="header">
            <h1>Order Form</h1>
        </div>  
        <div class="form-title">Post Your Requirements</div>
        <div class="form-subtitle">
          Please fill the form below to receive a invoice of your order.<br>Please add all the details required.
        </div>
        <div class="form-container">
            <h2>Contact details</h2>
            <p>Please fill your information so we can get in touch with you.</p>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" placeholder="Your Name">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" placeholder="(123) 456 - 7890">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Your Mail ID">
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" id="date" placeholder="dd - mm - yyyy">
            </div>
        </div>
        <div class="form-button">
                <button type="button">Next</button>
            </div>  
    </div>
</section>