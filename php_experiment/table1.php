<!DOCTYPE html>
<html>
<body>
        <h1>TIME TABLE</h1>
        <form method = "post">
		COURSE-ID:-
               <select name="COURSE-ID"><br>
		 COURSE-ID
		 <option> Choose</option> 
                <option value="PHP-LAB1"> PHP-LAB1</option>
		 <option value="ADBMS-LAB1"> ADBMS-LAB1></option>
		 <option value="DAA-LAB1"> DAA-LAB1></option>
		 <option value="PYTHON-LAB1"> PYTHON-LAB1></option>
		 <option value="OS-LAB1"> OS-LAB1></option>
		</select><br>
		 COURSE-NAME :-
		 <select name="COURSE-NAME">
		 	<option> Choose</option> 
                	<option value="PHP"> PHP</option>                    
                 	<option value="ADBMS"> ADBMS</option> 
                 	<option value="DAA"> DAA</option>
                 	<option value="PYTHON"> PYTHON</option>
                 	<option value="OS"> OS</option>
                </select><br>
		FACULTY-NMAE :-
		<select>
			<option> Choose</option> 
                        <option value="Durgansh"> Durganesh</option>
                        <option value="Ankit khere"> Ankit khere</option> 
                        <option value="Sunil kumar"> sunil kumar</option>
                        <option value="Kamal preet"> kamal preet</option>
                        <option value="Himanshu sahu"> Himanshu sahu</option>
                </select><br>
		FACULTY-ID :-
		<select>
			<option> Choose</option> 
                        <option value="PHP12"> PHP12</option>
                        <option value="ADBMS12"> ADBMS12</option> 
                        <option value="DAA12"> DAA12</option>
                        <option value="PYTHON12"> PYTHON12</option>
                        <option value="OS12"> OS12</option>
                </select><br>

 
		<input type="submit" name="submit">
        </form>

<?php
	if(isset($_POST['COURSE-ID'])){
		$some_var = $_POST['COURSE-ID'];}
	if(isset($_POST['COURSE-NAME'])){
		$some_var = $_POST['COURSE-NAME'];}
	echo $some_var;
?>
