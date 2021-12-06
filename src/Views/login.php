<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <div class="container">
        <main style="height: 100vh;" class="row justify-content-center align-items-center">
            <div class="col-md-4">
                <?php if (!empty($model)) : ?>
                    <?php if ($model['status'] == 'failed') : ?>
                        <div class="alert alert-danger" role="alert">
                            Login failed!
                        </div>
                    <?php endif; ?>
                <?php endif ?>
                <div class="card p-3 shadow">
                    <h1 class="text-center my-4 fs-1">Login</h1>
                    <form class="d-grid gap-2" action="/login" method="post">
                        <input name="username" type="text" class="form-control" placeholder="username">
                        <input name="password" type="password" class="form-control" placeholder="password">
                        <button class="btn btn-primary">Login</button>
                        <small class="text-muted text-center">dont have account? <a href="/register">register</a></small>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>