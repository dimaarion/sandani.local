<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Web site created using create-react-app" />
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css" />
    <link href="/fonts/OpenSansCondensed-LightItalic.ttf" />
    <title>Отправить заявку</title>
</head>

<body>
    <div class="container ">
        <h2>Напишите нам сообщение</h2>
        <p>Если у Вас есть вопросы или Вы желаете оставить заявку на замер окон, заполните форму, приведенную ниже.</p>

        <p>* Все поля ОБЯЗАТЕЛЬНЫ для заполнения!</p>
        <form class="needs-validation" action="/message" method="POST">
            <div class="form">
                <div class="col-md-4 mb-3">
                    
                    <label for="username">Имя</label>
                    <input name="username" type="text" class="form-control" id="username" placeholder="Имя" >
                    <div class="invalid-feedback">
                        Введите свое имя.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername">Электронная почта</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input name="email-message" type="text" class="form-control" id="validationCustomUsername" placeholder="Электронная почта" aria-describedby="inputGroupPrepend">
                        <div class="invalid-feedback">
                            Введите свой почтовый адрес.
                        </div>
                    </div>
                </div>
            </div>
            <div class="form">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Тема</label>
                    <input name="subject" type="text" class="form-control" id="validationCustom03" placeholder="Тема сообщения">
                    <div class="invalid-feedback">
                        Тема.
                    </div>
                </div>
                <div class="col-sm mb-3">

                    <label for="my-input">Сообщение</label>
                    <textarea name="message" id="my-input" class="form-control" rows="3" placeholder="Сообщение"></textarea>
                    <div class="invalid-feedback">
                        Напишите сообщение.
                    </div>
                </div>
                <div class="form-group">
                    
                    <button name="message_send" value="Отправить сообщение" class="btn btn-primary" type="submit">Отправить сообщение</button>
        </form>
    </div>
    <div id="imagies" class="container text-center"></div>
    </div>
    </div>
    </div>
    <script src="/js/message.js"></script>
</body>

</html>