<?php

namespace App\Console\Commands;

use App\Models\{ Contact, Post };
use Illuminate\{ Support\Str, Console\Command };

class TestCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     *
     * @return int
     */
    public function handle()
    {
        Post::create(
            [
                'title' => 'new title:'.strtolower(Str::random(8)),
                'description' => 'new description:'.strtolower(Str::random(15))
            ]
        );

        Contact::first()->delete();

        \Log::info("Cron job Berhasil di jalankan " . date('Y-m-d H:i:s'));
    }
}
