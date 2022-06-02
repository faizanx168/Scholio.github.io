<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
	<link rel="stylesheet" href="css/style.css">
    <script src="faizan.js" defer></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
    </style>
    <script src="https://kit.fontawesome.com/1ca0d34845.js" crossorigin="anonymous"></script>
	<script src="//code.jquery.com/jquery.min.js"></script>
</head>
<body>
    <div id="nav-placeholder">

    </div>
    <script>
        $.get("nav.html", function(data){
            $("#nav-placeholder").replaceWith(data);
        });
        </script>
<div class="containerReg">

	<form id="form" class="formReg">
    <div class="headerReg">
		<h2>Colleges</h2>
	</div>
        <div class="form-control">
			<label for="username"></label>
			<input type="text" placeholder="Search Colleges" id="search" />
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username"></label>
			<input type="text" placeholder="First Name" id="fname" />
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username"></label>
			<input type="text" placeholder="Last Name" id="lname" />
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username">Gender</label>
			<select id="sex" class="grade">
				<option value=""></option>
				<option value="1">Male</option>
				<option value="2">Female</option>
			</select>
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username"></label>
			<input type="text" placeholder="GPA" id="gpa" />
			<small>Error message</small>
		</div>

        <div class="headerReg">
		    <h2>Student's Permenant Home Address</h2>
	    </div>

        <div class="form-control">
			<label for="username"></label>
			<input type="text" placeholder="Street Address" id="street" />
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username"></label>
			<input type="text" placeholder="Apartment" id="apartment" />
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username"></label>
			<input type="text" placeholder="City" id="city" />
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username"></label>
			<input type="text" placeholder="State" id="state" />
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username"></label>
			<input type="tel" placeholder="Phone Number" id="number" />
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username"></label>
			<input type="text" placeholder="State" id="state" />
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username">Citizenship</label>
			<select id="citizen" class="grade">
				<option value=""></option>
				<option value="1">Yes</option>
				<option value="2">No</option>
			</select>
			<small>Error message</small>
		</div>

        <div class="headerReg">
		    <h2>Student's Information</h2>
	    </div>

        <div class="form-control">
			<label for="username">Intended/Current Academic Major(s)</label>
			<input type="text" placeholder="Select Academic Major(s)" id="academic" />
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username"></label>
			<input type="text" placeholder="Artistic Interest(s)" id="artistic" />
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username"></label>
			<input type="text" placeholder="Athletic Interest(s)" id="athletic" />
			<small>Error message</small>
		</div>


        <div class="form-control">
			<label for="username">Military Interest or Affiliation</label>
			<select id="military" class="grade">
				<option value=""></option>
				<option value="1">Yes</option>
				<option value="2">No</option>
			</select>
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username">Qualify for Financial Need</label>
			<select id="financial" class="grade">
				<option value=""></option>
				<option value="1">Yes</option>
				<option value="2">No</option>
			</select>
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username">First In Family</label>
			<select id="family" class="grade">
				<option value=""></option>
				<option value="1">Yes</option>
				<option value="2">No</option>
			</select>
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username">High School</label>
			<input type="text" placeholder="" id="highschool" />
			<small>Error message</small>
		</div>

        <div class="form-control">
            <label for="username">Test Scores</label>
            <label for="username">SAT (200-800)</label>
			<input type="text" placeholder="Math" id="math" />
			<input type="text" placeholder="EBRW" id="ebrw" /> <br>
			<input type="text" placeholder="ACT (1-36)" id="act" />
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username">Race</label>
			<input type="text" placeholder="Select Race(s)" id="race" />
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username">Ethnicity</label>
			<input type="text" placeholder="Select Ethnicity(s)" id="ethnicity" />
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username">Religion</label>
			<input type="text" placeholder="Select Religion(s)" id="religion" />
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username">Disabilities/Impairements</label>
			<input type="text" placeholder="Select Disability(s)/Physical Impairment(s)" id="disabilities" />
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username">Interests/Groups/Attributes</label>
			<input type="text" placeholder="Select Interest(s)" id="interest" />
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username">Student Organizations</label>
			<input type="text" placeholder="Select Interest(s)" id="studentOrg" />
			<small>Error message</small>
		</div>

        <div class="form-control">
			<label for="username">Honor Organizations</label>
			<input type="text" placeholder="Select Interest(s)" id="honorOrg" />
			<small>Error message</small>
		</div>

		<button>Finish</button>


	</form>
	
</div>



<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script src="register2.js"></script>

</body>
</html>