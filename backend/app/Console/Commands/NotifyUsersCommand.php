<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Services\Interfaces\NotifierInterface;
use App\Services\Interfaces\UserServiceInterface;

class NotifyUsersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notification:notifyUsers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notify Users';

    /** @var UserServiceInterface **/
    private $userService;

    /** @var NotifierInterface **/
    private $notifier;

    public function __construct(
        UserServiceInterface $userService,
        NotifierInterface $notifier
    ) {
        parent::__construct();
        $this->userService = $userService;
        $this->notifier = $notifier;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = $this->userService->getUsers();
        foreach ( $users as $user ) {
            $this->notifier->sendNotification( [ 'user' => $user ] );
        }
        return Command::SUCCESS;
    }
}
