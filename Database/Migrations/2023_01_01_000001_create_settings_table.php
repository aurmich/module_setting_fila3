<?php

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;
use Spatie\LaravelSettings\Migrations\SettingsMigrator;

class CreateSettingsTable extends XotBaseMigration
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function up()
    {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->id();

                $table->string('group');
                $table->string('name');
                $table->boolean('locked')->default(false);
                $table->json('payload');

                $table->timestamps();

                $table->unique(['group', 'name']);

            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                app(SettingsMigrator::class)->add('general.site_name', 'Spatie');
                app(SettingsMigrator::class)->add('general.site_active', 'Spatie');
                app(SettingsMigrator::class)->add('general.logo', 'logo.png');
                //if (! $this->hasColumn('from')) {
                //    $table->string('from')->nullable();
                //}
            }
        );
    }
}