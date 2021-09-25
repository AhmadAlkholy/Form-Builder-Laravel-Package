<?php

namespace Kholy\FormBuilder;

use Illuminate\Support\ServiceProvider;

class FormBuilderServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'formbuilder');
        $this->publishes([
            __DIR__.'/public' => public_path('plugins/formbuilder'),
        ], 'public');
    }

    /**
     * Boot the instance, add macros for datatable engines.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'formbuilder');

        $this->publishes([
            __DIR__.'/public' => public_path('plugins/formbuilder'),
        ], 'public');
    }
}
