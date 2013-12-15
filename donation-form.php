<form action="https://progressfarm.net/stripe/process.php" method="POST" class="donation-form">
	<div class="tabbable">
		<ul class="nav nav-tabs" id="myTab">
		  <li id="amount-tab" class="active"><a href="#amounts"><span class="tab-number">1</span>Amount</a></li>
		  <li id="name-tab"><a href="#name"><span class="tab-number">2</span>Name</a></li>
		  <li id="payment-tab"><a href="#payment"><span class="tab-number">3</span>Payment</a></li>
		</ul>
		
		<div class="tab-content">
		<div class="messages">
			<!-- Error messages go here go here -->
		</div>
		
		<div class="tab-pane fade in active" id="amounts">
			<div class="form-row form-amount">
				<label class="set"><input type="radio" name="amount" class="set-amount" value="5">$5</label>
				<label class="set"><input type="radio" name="amount" class="set-amount" value="15">$15</label>
				<label class="set"><input type="radio" name="amount" class="set-amount" value="25">$25</label>
				<label class="set"><input type="radio" name="amount" class="set-amount" value="50">$50</label>
				<label class="set"><input type="radio" name="amount" class="set-amount" value="100">$100</label>
				<label class="set"><input type="radio" name="amount" class="set-amount" value="250">$250</label>
				<!--<label><input type="radio" name="amount" class="other-amount" value="0"> Other:</label>--> <input type="text" name="amount" class="amount amount-other text input-lg form-control" placeholder="Other">
			</div>
			
			<a href="#name" data-toggle="tab" class="next-link btn btn-large gotoname">Next &raquo;</a>
		</div><!-- end .tab-pane #amounts -->
		
		<div class="tab-pane fade in" id="name">
			<div class="form-row form-first-name">
				<label>First Name</label>
				<input type="text" name="first-name" class="first-name text form-control">
			</div>
			<div class="form-row form-last-name">
				<label>Last Name</label>
				<input type="text" name="last-name" class="last-name text form-control">
			</div>
			<div class="form-row form-email">
				<label>Email</label>
				<input type="text" name="email" class="email text form-control">
			</div>
			<div class="form-row form-phone">
				<label>Phone</label>
				<input type="text" name="phone" class="phone text form-control">
			</div>
			<div class="form-row form-address">
				<label>Address</label>
				<input type="text" name="address" class="address text form-control" />
			</div>
			<div class="form-row form-city">
				<label>City</label>
				<input type="text" name="city" class="city text form-control">
			</div>
			<div class="form-row form-state">
				<label>State</label>
				<select name="state" class="state text form-control">
					<option value="AL">AL</option>
					<option value="AK">AK</option>
					<option value="AZ">AZ</option>
					<option value="AR">AR</option>
					<option value="CA">CA</option>
					<option value="CO">CO</option>
					<option value="CT">CT</option>
					<option value="DE">DE</option>
					<option value="DC">DC</option>
					<option value="FL">FL</option>
					<option value="GA">GA</option>
					<option value="HI">HI</option>
					<option selected value="IA">IA</option>
					<option value="ID">ID</option>
					<option value="IL">IL</option>
					<option value="IN">IN</option>
					<option value="KS">KS</option>
					<option value="KY">KY</option>
					<option value="LA">LA</option>
					<option value="ME">ME</option>
					<option value="MD">MD</option>
					<option value="MA">MA</option>
					<option value="MI">MI</option>
					<option value="MN">MN</option>
					<option value="MS">MS</option>
					<option value="MO">MO</option>
					<option value="MT">MT</option>
					<option value="NE">NE</option>
					<option value="NV">NV</option>
					<option value="NH">NH</option>
					<option value="NJ">NJ</option>
					<option value="NM">NM</option>
					<option value="NY">NY</option>
					<option value="NC">NC</option>
					<option value="ND">ND</option>
					<option value="OH">OH</option>
					<option value="OK">OK</option>
					<option value="OR">OR</option>
					<option value="PA">PA</option>
					<option value="RI">RI</option>
					<option value="SC">SC</option>
					<option value="SD">SD</option>
					<option value="TN">TN</option>
					<option value="TX">TX</option>
					<option value="UT">UT</option>
					<option value="VT">VT</option>
					<option value="VA">VA</option>
					<option value="WA">WA</option>
					<option value="WV">WV</option>
					<option value="WI">WI</option>
					<option value="WY">WY</option>
				</select>
			</div>
			<div class="form-row form-zip">
				<label>Zip</label>
				<input type="text" name="zip" class="zip text form-control">
			</div>
			
			<div class="form-row form-employer">
				<label>Employer</label>
				<input type="text" name="employer" class="employer text form-control">
			</div>
			<div class="form-row form-occupation">
				<label>Occupation</label>
				<input type="text" name="occupation" class="occupation text form-control">
			</div>
			
			<small class="muted"><em>Iowa election law requires us to collect your employment information. If you are self employed or retired, state that in the fields.</em></small>
			
			<div class="clearfix"></div>
			
			<a href="#payment" data-toggle="tab" class="next-link btn btn-large gotopay">Next &raquo;</a>
			<!--<a href="#amounts" data-toggle="tab" class="next-link gotoamount pull-left">&laquo; Go back</a>-->
			
			<div class="clearfix"></div>
			
		</div><!-- end .tab-pane #name -->
		 <div class="tab-pane fade in" id="payment">
			<div class="form-row form-number">
				<label>Card Number</label>
				<input type="text" autocomplete="off" class="card-number text form-control" value="4242424242424242">
			</div>
			<div class="form-row form-cvc">
				<label>CVC</label>
				<input type="text" autocomplete="off" class="card-cvc text form-control" value="123">
			</div>
			<div class="form-row form-expiry">
				<label>Expiration Date</label><br />
				<select class="card-expiry-month text form-control">
					<option value="01">January</option>
					<option value="02">February</option>
					<option value="03">March</option>
					<option value="04">April</option>
					<option value="05">May</option>
					<option value="06">June</option>
					<option value="07">July</option>
					<option value="08">August</option>
					<option value="09">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
				<select class="card-expiry-year text form-control">
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014" selected>2014</option>
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017">2017</option>
					<option value="2018">2018</option>
					<option value="2019">2019</option>
					<option value="2020">2020</option>
				</select><br /><br />
			</div>
			<div class="form-row form-submit">
				<button id="donate" class="submit-button btn btn-lg btn-block">Contribute</button>
			</div>
		</div>
	</div>
	</div>
</form>
