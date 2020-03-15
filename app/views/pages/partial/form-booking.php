<h5 class="card-title">Book your free estimation</h5>    

<form id="booking" name="booking">

<div class="form-group">
    <label for="details" class="lead">Contact details</label>
    <input type="text" class="form-control" id="b_name" name="fullname" placeholder="Full Name">
</div>
<div class="form-group">
    <div class="form-row">
        <div class="col-6">
        <input type="email" class="form-control" id="b_email" aria-describedby="emailHelp" placeholder="Email address" name="email">
        </div>
        <div class="col-6">
        <input type="text" class="form-control postcode" id="b_phone" name="phone" placeholder="Phone Number">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="form-row">
        <div class="col-4">
            <label for="date" class="lead">Date</label>
            <input type="date" class="form-control" id="b_date" name="date" date-format="__/__/____" >
        </div>
        <div class="col-4">
        <label for="time" class="lead">Time</label>
            <input type="time" class="form-control postcode" id="b_time" name="hour">
        </div>
        <div class="col-4">
            <label for="time" class="lead">Location</label>
            <input type="text" class="form-control postcode" id="b_post" name="postcode" placeholder="PostCode">
        </div>
    </div>
</div>
    <button type="button" id="b_book" class="btn btn-md btn-secondary btn-right">Book Now</button>
</form>
