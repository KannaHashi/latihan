<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form page</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="proses" method="post">
                    @csrf
                    <input type="text" name="nama">
                    <input type="text" name="umur">
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>