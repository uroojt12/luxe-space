<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home-Storage & Move</title>
    <?php include_once('includes/site-master.php') ?>
</head>
<body>
<?php include_once('includes/header.php') ?>
<!-- ================apply-area -->
<section class="apply-content">
    <div class="contain">
        <div class="flex">
            <div class="col col2">
                <div class="inside">
                    <form action="">
                        <div class="form-heading">
                            <h1>Make Your Booking Now</h1>
                        </div>
                            <h2>Personal Information</h2>
                       <div class="half">
                            <div class="inner">
                                <label for="first-name" class>
                                    First Name
                                    <abbr class="required" title="required">*</abbr>
                                </label>
                                <input type="text" class="input-text" name="first-name" id="first-name" placeholder>
                            </div>
                            <div class="inner">
                                <label for="last-name">
                                    Last Name
                                    <abbr class="required" title="required">*</abbr>
                                </label>
                                <input type="text" class="input-text" name="last-name" id="last-name" placeholder value>
                            </div>
                       </div>
                       <div class="half ">
                            <div class="inner">
                                <label for="Email">
                                    Email
                                    <abbr class="required" title="required">*</abbr>
                                </label>
                                <input type="email" class="input-text" name="email" id="email" placeholder value>
                            </div>
                            <div class="inner">
                                <label for="phone">
                                    Phone
                                    <abbr class="required" title="required">*</abbr>
                                </label>
                                <input type="tel" class="input-text" name="phone" id="phone" placeholder value>
                            </div>
                       </div>
                       <p class="lower">
                            <label for="country">
                                Country
                                <abbr class="required" title="required">*</abbr>
                            </label>
                            <select name="driver-country" id="driver-country" class="country_to_state country_select">
                                <option value="">Select a country…</option>
                                <option value="AM">America</option>
                                <option value="PK">Pkistan</option>
                                <option value="IN">India</option>
                                <option value="BN">Bangladaish</option>
                                <option value="CH">China</option>
                                <option value="AQ">Antarctica</option>
                                <option value="Al">Algeria</option>
                                <option value="AF">Afghanistan</option>
                                <option value="DZ">Albania</option>
                            </select>
                        </p>
                        <p>
                            <label for="state">
                                State
                                <abbr class="required" title="required">*</abbr>
                            </label>
                            <input type="text" class="input-text" name="state" id="state" placeholder="" value>
                       </p>
                       <div class="half ">
                            <div class="inner">
                                <label for="driver-postcode">
                                    ZIP code
                                </label>
                                <input type="tel" class="input-text" name="postcode" id="postcode" placeholder value>
                            </div>
                            <div class="inner">
                                <label for="city">
                                    Town / City
                                </label>
                                <input type="tel" class="input-text" name="city" id="city" placeholder value>
                            </div>
                       </div>
                       <div class="licence-info">
                            <div class="half">
                                <div class="inner">
                                    <label for="address">
                                        Address
                                        <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <input type="text" class="input-text" name="address" id="address" placeholder value>
                                </div>
                                <div class="inner">
                                    <label for="phone-2">
                                        Phone no of co-host 
                                        <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <input type="tel" class="input-text" name="phone-2" id="phone-2" placeholder value>
                                </div>
                            </div>
                            <div class="selection">
                                <ul class="margin-1">
                                <li class="style-me">
                                        <button type="button" id="book_tour" class="active">
                                            Book Tour
                                        </button>
                                   </li>
                                   <li class="style-me">
                                        <button type="button" id="book_event" >
                                            Book Event
                                        </button>
                                   </li> 
                                   
                                </ul>
                                <div class="bton " id="tour_block">
                                    <h2 class="m-1">Select Your Date & Time</h2>
                                    <div class="half">
                                        <div class="inner">
                                            <input type="text" class="input-text datepicker " name="date" id="" placeholder="Pick Date">
                                        </div>
                                        <div class="inner">
                                            <select name="event" id="event" class="country_to_state country_select">
                                                <option value="">Pick Time</option>
                                                <option value="AM">10am-11am</option>
                                                <option value="PK">11am-12pm</option>
                                                <option value="IN">12pm-1pm</option>
                                                <option value="BN">1pm-2pm</option>
                                                <option value="BN">2pm-3pm</option>
                                                <option value="BN">3pm-4pm</option>
                                                <option value="BN">4pm-5pm</option>
                                                <option value="BN">5pm-6pm</option>
                                                <option value="BN">7pm-8pm</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="bton2 hide" id="event_block">
                                    <h2 class="m-1">Select Your Date,Time & Package</h2>
                                    <div class="half">
                                        <div class="inner">
                                            <input type="text" class="input-text datepicker" name="date" id="" placeholder="Pick Date">
                                        </div>
                                        <div class="inner">
                                            <select name="p-time" id="p-time" class="country_to_state country_select">
                                                <option value="">Pick Time</option>
                                                <option value="AM">10am-11am</option>
                                                <option value="PK">11am-12pm</option>
                                                <option value="IN">12pm-1pm</option>
                                                <option value="BN">1pm-2pm</option>
                                                <option value="BN">2pm-3pm</option>
                                                <option value="BN">3pm-4pm</option>
                                                <option value="BN">4pm-5pm</option>
                                                <option value="BN">5pm-6pm</option>
                                                <option value="BN">7pm-8pm</option>
                                            </select>
                                        </div>
                                    </div>
                                    <p class="lower">
                                        <select name="package" id="package" class="country_to_state country_select">
                                            <option value="">Select Package</option>
                                            <option value="AM">Package 1</option>
                                            <option value="PK">Package 2</option>
                                            <option value="IN">Package 3</option>
                                            <option value="BN">Package 4</option>
                                        </select>
                                    </p>
                                <div class="checkbox form-group form-box">
                                <div class="form-check checkbox-theme">
                                    <input type="checkbox" class="form-check-input" value="" id="rememberMe">
                                    <label for="rememberMe" class="form-check-label">
                                    Yes, I am 21 years old or older
                                    </label>
                                    <p>(Must be 21 Year)</p>
                                </div>
                            </div>
                        <div class="half ">
                            <div class="inner">
                                <label for="guest">
                                    Number of Guests
                                    <abbr class="required" title="required">*</abbr>
                                 </label>
                                <input type="email" class="input-text" name="guest" id="guest" placeholder value>
                        </div>
                        <div class="inner">
                            <label for="date" class="">
                                Rental Date
                                <abbr class="required" title="required">*</abbr>
                            </label>
                            <input type="text" class="input-text datepicker " name="date" id="" placeholder="MM/DD/YYYYY">
                        </div>
                       </div>
                       <p class="lower">
                            <label for="driver-country">
                                What type of event/party?
                                <abbr class="required" title="required">*</abbr>
                            </label>
                            <select name="event" id="event" class="country_to_state country_select">
                                <option value=""></option>
                                <option value="AM">Reception</option>
                                <option value="PK">Birthday</option>
                                <option value="IN">Engagment</option>
                                <option value="BN">Dinner Party</option>
                            </select>
                        </p>
                        <p class="lower">
                            <label for="private">
                                Private or Public event?
                                <abbr class="required" title="required">*</abbr>
                            </label>
                            <select name="private" id="private" class="country_to_state country_select">
                                <option value="">  </option>
                                <option value="AM">Private</option>
                                <option value="PK">Public</option>
                            </select>
                        </p>
                        <p class="lower">
                            <label for="find">
                                How did you find us?
                                <abbr class="required" title="required">*</abbr>
                            </label>
                            <select name="find" id="find" class="country_to_state country_select">
                                <option value="">  </option>
                                <option value="AM">social media</option>
                                <option value="PK"></option>
                                <option value="IN"></option>
                                <option value="BN"></option>
                                <option value="CH"></option>
                            </select>
                        </p>
                        <div class="additional">
                            <div class="inner">
                                <p>
                                    <label for="comment">
                                        Notes
                                    </label>
                                    <textarea name="comments" id="comments" class="input-text" cols="10" rows="1"></textarea>
                                 </p>
                            </div>
                       </div>
                       <div class="payment">
                                    <h2>Payment</h2>
                                    <div class="half ">
                                        <div class="inner">
                                            <input type="text" class="input-text" name="card-no" id="card-no" placeholder="Card No" value>
                                        </div>
                                        <div class="inner">                           
                                            <input type="text" class="input-text" name="card-holder" id="card-holder" placeholder="Card Holder">
                                        </div>
                                    </div>
                                    <div class="half ">
                                        <div class="inner">                               
                                            <input type="text" class="input-text" name="expiry" id="expiry" placeholder="Expiry(MM/YYYY)" value>
                                        </div>
                                        <div class="inner">
                                            <input type="text" class="input-text" name="cvc" id="" placeholder="CVC">
                                        </div>
                                    </div>
                                </div>
                       </div>
                            </div>
                        </div>
                       <div class="cta">
                        <a href="" class="webBtn colorBtn">Submit</a>
                       </div>
                    </form>
                </div>
            </div>
         
        </div>
    </div>
</section>
<?php include_once('includes/footer.php') ?>
</body>
</html>