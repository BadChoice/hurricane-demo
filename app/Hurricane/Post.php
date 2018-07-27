<?php

namespace App\Hurricane;

use BadChoice\Hurricane\Fields\BelongsTo;
use BadChoice\Hurricane\Fields\Color;
use BadChoice\Hurricane\Fields\Date;
use BadChoice\Hurricane\Fields\Datetime;
use BadChoice\Hurricane\Fields\Decimal;
use BadChoice\Hurricane\Fields\Gravatar;
use BadChoice\Hurricane\Fields\HasMany;
use BadChoice\Hurricane\Fields\Integer;
use BadChoice\Hurricane\Fields\Text;
use BadChoice\Hurricane\Fields\Email;
use BadChoice\Hurricane\Fields\Textarea;
use BadChoice\Hurricane\Fields\Url;
use BadChoice\Hurricane\Fields\Time;
use BadChoice\Hurricane\Resource;

class Post extends Resource{

    protected $model = \App\Post::class;

    public static $search = ["title", "body", "price"];

    public function fields() {
        return [
            Text::make('title')->sortable()->validationRules("required"),
            BelongsTo::make('user'),
            Textarea::make('body'),
            Date::make('created_at')->sortable(),
            Datetime::make('updated_at')->sortable(),
            Integer::make('likes')->sortable(),
            Decimal::make('price')->sortable(),

            Time::make('time')->sortable(),
            Url::make('link')->validationRules("required"),
            Color::make('color'),
        ];
    }
}