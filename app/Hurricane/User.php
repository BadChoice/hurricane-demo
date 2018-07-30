<?php

namespace App\Hurricane;

use BadChoice\Hurricane\Fields\BelongsToMany;
use BadChoice\Hurricane\Fields\Gravatar;
use BadChoice\Hurricane\Fields\HasMany;
use BadChoice\Hurricane\Fields\Text;
use BadChoice\Hurricane\Fields\Email;
use BadChoice\Hurricane\Resource;

class User extends Resource{

    protected $model = \App\User::class;

    public static $search = ["name", "email"];

    public function fields() {
        return [
            Gravatar::make()->withDefault('https://raw.githubusercontent.com/BadChoice/handesk/master/public/images/default-avatar.png'),
            Text::make('name')->sortable()->validationRules("required"),
            Email::make()->sortable()->validationRules("required"),
            HasMany::make('posts')->withLink(),
            BelongsToMany::make('roles')->hideInIndex(),
        ];
    }
}