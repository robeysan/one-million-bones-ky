<div class='row'>
	<div class='column grid_1'>&nbsp</div>
	<div class='column grid_10'>
		<div id='stylized' class='myform'>
			<form method='post' action='register/complete'>
				<h1>Register</h1>
				<p>This registry is to document local participants and bones generated by each group.</p>

				<label>First Name<span class="small">First Name</span></label>
				<input type="text" name="first_name" id="first_name"/>
				
				<label>Last Name<span class="small">Last Name</span></label>
				<input type="text" name="last_name" id="last_name" />

				<label>Email<span class="small">Enter your email</span></label>
				<input type="text" name="email" id="email" />

				<label>School<span class="small">School/organization</span></label>
				<input type="text" name="affiliation" id="affiliation" />

				<label>City<span class="small">City or county</span></label>
				<input type="text" name="city" id="city" />

				<label>State<span class="small">State</span></label>
				<input type="text" name="state" id="state" value='Kentucky' />

				<label>Year of birth<span class="small">Birth year</span></label>
				<input type="text" name="dob" id="dob" />

				<label>Phone number<span class="small">###-###-####</span></label>
				<input type="text" name="dob" id="dob" />

				<label>Refered By<span class="small">How did you hear about us?</span></label>

				<select name="refered_by" id="refered_by">
					<option value=''>Select One</option>
					<option value='from_a_friend'>From a friend</option>
					<option value='event'>At an event</option>
					<option value='teacher_or_school'>Teacher or School</option>
					<option value='student'>Student</option>
					<option value='news'>News Media</option>
					<option value='search_engine'>Search Engine</option>
					<option value='other'>Other</option>
				</select>

				<button type="submit">Register</button>
				<div class="spacer"></div>

			</form>
		</div>
	</div>
	<div class='column grid_1'>&nbsp</div>
</div>


<style type="text/css">
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:400px;
padding:14px;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 2px #b7ddf2;
background:#ebf4fb;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
#stylized p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#stylized select{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized button{
clear:both;
margin-left:150px;
width:125px;
height:31px;
background:#666666 url(img/button.png) no-repeat;
text-align:center;
line-height:31px;
color:#FFFFFF;
font-size:11px;
font-weight:bold;
}
</style>