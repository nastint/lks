<?php
namespace Nastint\Gear;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;
use Watson\Rememberable\Rememberable;

abstract class Entity extends Model {

    use PresentableTrait;
    use Rememberable;

    protected $presenter = 'EntityPresenter';
}