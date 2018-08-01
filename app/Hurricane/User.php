<?php

namespace App\Hurricane;

use BadChoice\Hurricane\Fields\BelongsToMany;
use BadChoice\Hurricane\Fields\Gravatar;
use BadChoice\Hurricane\Fields\HasMany;
use BadChoice\Hurricane\Fields\Select;
use BadChoice\Hurricane\Fields\Text;
use BadChoice\Hurricane\Fields\Email;
use BadChoice\Hurricane\Fields\Boolean;
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
            //Select::make('id', [1 => "que tal", 2 => "be"])->allowNull(),

            BelongsToMany::make('roles')->hideInIndex()->canAddDuplicates(false)->withPivotFields([
                Boolean::make('active')
            ]),
        ];
    }
}