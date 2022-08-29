use Illuminate\Support\Facades\Artisan;

Route::get('/clear', function(){
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');
    return dd('Done');
});
