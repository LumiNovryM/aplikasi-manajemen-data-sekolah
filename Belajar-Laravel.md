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

# 6.)Database Seeding (Seeder)

[Database-Seeding(Seeder)] : Sesuai namanya Seeding(Seeder) yaitu menanamkan benih (data) ke database, Untuk Pertama kali

[Ubuntu-Note] : Error Ketika db:seed dengan error mess "call to undefined function mb_strimwidth". Solved With sudo apt-get install php-mbstring

# 7.)Factory (Faker)

[Factory(Faker)] : Merupakan library PHP yang mampu meng-generate data palsu untuk kita

# 8.)Perbandingan Query Builder & Eloquent

[Query-Builder] : Merupakan sebuah interface yang disediakan Laravel untuk mengorganisir data-data dalam tabel database

[Contoh-Syntax-Query-Builder-Untuk-Get-Data] : $student = DB::table('students')->get();

[Contoh-Syntax-Query-Builder-Insert-Data] : DB::table('students')->insert([
            'name' => 'Query Builder',
            'gender' => 'L',
            'nis' => '02010210',
            'class_id' => 1
        ]);

[Contoh-Syntax-Query-Builder-Update-Data] : DB::table('students')->where('id', 26)->update([
            'name' => 'Query Builder Updated',
            'class_id' => 3
        ]);

[Contoh-Syntax-Query-Builder-Delete-Data] : DB::table('students')->where('id', 26)->delete();

[Eloquent] : Merupakan salah satu fitur di Laravel, fitur ini mengelola sebuah data yang ada pada database, menjadi sangat mudah, ORM merupakan teknik mengubah suatu table menjadi sebuah object, yang nanti mudah digunakan

[Contoh-Syntax-Eloquent-Untuk-Get-Data] : $student = Student::all();

[Contoh-Syntax-Eloquent-Untuk-Insert-Data] : Student::create([
            'name' => 'Eloquent',
            'gender' => 'P',
            'nis' => '02010233',
            'class_id' => 2
        ]);

[Contoh-Syntax-Eloquent-Update-Data] : Student::find(30)->update([
            'name' => 'Eloquent Updated',
            'class_id' => 4
        ]);

[Contoh-Syntax-Eloquent-Delete-Data] : Student::find(30)->delete()

# 8.)Collection Methods

[Collection-Methods] : Collection merupakan sebuah fitur bawaan Laravel yang digunakan untuk mengola data array, baik itu dari Eloquent maupun data yang dibuat sendiri berbentuk array

[AVG] : Untuk Menghitung rata-rata, contoh : `$result = collect($nilai)->avg()`

[Contains] : Untuk mencari suatu nilai target, contoh : `$result = collect($nilai)->contains(19)`

[Diff] : Untuk melihat perbandingan data 

[Filter] : Untuk menyaring suatu data

# 9.)Eloquent Relationship 

[Eloquent-Relationship] : Merupakan method yang didefinisikan didalam Model dan digunakan untuk menghubungkan antara table yang saling berhubungan

[One-To-One-Relationship] : Merupakan relasi yang dimana satu field terhubung dengan satu field data

[Case] : 
Student -> Class : Many To One
Class -> Student : One To Many

[Lazy-Loading] : Merupakan pemanggilan data relasi yang tidak diolah di Controller tapi langsung dipanggil di View

[Eager-Loading] : Merupakan pemanggilan data relasi yang diolah terlebih dahulu di Controller

[Perbedaan-Lazy-Loading-&-Eager-Loading] : Cara yang disarankan adalah Eager Loading karena performa dan query yang digunakan lebih sedikit dibandingkan Lazy Loading

# 10.)N+1 Problem, Lazy Loading VS Eager Loading

[N+1-Problem] : N+1 Query adalah suatu masalah yang terjadi ketika kita memerlukan untuk load data child dari relasi parent-child dimana kita melakukan banyak query select pada child data. N+1 disini artinya adalah 1 Query untuk parent dan N adalah jumlah record pada table child

[Lazy-Loading] : Merupakan pemanggilan data relasi yang tidak diolah di Controller tapi langsung dipanggil di View

[Eager-Loading] : Merupakan pemanggilan data relasi yang diolah terlebih dahulu di Controller

# 11.)Many To Many Relationship

[Many-To-Many-Relationship] : adalah relasi antar table dimana banyak dari masing-masing record tersebut bisa memiliki banyak relasi ke table lainnya

# 12.)Nested Relationship 

[Nested-Relationship] : Nested Relatinship adalah sebuah table yang memiliki relasi bersarang

# 13.)Membuat Halaman Detail 

[Find] : Find Merupakan method untuk mencari id, yang dimana jika id tidak ditemukan maka akan menampilkan halaman error

[FindOrFail] : FindOrFail Merupakan method untuk mencari id, yang dimana jika id tidak ditemukan maka akan menampilakn halaman 404 NOT FOUND

# 14.)Create Data Ke Database

# 15.)Update Data Ke Database

# 16.)Session Flash Message

[Session-Flash-Message] : Flash Message adalah sebuah feedback berupa informasi success, error, warning, dll yang ada pada Laravel

# 17.)Form Validation + Flash Message

[Form-Validation] : Adalah Proses validasi data input yang diinputkan dari form.Proses validasi ini bisanya dilakukan di Controller dan menggunakan library form_validation

# 18.)Delete Data 

# 19.)Soft Delete & Delete Data

[Soft-Delete] : Soft delete merupakan teknik menghapus data tetapi tidak benar benar dihapus tetapi tidak ditampilkan kepada pengguna, biasanya menggunakan kolom status yang menunjukkan aktif atau tidak aktif. Kelebihan : Apabila data yang dihapus suatu saat dibutuhkan kembali, data tersebut bisa dikembalikan 

# 20.)Pagination 

[Pagination] : Pagination merupakan sebuab fitur web yang digunakan untuk membatasi tampilan data agar tidak terlalu panjang dan lebih rapi.Penggunaan Pagination banyak dipergunakan untuk menampilkan data dalam jumlah banyak, sehingga dapat dipisah/dipilih berapa data yang akan ditampilkan terlebih dahulu sesui dengan urutan akan kriteria pencarian tertentu

[Paginate] : Paginate akan menampilkan data sebanyak parameter yang diberikan dan juga total data

[simpelPaginate] : simplePaginate akan menampilkan data sebanyak paramter yang diberikan tapi tidak memberikan total data

# 21.)Search Data + Pagination

[Search-Data] : Search Data adalah fitur dimana memungkinkan "User" untuk mencari suatu data berdasarkan keinginannya

# 22.)Upload Image

# 23.)Login & Register 

[Login] : Adalah proses masuk kedalam suatu aplikasi menggunakan akun

[Logout] : Adalah proses keluar dari suatu aplikasi 

[Authentication] : Merupakan proses untuk memastikan suatu pengenalan atau memastikan suatu pengakuan

[Middleware] : Middleware pada Laravel bertugas melakukan pengecekan terhadap user yang sudah mempunyai hak akses web atau belum 

