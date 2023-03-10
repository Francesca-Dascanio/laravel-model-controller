#laravel-model-controller

Oggi facciamo la nostra prima vera interazione con il database utilizzando l'ORM di Laravel.

1 - Create un nuovo progetto Laravel 9 OK
2 - tramite phpMyAdmin create un nuovo database laravel_model_controller OK
3 - Importate nel vostro database la tabella movies in allegato OK
4 - inserite le vostre credenziali per il database nel file .env OK (verifica che sia corretto il percorso al database)
5 - Create un model Movie OK
            php artisan make:model Movie 
6 - Create un controller che gestirà la rotta / OK
        php artisan make:controller Guest/PageController
7 - All'interno della funzione index() del controller, recuperate tutti i film dal database OK
e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card. OK