<?php

Route::get('/calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('/plus/{a}/{b}', [Shihab\Calculator\CalculatorController::class, 'plus']);
Route::get('/minus/{a}/{b}', [Shihab\Calculator\CalculatorController::class, 'minus']);
Route::get('/into/{a}/{b}', [Shihab\Calculator\CalculatorController::class, 'into']);
Route::get('/devide/{a}/{b}', [Shihab\Calculator\CalculatorController::class, 'devide']);