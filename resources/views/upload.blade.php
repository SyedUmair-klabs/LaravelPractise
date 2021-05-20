<h1>Upload a file</h1>
<form action="uploaded" method="POST" enctype="multipart/form-data">
@csrf
<input type="file" name="myfile"><br><br>
<button type="submit">Upload file</button>
</form>