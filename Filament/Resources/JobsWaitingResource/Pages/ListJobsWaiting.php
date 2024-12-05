<?php

declare(strict_types=1);

/**
 * ---.
 */

namespace Modules\Job\Filament\Resources\JobsWaitingResource\Pages;

use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Modules\Job\Filament\Resources\JobsWaitingResource;
use Modules\Job\Filament\Resources\JobsWaitingResource\Widgets\JobsWaitingOverview;
use Modules\Xot\Filament\Pages\XotBaseListRecords;

class ListJobsWaiting extends XotBaseListRecords
{
    public static string $resource = JobsWaitingResource::class;

    public function getHeaderActions(): array
    {
        return [];
    }

    public function getHeaderWidgets(): array
    {
        return [
            JobsWaitingOverview::class,
        ];
    }

    public function getTitle(): string
    {
        return __('jobs::translations.title');
    }

    public function table(Table $table): Table
    {
        return $table
            // ->columns($this->getTableColumns())
            ->columns($this->layoutView->getTableColumns())
            ->contentGrid($this->layoutView->getTableContentGrid())
            ->headerActions($this->getTableHeaderActions())

            ->filters($this->getTableFilters())
            ->filtersLayout(FiltersLayout::AboveContent)
            ->persistFiltersInSession()
            ->actions($this->getTableActions())
            ->bulkActions($this->getTableBulkActions())
            ->actionsPosition(ActionsPosition::BeforeColumns)
            ->defaultSort(
                column: 'created_at',
                direction: 'ASC',
            );
    }

    public function getTableActions(): array
    {
        return [
            // ViewAction::make()
            //     ->label(''),
            // EditAction::make()
            //     ->label(''),
            // DeleteAction::make()
            //     ->label('')
            //     ->requiresConfirmation(),
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make(),
        ];
    }

    public function getGridTableColumns(): array
    {
        return [
        ];
    }

    public function getListTableColumns(): array
    {
        return [
            TextColumn::make('status')
                ->badge()
<<<<<<< HEAD
                
=======
>>>>>>> origin/v0.2.10
                ->sortable()
                // ->formatStateUsing(static fn (string $state): string => __("jobs::translations.{$state}"))
                ->color(
                    static fn (string $state): string => match ($state) {
                        'running' => 'primary',
                        'waiting' => 'success',
                        'failed' => 'danger',
                        default => 'secondary',
                    }
                ),
            TextColumn::make('display_name')
<<<<<<< HEAD
                
                ->sortable(),
            TextColumn::make('queue')
                
                ->sortable(),
            TextColumn::make('attempts')
                
                ->sortable(),
            TextColumn::make('reserved_at')
                
                ->since()
                ->sortable(),
            TextColumn::make('created_at')
                
=======
                ->sortable(),
            TextColumn::make('queue')
                ->sortable(),
            TextColumn::make('attempts')
                ->sortable(),
            TextColumn::make('reserved_at')
                ->since()
                ->sortable(),
            TextColumn::make('created_at')
>>>>>>> origin/v0.2.10
                ->since()
                ->sortable(),
        ];
    }
}
