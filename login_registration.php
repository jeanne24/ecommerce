<?php function getContent(){ ?>
	<div class="row">
		<div class="col-md-6 login-section">

		</div>
		<div class="col-md-6 login-section">
			<div class="accordion" id="login_reg">
			  <div class="card">
			    <div class="card-header" id="headingOne">
			      <h3 class="mb-0">
			        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
			          Login
			        </button>
			      </h3>
			    </div>

			    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#login_reg">
			      <div class="card-body">
			        <form action="" class="form-group">
			        	<table id="login-form">
			        		<tr>
			        			<td>
			        				<label>Username</label>
			        			</td>
			        			<td>
			        				<input type="text" class="form-control" name="username" value="" id="lusername"placeholder="Username">
			        				
			        			</td>
			        		</tr>
			        		<tr>
			        			<td>
			        				<label>Password</label>
			        			</td>
			        			<td>
			        				<input type="password" class="form-control" name="password" value="" id="lpassword" placeholder="Password">
			        				
			        			</td>
			        		</tr>
			        		<tr><td colspan="2">
			        			<button type="submit" class="btn btn-primary">Login</button>			        			
			        		</td></tr>
			        	</table>
			        </form>
			      </div>
			    </div>
			  </div>
			  <div class="card">
			    <div class="card-header" id="headingTwo">
			      <h3 class="mb-0">
			        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			         	Register
			        </button>
			      </h3>
			    </div>
			    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#login_reg">
			      <div class="card-body">
			      	<p>Please fill out necessary fields (<span class="red">*</span>)</p>
			        <form action="" class="form-group">
			        	<table id="login-form">
			        		<tr>
			        			<td>
			        				<label>First Name<span class="red">*</span></label>
			        			</td>
			        			<td>
			        				<input type="text" class="form-control" name="first_name" value="" id="firstname"placeholder="First name">
			        				
			        			</td>
			        		</tr>
			        		<tr>
			        			<td>
			        				<label>Last Name<span class="red">*</span></label>
			        			</td>
			        			<td>
			        				<input type="text" class="form-control" name="last_name" value="" id="lastname"placeholder="Last name">
			        				
			        			</td>
			        		</tr>
			        		<tr>
			        			<td>
			        				<label>Username<span class="red">*</span></label>
			        			</td>
			        			<td>
			        				<input type="text" class="form-control" name="username" value="" id="username"placeholder="Username">
			        				
			        			</td>
			        		</tr>
			        		<tr>
			        			<td>
			        				<label>Password<span class="red">*</span></label>
			        			</td>
			        			<td>
			        				<input type="password" class="form-control" name="password" value="" id="password" placeholder="Password">
			        				
			        			</td>
			        		</tr>
			        		<tr>
			        			<td>
			        				<label>Re-password<span class="red">*</span></label>
			        			</td>
			        			<td>
			        				<input type="password" class="form-control" name="re-password" value="" id="re-password" placeholder="Password">
			        				
			        			</td>
			        		</tr>
			        		<tr><td colspan="2">
			        			<button type="submit" class="btn btn-primary">Register</button>			        			
			        		</td></tr>
			        	</table>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
<?php };

function getTitle() {
	echo 'Rebook - Login and Registration';
}
require_once "partials/template.php";
 ?>
