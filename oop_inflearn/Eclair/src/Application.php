<?php

namespace Eclair;

use Eclair\Support\ServiceProvider;

class Application
{
    private $providers = [];

    public function __construct($providers = [])
    {
        $this->providers = $providers;
        array_walk($this->providers, fn ($providers) => $providers::register());
    }

    public function boot()
    {
        array_walk($this->providers, fn ($providers) => $providers::boot());
    }
}