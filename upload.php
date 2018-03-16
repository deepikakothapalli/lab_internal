<link href="upload.css" rel="stylesheet">
<div id="form">
    <form action="storedetails.php" method="POST">
        <label>property</label>
        <input type="text" name="property" required><br><br>
        <input type="file" name="fileupload" id="fileupload" value="choosefile"><br><br>
        <label>Features</label><br>
        <textarea rows="7" cols="30" name="features" required></textarea><br><br>
        <label>Description</label><br>
        <textarea rows="7" cols="30" name="description" required></textarea><br><br>
        <label>cost</label>
        <input type="number" name="cost" required><br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</div>