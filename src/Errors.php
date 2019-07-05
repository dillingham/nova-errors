<?php

namespace NovaErrorField;

use Laravel\Nova\Fields\Field;

class Errors extends Field
{
    public $component = 'errors-field';

    public $showOnIndex = false;

    public $showOnDetail = false;
}
