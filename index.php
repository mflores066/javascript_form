<html>
	 <head>
		<title> Java Script Form </title>
	 </head>
	 <body>
		<h1> Student Record </h1>
		<table id="student_table" border = 1>
		</table>
		
		<script>
			const studentTable= document
				.getElementById("student_table");
				
			console.log(studentTable);
			
			const row1 = studentTable.insertRow();
			const row1col1 = row1.insertCell();
			const row1col2 = row1.insertCell();
			
			row1col1.innerHTML = "Last Name";
			row1col2.innerHTML = "First Name";
			
			const row2 = studentTable.insertRow();
			const row2col1 = row2.insertCell();
			const row2col2 = row2.insertCell();
			
			const inputLastName = document.createElement("input");
			inputLastName.type="text";
			inputLastName.placeholder="Insert Last Name";
			inputLastName.name="last_name";
			
			row2col1.append(inputLastName);
			
			const inputFirstName = document.createElement("input");
			inputFirstName.type="text";
			inputFirstName.placeholder="Insert First Name";
			inputFirstName.name="first_name";
			
			row2col2.append(inputFirstName);
			
			const row3 = studentTable.insertRow();
			const row3col1 = row3.insertCell();
			row3col1.colSpan="2";
			
			const inputSubmit = document.createElement("input");
			inputSubmit.type="submit";
			inputSubmit.value="Create Record";
			
			row3col1.append(inputSubmit);
			
			const studentForm=document.createElement("form");
			studentForm.appendChild(studentTable);
			studentForm.action="create.php";
			studentForm.method="Post";
			
			body = document.getElementsByTagName('body')[0];
			body.append(studentForm);
		</script>
	 </body>
</html>
	 