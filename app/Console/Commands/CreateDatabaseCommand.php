<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateDatabaseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new database based on the database config';

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
    public function handle()
    {
        $database = config('database.connections.mysql.database');
        $charset = config('database.connections.mysql.charset','utf8mb4');
        $collation = config('database.connections.mysql.collation','utf8mb4_unicode_ci');

        if ($database && $this->confirm("Do you really want to create database '$database'?")) {
            try {
                // Set the database name to null so DB commands connect to raw mysql, not a database
                config(['database.connections.mysql.database' => null]);

                $query = "CREATE DATABASE $database CHARACTER SET $charset COLLATE $collation";

                DB::statement($query);

                // Reset database name and purge database-less connection from cache
                config(['database.connections.mysql.database' => $database]);

                DB::purge();

                $this->info("Database '$database' created successfully");
            } catch (\Exception $e) {
                $this->error($e->getMessage());
            }
        }
    }
}
