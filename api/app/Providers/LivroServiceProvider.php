<?php

namespace App\Providers;

use App\Repositories\Contracts\LivroRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\LivroRepository;

class LivroServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(LivroRepositoryInterface::class, LivroRepository::class);
    }
}
