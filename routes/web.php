<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoopsController;
use App\Http\Controllers\NewsController;

Route::get('/', function () { 
    return view('welcome');
});
Route::get('message', function(){
    return "This is my first Laravel route";
});
Route::get('students', function(){
    $name = "Manoj";
    return "The name is $name";
});
Route::get('studentinfo', function(){
    $students= ['Manoj', 'Anju', 'Ashish'];
    return $students[1];
});
Route::get('studentinfo1', function(){
    $students= ['name'=>'Manoj', 'marks'=>34, 'address'=>'LPU'];
    return "<h1 style=color:red>Then name is ".$students['name']. " and marks are". $students['marks']."</h1>";
});
Route::get('login/{name}/{regno}', function($name, $regno){
    return "Welcome user, $name($regno)";
});
Route::get('login/{name}/{regno}', function($name, $regno){
    return "Welcome user, $name($regno)";
});
Route::get('details/{name}/{CAmarks?}', function($name, $CAmarks="Not evaluated"){
    return "The name is $name and marks are $CAmarks";
});

Route::get('add/{num1}/{num2}', function($num1, $num2){
    return "The sum is ".($num1+$num2);
});

// Route::get('info', function () {
//     return view('test', ['name'=>'Manoj']);
// });

// Route::get('info', function () {
//     return view('test')->with('name', 'Manoj');
// });

Route::get('info/{name}/{marks}', function ($name, $marks) {
    return view('test')->with('name', $name)->with('marks', $marks);
});

//Controllers
Route::get('mycont', [MyController::class, 'index']);
Route::get('mycont1', [MyController::class, 'display']);
Route::get('details', [MyController::class, 'display1']);
Route::get('details1/{name}', [MyController::class, 'display2']);

Route::get('displaystudents/{name?}', [StudentController::class, 'displaylist']);

Route::get('emplist', [EmployeeController::class, 'displayemployeelist']);

Route::get('firstblade', function(){
    return view('firstblade', ['name'=>"Manoj"]);
});
Route::get('firstblade/{name?}', function($name="Suman"){
    return view('firstblade', ['name'=>$name]);
});

Route::get('loops', [LoopsController::class, 'index']);

Route::get('performance/{marks}', function ($marks) {
    return view('grades', ['marks'=>$marks]);
});

// Blade template inheritance
Route::get('home', function () {
    return view('home');
});
Route::get('products', function () {
    $products = [
        ["id"=>1, "category"=>"electronics", "type"=>"laptop", "brand"=>"Dell", "model"=>"Dell inspiron", "image"=>asset('images/flowers.jpg')],
        ["id"=>2, "category"=>"electronics", "type"=>"smartphone", "brand"=>"Samsung", "model"=>"Galaxy", "image"=>asset('images/flowers.jpg')],
        ["id"=>3,"category"=>"elctronics", "type"=>"laptop", "brand"=>"Realme", "model"=>"GT 6", "image"=>asset('images/flowers.jpg')],
    ];
    return view('products', ["products"=>$products]);
});
Route::get('product/{id}', function ($id) {
    $products = [
        ["id"=>1, "category"=>"electronics", "type"=>"laptop", "brand"=>"Dell", "model"=>"Dell inspiron", "image"=>asset('images/flowers.jpg')],
        ["id"=>2, "category"=>"electronics", "type"=>"smartphone", "brand"=>"Samsung", "model"=>"Galaxy", "image"=>asset('images/flowers.jpg')],
        ["id"=>3,"category"=>"elctronics", "type"=>"laptop", "brand"=>"Realme", "model"=>"GT 6", "image"=>asset('images/flowers.jpg')],
    ];
   $foundproduct = False;
   foreach($products as $item){
    if($item['id'] == $id){
        $foundproduct = $item;
        break;
    } 
   }
   if($foundproduct){
    return view('product-details', ['foundproduct'=>$foundproduct]);
   }
});
Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});

// show image
Route::get('showimage', function () {
    return view('showimage');
});


Route::get('news/{category?}', [NewsController::class, 'showNews']);

Route ::get ('users/{id}/{name}', function($id,$name){
    return "Welcome user , $name($id)";

})-> where('id','[0-9]+')->where('name','[a-zA-Z \s]+');


Route ::get ('users1/{id}/{name}', function($id,$name){
    return "Welcome user , $name($id)";

})-> whereNumber('id')->whereAlpha('name');


Route ::get ('users2/{id}', function($id){
    return "Welcome user , ($id)";

})->whereAlphaNumeric('id');

Route ::get ('users3/{category}', function($id,$name){
    return "the category is $category";

})-> whereIn('category',['shoes','trous','watch']);

//Attaching headers
Route::get('data', function () {
    return response ("This is some data ")->header('content-Type','text/html')->header('data1','valure1');
    
});

Route::get('data1', function () {
    return response ("This is some data ")->withHeaders(['Content-type'=>'text/html','data2'=>'value2']);
    
});

Route::get('somedata1', function () {
    return response()->json(['id'=>123,'name'=>'Manoj'])->header('info','employee_info');
    
});


            //Redirections
//Route redirect            
Route::get('student/info/login', function () {
    return "This is login page";   
})->name('login');
//return redirect
Route::redirect('logout', 'student/info/login');
Route::get('logout1', function () {
    return redirect('student/info/login');
    
});
//Name redirect
Route::get('logout2', function () {
    return redirect()->route('login');
}); 


Route::get('someinfo/{id}', function ($id) {
    return "The id is $id";   
});
Route::redirect('someredirect/{id}', '/someinfo/{id}');

Route::get('someredirect1/{id}', function ($id) {
    return redirect('/someinfo/{id}');
    
});

Route::get('someredirect2/{id}', function ($id) {
    return redirect()->route('si',['id'=>$id]);
    
});