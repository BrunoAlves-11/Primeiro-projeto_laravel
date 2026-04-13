# migration

como criar uma migration: 

```sh
php artisan make:migration [nome]
```
Como executar uma migration, ou seja montar o banco de dados. o comando é : 

```sh 
php artisan migrate  
```
O resultado deve ser mais ou menos assim 

```sh
PS C:\xampp\htdocs\laravel\primeiro-projeto> php artisan migrate  

   INFO  Running migrations.

  2026_04_12_212217_create_todos_table ............................................................................................... 198.61ms DONE
```
Para configurar os logs no laravel, devo fazer isso no arquivo `config/logging.php`: 
```php
 'app' => [
    'driver' => 'single',
    'path' => storage_path('logs/app.log'),
    'level' => env('LOG_LEVEL', 'debug'),
    'replace_placeholders' => true,
],
```
Isso vai criar um arquivo dentro da Pasta `storage/logs/app.log`.

Como usar ?

```php
 logger()->channel('app')->debug('Chegou uma requisição para criar um todo',['dados'=>request()->all()]);
```




[acesso](https://google.com)