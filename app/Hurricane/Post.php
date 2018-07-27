<?php

namespace App\Hurricane;

use BadChoice\Hurricane\Fields\BelongsTo;
use BadChoice\Hurricane\Fields\Date;
use BadChoice\Hurricane\Fields\Datetime;
use BadChoice\Hurricane\Fields\Decimal;
use BadChoice\Hurricane\Fields\Gravatar;
use BadChoice\Hurricane\Fields\HasMany;
use BadChoice\Hurricane\Fields\Integer;
use BadChoice\Hurricane\Fields\Text;
use BadChoice\Hurricane\Fields\Email;
use BadChoice\Hurricane\Resource;

class Post extends Resource{

    protected $model = \App\Post::class;

    public static $search = ["title", "body"];

    public function fields() {
        return [
            Text::make('title')->sortable()->validationRules("required"),
            BelongsTo::make('user'),
            Date::make('created_at')->sortable(),
            Datetime::make('updated_at')->sortable(),
            Integer::make('likes')->sortable(),
            Decimal::make('price')->sortable(),
        ];
    }
}