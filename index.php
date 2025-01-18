<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple singup page</title>
    <link rel="stylesheet" href="styles.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>

</head>
<body class="body">
    <div class="containar col-12">
        <h1 class="text-center">Sing Up</h1>

        <div class="mt-2 col-3 offset-5">
            <labl class="form-label fw-bold fs-3">
        Name:
            </labl>
            <input type="Text" class="form-control" id="name" required>
        </div>

        <div class="mt-2 col-3 offset-5">
            <labl class="form-label fw-bold fs-3">
        Email:
            </labl>
            <input type="Text" class="form-control" id="Email" required>
        </div>
        <div class="mt-2 col-3 offset-5">
            <labl class="form-label fw-bold fs-3">
        Mobile:
            </labl>
            <input type="Text" class="form-control" id="Mobile"required>
        </div>
        <div class="mt-2 col-3 offset-5">
            <labl class="form-label fw-bold fs-3">
        Password:
            </labl>
            <input type="Text" class="form-control" id="Password" required>
        </div>
      <div class="mt-2 offset-12 text-center">
        <button type="button" class="btn btn-primary" onclick="singup();">Singup</button>
        </div>
    </div>

    <script src="script.js"></script>

</body>
</html>