<form method="post" enctype="multipart/form-data">
{{ csrf_field() }}
Docket Number:
<select name="docketType">
	<option value=""></option>
	<option value="A">A</option>
	<option value="SP">SP</option>
	<option value="DR">DR</option>
</select>
<input type="text" name="docketYear" maxlength="2" size="2" placeholder="##">
-
<input type="text" name="docketNumber" maxlength="4" size="4" placeholder="####"><br />
First Name: <input type="text" name="fname"><br />
Last Name: <input type="text" name="lname"><br />
<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
File: <input name="file[]" type="file" id="userfile">
<input type="submit" value="Upload">
</form>
