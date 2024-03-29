## Дипломный проект
Мой дипломный проект для защиты в техникуме. Представляет собой автоматизированную информационную систему(АИС) для компании 
ООО "Энергоинжиниринг". АИС ориентирована на специалистов по работе с клиентами для взаимодействия между специалистами сервисного обслуживания.
Приемущества системы:
* оператору больше не придется производить трудоемкий и времязатратный поиск;
* возможность сортировать данные по ключевым полям;
* отказ от отчетов на бумажных носителях, хранящихся в архиве, в любой момент времени оператор может посмотреть отчет в базе и распечатать его.


## Установка для просмотра кода и проверки

1. Установить **composer**, **PHP 7.1**, **MySQL5.6**, **Apache2.4** или готовый пакет со всеми этими модулями. К примеру [OpenServer](https://ospanel.io/). 
<span style="color: crimson">Очень важно соблюдать версию данных модулей. Приложение может не работать, если модули слишком новые или старые.</span>
2. Установить все PHP-пакеты и зависимости команды `composer install`.
3. Установить npm-пакеты командомой `npm install`.
4. Поочерёдно выполнить команды из файла `composer.json`:
    * `post-autoload-dump`
    * `post-root-package-install`
    * `post-create-project-cmd`
    * `post-update-cmd`
5. Создать в СУБД базу данных с произвольным названием.
6. Вписать название в файл `.env` в поле `DB_DATABASE`
7. Выполнить команду для создания таблиц и заполнением их произвольным содержим `php artisan migrate --seed`
8. Выполнить команду `npm run dev`
   9. Открыть сайт в браузере и можно войти под учётными записями:
      * Оператора: 
        - login: operator;
        - password: 1234.
      * Сервис-специалиста:
        - login: service;
        - password: 1234.
      * Клиента:
        - login: call;
        - password: 1234.
     
       Есть возможность войти под 5 учётными записями сервис-специалиста. Нужно лишь использовать соответствующий формат логина:
       `n(0..4) login=service(n) password=1234`, то есть логин будет `service0, service1...service4`

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
