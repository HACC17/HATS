<!DOCTYPE html>
<html>
<body>

<form action="" method="post">
	{{ csrf_field() }}
	<p>
		Docket Number:
		<select name="docketType">
			<option value=""></option>
			<option value="A">A</option>
			<option value="SP">SP</option>
			<option value="DR">DR</option>
		</select>
		<input type="text" name="docketYear" maxlength="2" size="2">
		-
		<input type="text" name="docketNumber" maxlength="4" size="4">
	</p>
	<p>
		Docket Name: 
		<input type="text" name="docketName">
	</p>
	<p>
		Project Name: 
		<input type="text" name="project">
	</p>
	<input type="submit">
</form>

</body>
</html>

