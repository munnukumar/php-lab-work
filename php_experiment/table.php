<DOCTYP html>
<head>
<style>
	table{
		border:5px;
		padding:10px;
		margin:10px;
		background-color:skyblue;
	}
	h1{
		color:red;
}
</style>
<body>
	<h1>TIME TABLE</h1>
	<form>
		COURSE-ID:- 
		<input type=text name=COURSE-ID><br>
		COURSE-NAME :- 
		<input type=text name=course-name><br>
		FACULTY-ID :- 
		<input type=text name=faculty-id><br>
		NAME :-
		<input type=text name=name>
	</form>
	<table border=3px>
		<tr>
			<th><?php echo "TIME"?></th>
			<th><?php echo "MON"?></th>
			<th><?php echo "TUE"?></th>
			<th><?php echo "WED"?></th>
		        <th><?php echo "THU"?></th>
			<th><?php echo "FRI"?></th>
		</tr>
			<td><?php echo "8am"?></td>
			<td><?php echo "PHP"?></td>
			<td><?php echo "DMS"?></td>
			<td><?php echo "PHP"?></td>
			<td><?php echo "OS"?></td>
			<td style="background-color:red"rowspan="2"><?php echo "ADBMS LAB"?></td>
		</tr>
		  <tr>
                        <td><?php echo "9am"?></td>
                        <td><?php echo "OS"?></td>
                        <td><?php echo "ADBMS"?></td>
                        <td><?php echo "OS"?></td>
                        <td><?php echo "FLA"?></td>
                 </tr>
		<tr>
                        <td><?php echo "10am"?></td>
                        <td><?php echo "ADBMS"?></td>
                        <td><?php echo "FLA"?></td>
                        <td style="background-color:red" rowspan="2"><?php echo "PHP LAB"?></td>
                        <td><?php echo "DMS"?></td>
                        <td><?php echo "FLA"?></td>
                </tr>
		<tr>
                        <td><?php echo "11am"?></td>
                        <td><?php echo "DAA"?></td>
                        <td><?php echo "DAA"?></td>
                
                        <td style="background-color:lightgreen" rowspan="2"><?php echo "BREAK"?></td>
                        <td><?php echo " ADBMS"?></td>
                </tr>
		<tr>
                        <td><?php echo "12pm"?></td>
                        <td style="background-color:lightgreen"><?php echo "BREAK"?></td>
                        <td style="background-color:lightgreen"><?php echo "BREAK"?></td>
                        <td style="background-color:lightgreen"><?php echo "BREAK"?></td>
                        <td style="background-color:lightgreen"><?php echo "BREAK"?></td>
                </tr>
		<tr>
                        <td><?php echo "1pm"?></td>
                        <td><?php echo "DMS"?></td>
                        <td><?php echo "PHP"?></td>
                        <td><?php echo "OSS"?></td>
                        <td><?php echo "PYTHON"?></td>
                        <td><?php echo "PYTHON"?></td>
                </tr>
 		<tr>
                        <td><?php echo "2pm"?></td>
                        <td style="background-color:red" rowspan="3"><?php echo "PYTHON LAB"?></td>
                        <td style="background-color:red" rowspan="3"><?php echo "OS LAB"?></td>
                        <td><?php echo "DAA"?></td>
                        <td><?php echo "OSS"?></td>
                        <td style="background-color:red" rowspan="3"><?php echo "DAA LAB"?></td>
                </tr>
		<tr>
                        <td><?php echo "3pm"?></td>
                        <td><?php echo "OSS"?></td>
                </tr>
		<tr>
                        <td><?php echo "4pm"?></td>
                       <td><?php echo "ADBMS"?></td>
                </tr>
	</table>
</body>
</html>
















