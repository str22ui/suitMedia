<?

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/ideas', function (Request $request) {
    // ...
})->middleware('http.proxy');
