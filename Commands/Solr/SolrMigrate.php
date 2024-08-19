<?php

namespace App\Console\Commands\Solr;


use App\Helpers\Solr\SolrExampleHelper;
use Illuminate\Console\Command;

class SolrMigrate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'solr:migrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate solr schema';

    public function __construct(
        protected SolrExampleHelper $solrExampleHelper,

    ) {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->solrExampleHelper->migrateTextField();
        $this->info('Text ngram field migrated.');
        $this->solrExampleHelper->migrate();
        $this->info('Example schema migrated.');
    }
}
