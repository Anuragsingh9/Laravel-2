<?php

Route::get('contact',function(){
    return "anurag";
});

Route::get('add/{a}/{b}', 'Anurag\Contact\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Anurag\Contact\CalculatorController@subtract');