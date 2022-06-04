<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Como iniciar el backend

    Ejecutar los comandos:

        composer install

        lngresar a Mysql y crear base de datos de nombre: megabusproject

        Ejecutar el comando: php artisan migrate:fresh

        Correr el proyecto utilizando el comando: php artisan serve
       
 ## Rutas para pruebas postman
        
        http://localhost:8000/busstations   => Estaciones
        http://localhost:8000/cards         => Tarjetas
        http://localhost:8000/seller        => Vendedores
        http://localhost:8000/sells         => Ventas

 ## Inserts para tablas
 
    #vendedores
        
            INSERT INTO `sellers`   (`id`, `nombres`, `apellidos`, `numero_id`, `created_at`, `updated_at`) VALUES
            (1, 'Juan', 'Campos', '987654321', '2022-06-02 20:13:46', '2022-06-02 20:13:46'),
            (35154, 'Daniela', 'Chavez', '123456789', '2022-06-02 20:13:46', '2022-06-02 20:13:46');
 
    #estaciones
        
            INSERT INTO `busstations` (`id`, `nombre`, `ciudad`, `created_at`, `updated_at`) VALUES
            (35, 'El lago', 'pereira', '2022-06-02 20:17:31', '2022-06-02 20:17:35'),
            (36, 'Cielo Azul', 'Pereira', '2022-06-02 20:15:46', '2022-06-02 20:15:46');
            
    #tarjetas
        
            INSERT INTO `cards` (`id`, `nombre`, `unidades`, `precio`, `valor_recaudos`, `created_at`, `updated_at`) VALUES
            (1, 'Tarjeta Plan Visita', '5', '5000', '20000', '2022-06-03 05:00:46', '2022-06-03 05:00:53');

        
        
