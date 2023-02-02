<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "Wesley";
        // Criando um array para chamar no meu template Blade
    $arr = [1,2,3,4,5];
    return view ('Welcome',
    [
        'nome' => $nome, 
        'arr' => $arr

    ]);

});

Route::get('/contact', function () {
    return view('contact');
    // Aqui eu estou criando uma nova página no meu site dizendo ao php que é ára acessar a minha view contact.blade
    // Se eu executar o código com o Ip http://127.0.0.1:8000/contact o código irá executar o meu html contact.blade
});

Route::get('/products', function () {
    $busca = request ('search');
    return view('products');
});


Route::get('/products/{id}', function ($id) {
    return view('products', ['id' => $id]);
});
