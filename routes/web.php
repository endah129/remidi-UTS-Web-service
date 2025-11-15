use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'index']);       // Home
Route::get('/about', [AboutController::class, 'index']); // About
