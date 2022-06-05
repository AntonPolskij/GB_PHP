<?php

set_exception_handler(function (Throwable $exception) {
    // Создадим логгер
    $logger = new Logger('error_handler');
    // Запишем сообщение из исключения
    $logger->log($exception->getMessage());

    die('Сервис временно недоступен. Приносим извинения за неудобство.');
});
