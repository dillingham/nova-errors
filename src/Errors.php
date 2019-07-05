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
        parent::__construct('Errors', 'errors', null);

        $this->name = 'Errors';
        $this->attribute = 'errors';
        $this->resolveCallback = null;
    }
}
