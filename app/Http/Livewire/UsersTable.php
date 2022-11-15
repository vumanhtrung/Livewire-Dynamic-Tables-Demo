<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Table;
use App\Models\User;
use App\Table\Column;
use Illuminate\Database\Eloquent\Builder;

class UsersTable extends Table
{
    public function query(): Builder
    {
        return User::query();
    }

    public function columns(): array
    {
        return [
            Column::make('name', 'Name'),
            Column::make('email', 'Email'),
            Column::make('status', 'Status')
                ->component('columns.users.status'),
            Column::make('created_at', 'Created At')
                ->component('columns.common.human-diff'),
        ];
    }
}
