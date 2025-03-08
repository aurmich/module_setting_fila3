<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\User\Filament\Resources;

use Modules\User\Models\Profile;

class ProfileResource extends BaseProfileResource
{
    protected static ?string $model = Profile::class;
=======
namespace Modules\Gdpr\Filament\Resources;

use Filament\Forms;
use Modules\Gdpr\Filament\Resources\ProfileResource\Pages;
use Modules\Gdpr\Models\Profile;
use Modules\Xot\Filament\Resources\XotBaseResource;

class ProfileResource extends XotBaseResource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('type')
                ->maxLength(255)
                ->default(null),
            Forms\Components\TextInput::make('first_name')
                ->maxLength(191)
                ->default(null),
            Forms\Components\TextInput::make('last_name')
                ->maxLength(191)
                ->default(null),
            Forms\Components\TextInput::make('full_name')
                ->maxLength(191)
                ->default(null),
            Forms\Components\TextInput::make('email')
                ->email()
                ->maxLength(191)
                ->default(null),
            Forms\Components\TextInput::make('user_id')
                ->maxLength(36)
                ->default(null),
            Forms\Components\TextInput::make('updated_by')
                ->maxLength(36)
                ->default(null),
            Forms\Components\TextInput::make('created_by')
                ->maxLength(36)
                ->default(null),
            Forms\Components\TextInput::make('deleted_by')
                ->maxLength(36)
                ->default(null),
            Forms\Components\Toggle::make('is_active')
                ->required(),
        ];
    }
=======
namespace Modules\Blog\Filament\Resources;

use Filament\Resources\Concerns\Translatable;
use Modules\Blog\Filament\Resources\ProfileResource\Pages;
use Modules\Blog\Filament\Resources\ProfileResource\RelationManagers;
use Modules\Blog\Models\Profile;
use Modules\User\Filament\Resources\BaseProfileResource;

class ProfileResource extends BaseProfileResource
{
    use Translatable;

    protected static ?string $model = Profile::class;
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)

    public static function getRelations(): array
    {
        return [
<<<<<<< HEAD
=======
            RelationManagers\RatingMorphsRelationManager::class,
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
<<<<<<< HEAD
        ];
    }
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
            'view' => Pages\ViewProfile::route('/{record}'),
            // 'getcredits' => Pages\GetCreditProfile::route('/{record}/getcredits'),
        ];
    }
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
}
