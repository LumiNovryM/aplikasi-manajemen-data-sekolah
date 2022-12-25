# === Belajar-Laravel-8 === #

# 1.)Route/Routes/Routing

[Route] : Merupakan bagian penghubung antara user dengan keseluruhan framework
[URI] : Uniform Resources Identifier
[URL] : Uniform Resources Locator

_Jenis Jenis Route_ 
[Basic-Route] : 
Route::get('/about', function() {
    return "Whatever";
});

[Route-View] : 
Route::get('/', function () {
    return view('welcome');
});

Route::view('/contact', 'contact');

[Route-Argument] :
Route::view('/contact', 'contact', ["name" => "Lumi Novry M", "phone" => "0821........"]);

[Route-Controller] :
Route::get('/about', [UserController::class, 'index']);

[Route-Method] : 
1.)get
2.)post
3.)put
4.)patch
5.)delete
6.)options

[Redirect-Routes] : Route::redirect('/here', '/there');

[Route-Parameter] : Route::get('/post/{id}', function ($id) {

});

[Route-Prefix] : Route::prefix('admin')->group(function () {
    Route::get('/user', function () {

    });
});

# 1.)Blade Template - Layout Templating View

[Blade-Templating-Engine] : Blade Templating Engine adalah fitur pada Laravel 9 yang berguna untuk membantu developer dalam pengembangan tampilan halaman web