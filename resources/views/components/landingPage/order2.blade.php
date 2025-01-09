<link rel="stylesheet" href="{{ asset('css/order2.css') }}">
<section>
<div class="container2">
        <div class="header2">
            <h1>Order Form</h1>
        </div>
        <div class="form-section2">
            <h2>Your Requirements</h2>
            <div class="form-group2">
                <label for="location">Location</label>
                <div class="input-wrapper2">
                    <select id="location">
                        <option>City</option>
                    </select>
                    <i class="fas fa-chevron-down icon2"></i>
                </div>
            </div>
            <div class="form-group2">
                <label for="people">Number of People</label>
                <input type="text" id="people" value="01">
            </div>
            <div class="form-group2">
                <label for="checkin">Check In</label>
                <div class="input-wrapper2">
                    <input type="date" id="checkin" placeholder="dd-mm-yyyy">
                    <i class="fas fa-calendar-alt icon2"></i>
                </div>
            </div>
            <div class="form-group2">
                <label for="checkout">Check Out</label>
                <div class="input-wrapper2">
                    <input type="date" id="checkout" placeholder="dd-mm-yyyy">
                    <i class="fas fa-calendar-alt icon2"></i>
                </div>
            </div>
            <div class="form-group2">
                <label for="room">Room</label>
                <div class="input-wrapper2">
                    <select id="room">
                        <option>Area</option>
                    </select>
                    <i class="fas fa-chevron-down icon2"></i>
                </div>
            </div>
            <div class="form-group2">
                <label for="preferences">Any specific preferences</label>
                <div class="input-wrapper2">
                    <select id="preferences">
                        <option>Yes</option>
                    </select>
                    <i class="fas fa-chevron-down icon2"></i>
                </div>
            </div>
            <div class="form-group2">
                <textarea placeholder="Please mention here"></textarea>
            </div>
            <div class="buttons2">
                <button class="back2">Back</button>
                <button class="submit2">Submit</button>
            </div>
        </div>
    </div>
</section>
