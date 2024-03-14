// Server side validation
// filter inputs
$name = filter_input (INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$age = filter_input (INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);

//Validate inputs
$name = htmlspecialchars($name);
$age = htmlspecialchars($age);

if (!preg_match('/^[a-zA-Z\s]+$/',$name)) {
	echo 'Name can only contain letters and spaces.';
	exit();
	}
if (!preg_match('/^[0-9]+$/', $age)) {
	echo 'Age can only be integers.';
	exit();
	}