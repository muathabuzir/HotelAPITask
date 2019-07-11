<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Response as HttpResonse;

class ResponseMacroServiceProvider extends ServiceProvider {

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
        Response::macro('success', function ($data) {
            return Response::json([
                        'status' => true,
                        'data' => $data,
                            ], HttpResonse::HTTP_OK);
        });
        Response::macro('error', function ($message, $status = 400) {
            return Response::json([
                        'status' => false,
                        'message' => $message,
                            ], HttpResonse::HTTP_BAD_REQUEST);
        });
    }

}
