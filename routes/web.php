<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/date', function () {
    $dateDuJour = date('d-m-y');
    return view('pages.date', compact('dateDuJour'));
});


Route::get('/fruits', function () {
    $panier = array('mangue', 'pêche', 'pomme', 'banane');
    echo $lgPanier = count($panier);
    foreach($panier as $value){
        echo "$value - ";
    }
    return view('pages.fruits', compact('panier', 'value', 'lgPanier'));
});

