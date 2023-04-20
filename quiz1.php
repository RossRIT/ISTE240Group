<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quiz 1</title>
	<link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
	<?php
	    include("assets/php/nav.php");
    ?>
	<h1>Command-Line Quiz</h1>
	<p>Test your knowledge on basic commands, file operations, directory management, remote access, and file transfers.
	</p>

	<form>
		<!-- Question 1 -->
		<h3>1. Which command is used to display the current directory?</h3>
		<label>
			<input type="radio" name="q1" value="a">
			a. pwd
		</label><br>
		<label>
			<input type="radio" name="q1" value="b">
			b. cd
		</label><br>
		<label>
			<input type="radio" name="q1" value="c">
			c. ls
		</label><br>
		<label>
			<input type="radio" name="q1" value="d">
			d. mkdir
		</label><br><br>

		<!-- Question 2 -->
		<h3>2. What is the command to create a new directory?</h3>
		<label>
			<input type="radio" name="q2" value="a">
			a. pwd
		</label><br>
		<label>
			<input type="radio" name="q2" value="b">
			b. cd
		</label><br>
		<label>
			<input type="radio" name="q2" value="c">
			c. ls
		</label><br>
		<label>
			<input type="radio" name="q2" value="d">
			d. mkdir
		</label><br><br>

		<!-- Question 3 -->
		<h3>3. What is the command to list the contents of a directory?</h3>
		<label>
			<input type="radio" name="q3" value="a">
			a. ls
		</label><br>
		<label>
			<input type="radio" name="q3" value="b">
			b. cd
		</label><br>
		<label>
			<input type="radio" name="q3" value="c">
			c. mkdir
		</label><br>
		<label>
			<input type="radio" name="q3" value="d">
			d. pwd
		</label><br><br>

		<!-- Question 4 -->
		<h3>4. What is the command to transfer files between a local machine and a remote server over SSH?</h3>
		<label>
			<input type="radio" name="q4" value="a">
			a. ftp
		</label><br>
		<label>
			<input type="radio" name="q4" value="b">
			b. scp
		</label><br>
		<label>
			<input type="radio" name="q4" value="c">
			c. sftp
		</label><br>
		<label>
			<input type="radio" name="q4" value="d">
			d. wget
		</label><br><br>

		<button type="submit" id="submit-btn">Submit</button>
	</form>

	<script>
		const answers = ['a', 'd', 'a', 'b'];
		const form = document.querySelector('form');
		const submitBtn = document.querySelector('#submit-btn');

		form.addEventListener('submit', (e) => {
			e.preventDefault();
			let score = 0;
			const userAnswers = [
				form.q1.value,
				form.q2.value,
				form.q3.value,
				form.q4.value
			];

			// Check user's answers against the correct answers
			userAnswers.forEach((answer, index) => {
				if (answer === answers[index]) {
					score += 25;
				}
			});

			// Show the user's score
			alert(`You scored ${score}%`);
		});
	</script>
	<?php
	    include("assets/php/footer.php");
    ?>
</body>