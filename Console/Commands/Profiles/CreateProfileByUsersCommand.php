<?php

declare(strict_types=1);

namespace Modules\Blog\Console\Commands\Profiles;

use Illuminate\Console\Command;
use Modules\Blog\Models\Profile;
use Modules\Xot\Datas\XotData;

class CreateProfileByUsersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:create-profiles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crea i profili dalla lista di utenti';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $user_class = XotData::make()->getUserClass();
        $user_model = app($user_class);
        $users = $user_model->all();

        foreach ($users as $user) {
            Profile::firstOrCreate(
                ['user_id' => $user->id, 'email' => $user->email],
                ['credits' => 1000]
            );
        }

        $this->newLine();
        $this->warn('⚡ Done');
        $this->newLine();
    }
}
