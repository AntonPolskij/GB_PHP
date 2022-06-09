<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Авторизация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .sign-in-form {
            margin: auto;
        }

        #username {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        #password {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        #repeat-password {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <form method="post" class="sign-in-form mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8">
                <h3>Регистрация</h3>
                <div class="alert alert-danger <?= $error === null ? 'visually-hidden' : '' ?> ">
                    <?= $error ?>
                </div>
                <label for="username" class="visually-hidden">Логин</label>
                <input type="text" id="username" name="username" class="form-control mt-3" placeholder="Логин" required="" autofocus="">
                <label for="name" class="visually-hidden">Логин</label>
                <input type="text" id="name" name="name" class="form-control mt-3" placeholder="Имя пользователя" required="" autofocus="">
                <label for="password" class="visually-hidden">Пароль</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Пароль" required="">
                <label for="repeat-password" class="visually-hidden">Повторите ввод</label>
                <input type="password" id="repeat-password" name="repeat-password" class="form-control" placeholder="Повторите пароль" required="">
                <button class="w-75 btn btn-lg btn-primary mt-1" type="submit">Зарегистрироваться</button>
                <div class="mt-3">
                    <a href="/">Назад</a>
                </div>
            </form>
        </div>
    </div>
</body>