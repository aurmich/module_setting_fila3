<?php

declare(strict_types=1);

namespace Modules\User\Console\Commands;

<<<<<<< HEAD
use Modules\Xot\Datas\XotData;
=======
use Illuminate\Console\Command;
<<<<<<< HEAD
>>>>>>> 06bbd4a (🔧 (AssignModuleCommand.php, AssignRoleCommand.php, AssignTeamCommand.php, AssignTenantCommand.php, RemoveRoleCommand.php, SetCurrentTeamCommand.php, SuperAdminCommand.php): Check & fix styling)

use Illuminate\Console\Command;
use function Laravel\Prompts\text;

use function Laravel\Prompts\select;
use Modules\Xot\Contracts\UserContract;
use Symfony\Component\Console\Input\InputOption;

=======

use function Laravel\Prompts\select;
use function Laravel\Prompts\text;

use Modules\User\Models\User;
use Modules\Xot\Datas\XotData;
use Symfony\Component\Console\Input\InputOption;
use Webmozart\Assert\Assert;

>>>>>>> d87d37a (Check & fix styling)
class SetCurrentTeamCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'user:set-current-team';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Assign current team to user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $email = text('email ?');
        $user_class = XotData::make()->getUserClass();
        /** @var UserContract */
        $user = $user_class::firstWhere(['email' => $email]);
        $xot = XotData::make();
        $teamClass = $xot->getTeamClass();
        /** @var array<int|string, string>|\Illuminate\Support\Collection<int|string, string> */
        $opts = $teamClass::pluck('name', 'id')
            ->toArray();

        $team_id = select(
            label: 'What team?',
            options: $opts,
            required: true,
            scroll: 10,
        );

        $user->current_team_id = intval($team_id);
        $user->save();

        $this->info('OK');
    }

    /**
     * Get the console command options.
     */
    protected function getOptions(): array
    {
        return [
            ['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
        ];
    }
}
