<?php

namespace NovaErrorField;

use Laravel\Nova\Fields\Field;

class Errors extends Field
{
    public $component = 'errors-field';

    public $showOnIndex = false;

    public $showOnDetail = false;

    public function __construct()
    {
        parent::__construct('Errors', 'nova_errors', null);

        $this->name = 'Errors';
        $this->attribute = 'nova_errors';
        $this->resolveCallback = null;

        $this->fillUsing(function () {
            return false;
        });
    }
}
