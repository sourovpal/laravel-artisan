use Illuminate\Support\Facades\Artisan;

Route::get('/clear', function(){
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');
    return dd('Done');
});


// Clear application cache:
use Illuminate\Support\Facades\Artisan;
Route::get('/clear', function() {
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('queue:clear');
    Artisan::call('event:clear');
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    return __('Application cache has been cleared ✔️');
});
