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

# 2.)Blade Template - Layout Templating View

[Blade-Templating-Engine] : Blade Templating Engine adalah fitur pada Laravel 9 yang berguna untuk membantu developer dalam pengembangan tampilan halaman web

# 3.)Penjelasan .Env (Environtment)

[.Env] : Env atau Environtment adalah nilai nilai yang mengatur struktur Koneksi & Database pada Laravel

# 4.)Database Migration

[Database-Migration] : Migrations adalah Version Control untuk Database, Migrations memungkinkan kita untuk migration struktur Database yang dibuat pada file Laravel

[Struktur-Migration] : Untuk membuat Migrations nama file harus bersifat plural, contoh : `admin` => `admins`

[Cara-Membuat-Migration] : php artisan make:migration create_[Nama-Table-Plural]_table

[php-artisan-migrate] : Berguna untuk menjalankan Schema migrati ke Database

[php-artisan-migrate:rollback] : Berguna untuk rollback satu langkah ke belakang 

# 5.)Model View Controller (MVC)

[MVC] : MVC adalah paradigma yang berkaitan dengan Paradigma OOP, yang dimana memisahkan View, Model (Database), dan Controller

[Model] : Model adalah bagian yang mengatur Data

[View] : View adalah bagian yang menampilkan tampilan website ke browser

[Controller] : Controller adalah penghubung antara Model dan View