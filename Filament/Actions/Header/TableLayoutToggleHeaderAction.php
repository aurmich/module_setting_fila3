<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Actions\Header;

use Filament\Actions\Action;

/**
 * @see https://filamentphp.com/plugins/tgeorgel-table-layout-toggle
 */
class TableLayoutToggleHeaderAction extends Action
{
    // use NavigationActionLabelTrait;
    public string $list_icon = 'heroicon-o-list-bullet';

    public string $grid_icon = 'heroicon-o-squares-2x2';

    public static function getDefaultName(): ?string
    {
        return 'table-layout-toggle-header';
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->translateLabel()
            ->color('secondary')
            ->label('')
            // ->label(trans('ui::'.static::getDefaultName().'.label'))
            // ->tooltip(trans('setting::database_connection.actions.database-backup.tooltip'))
            // ->icon(trans('setting::database_connection.actions.database-backup.icon'))
            // ->icon($this->list_icon)
            ->icon(fn ($livewire) => $livewire->layoutView == 'list' ? $this->list_icon : $this->grid_icon)
            ->action(
                function ($livewire) {
                    $livewire->layoutView = ($livewire->layoutView == 'grid' ? 'list' : 'grid');
                }
            );
    }
}
