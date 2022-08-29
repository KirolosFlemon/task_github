<?php
// This is For Index.php Page
Route::set('index.php',function(){
    IndexController::CreateView('Index');
});

Route::set('api',function(){
    (new ApiController())->getDataApi();
});
Route::set('main.js',function(){
    (new IndexController())->getFile();
});
?>