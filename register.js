//register-1
const form = document.getElementById('form');
const date = document.getElementById('date');
const grade = document.getElementById('grade');
const zipcode = document.getElementById('zipcode');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

//register-2 

//const form = document.getElementById('form');
const search = document.getElementById('search');
const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const sex = document.getElementById('sex');
const gpa = document.getElementById('gpa');
const street = document.getElementById('street');
const apartment = document.getElementById('apartment');
const city = document.getElementById('city');
const state = document.getElementById('state');
const citizen = document.getElementById('citizen');
const academic = document.getElementById('academic');
const artistic = document.getElementById('artistic');
const athletic = document.getElementById('athletic');
const military = document.getElementById('military');
const financial = document.getElementById('financial');
const family = document.getElementById('family');
const highschool = document.getElementById('highschool');
const math = document.getElementById('math');
const ebrw = document.getElementById('ebrw');
const act = document.getElementById('act');
const race = document.getElementById('race');
const ethnicity = document.getElementById('ethnicity');
const religion = document.getElementById('religion');
const disabilities = document.getElementById('disabilities');
const interest = document.getElementById('interest');
const studentOrg = document.getElementById('studentOrg');
const honorOrg = document.getElementById('honorOrg');



form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs() {

	// trim to remove the whitespaces -1
	const dateValue = date.value.trim();
	const zipcodeValue = zipcode.value.trim();
	const emailValue = email.value.trim();
	const gradeValue = grade.value.trim();
	const passwordValue = password.value.trim();
	const password2Value = password2.value.trim();

	// trim to remove the whitespaces -2
	
    const searchValue = search.value.trim();
	const fnameValue = fname.value.trim();
	const lnameValue = lname.value.trim();
	const sexValue = sex.value.trim();
	const gpaValue = gpa.value.trim();
	const streetValue = street.value.trim();
    const apartmentValue = apartment.value.trim();
	const cityValue = city.value.trim();
	const stateValue = state.value.trim();
	const citizenValue = citizen.value.trim();
	const academicValue = academic.value.trim();
	const artisticValue = artistic.value.trim();
    const athleticValue = athletic.value.trim();
	const militaryValue = military.value.trim();
	const financialValue = financial.value.trim();
	const familyValue = family.value.trim();
	const highschoolValue = highschool.value.trim();
	const mathValue = math.value.trim();
    const ebrwValue = ebrw.value.trim();
	const actValue = act.value.trim();
	const raceValue = race.value.trim();
	const ethnicityValue = ethnicity.value.trim();
	const religionValue = religion.value.trim();
	const disabilitiesValue = disabilities.value.trim();
    const interestValue = interest.value.trim();
	const studentOrgValue = studentOrg.value.trim();
	const honorOrgValue = honorOrg.value.trim();

    //part-1

	if(gradeValue === '') {
		setErrorFor(grade, 'Grade cannot be blank');
	} else {
		setSuccessFor(grade);
	}

	if(dateValue === '') {
		setErrorFor(date, 'Date cannot be blank');
	}else if (!isDate(dateValue)){
		setErrorFor(date, 'Not a valid Date')
	} else {
		setSuccessFor(date);
	}

	if(zipcodeValue === '') {
		setErrorFor(zipcode, 'Zip Code cannot be blank');
	} else {
		setSuccessFor(zipcode);
	}
	
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}
	
	if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
	} else {
		setSuccessFor(password);
	}
	
	if(password2Value === '') {
		setErrorFor(password2, 'Password2 cannot be blank');
	} else if(passwordValue !== password2Value) {
		setErrorFor(password2, 'Passwords does not match');
	} else{
		setSuccessFor(password2);
	}
	
	// if(usernameValue === '') {
	// 	setErrorFor(username, 'Zip Code cannot be blank');
	// } else {
	// 	setSuccessFor(username);
	// }	
	if(searchValue === '') {
		setErrorFor(search, 'Search cannot be blank');
	} else {
		setSuccessFor(search);
	}

	if(fnameValue === '') {
		setErrorFor(fname, 'First name cannot be blank');
	} else {
		setSuccessFor(fname);
	}

	if(lnameValue === '') {
		setErrorFor(lname, 'Last name cannot be blank');
	} else {
		setSuccessFor(lname);
	}
	
	if(sexValue === '') {
		setErrorFor(sex, 'Gender cannot be blank');
	} else {
		setSuccessFor(sex);
	}
	
	if(gpaValue === '') {
		setErrorFor(gpa, 'GPA cannot be blank');
	} else {
		setSuccessFor(gpa);
	}
	
	if(streetValue === '') {
		setErrorFor(street, 'Street cannot be blank');
	} else{
		setSuccessFor(street);
	}


    if(apartmentValue === '') {
		setErrorFor(apartment, 'Apartment cannot be blank');
	} else{
		setSuccessFor(apartment);
	}

    if(cityValue === '') {
		setErrorFor(city, 'City cannot be blank');
	} else{
		setSuccessFor(city);
	}

    if(stateValue === '') {
		setErrorFor(state, 'State cannot be blank');
	} else{
		setSuccessFor(state);
	}

    if(citizenValue === '') {
		setErrorFor(citizen, 'Citizen cannot be blank');
	} else{
		setSuccessFor(citizen);
	}

    if(academicValue === '') {
		setErrorFor(academic, 'Academic cannot be blank');
	} else{
		setSuccessFor(academic);
	}

    if(artisticValue === '') {
		setErrorFor(artistic, 'Artistic cannot be blank');
	} else{
		setSuccessFor(artistic);
	}

    if(athleticValue === '') {
		setErrorFor(athletic, 'Athletic cannot be blank');
	} else{
		setSuccessFor(athletic);
	}


    if(militaryValue === '') {
		setErrorFor(military, 'Military cannot be blank');
	} else{
		setSuccessFor(military);
	}

    if(financialValue === '') {
		setErrorFor(financial, 'Financial cannot be blank');
	} else{
		setSuccessFor(financial);
	}

    if(familyValue === '') {
		setErrorFor(family, 'This cannot be blank');
	} else{
		setSuccessFor(family);
	}

    if(highschoolValue === '') {
		setErrorFor(highschool, 'Highschool cannot be blank');
	} else{
		setSuccessFor(highschool);
	}

    if(mathValue === '') {
		setErrorFor(math, 'Math cannot be blank');
	} else{
		setSuccessFor(math);
	}

    if(ebrwValue === '') {
		setErrorFor(ebrw, 'EBRW cannot be blank');
	} else{
		setSuccessFor(ebrw);
	}

    if(actValue === '') {
		setErrorFor(act, 'ACT cannot be blank');
	} else{
		setSuccessFor(act);
	}

    if(raceValue === '') {
		setErrorFor(race, 'Race cannot be blank');
	} else{
		setSuccessFor(race);
	}

    if(ethnicityValue === '') {
		setErrorFor(ethnicity, 'Ethnicity cannot be blank');
	} else{
		setSuccessFor(ethnicity);
	}


    if(religionValue === '') {
		setErrorFor(religion, 'Religion cannot be blank');
	} else{
		setSuccessFor(religion);
	}

    if(disabilitiesValue === '') {
		setErrorFor(disabilities, 'Disabilites cannot be blank');
	} else{
		setSuccessFor(disabilities);
	}

    if(interestValue === '') {
		setErrorFor(interest, 'Interests cannot be blank');
	} else{
		setSuccessFor(interest);
	}

    if(studentOrgValue === '') {
		setErrorFor(studentOrg, 'This cannot be blank');
	} else{
		setSuccessFor(studentOrg);
	}

    if(honorOrgValue === '') {
		setErrorFor(honorOrg, 'This cannot be blank');
	} else{
		setSuccessFor(honorOrg);
	}
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function isDate(date){
	return /(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/.test(date);
}
































