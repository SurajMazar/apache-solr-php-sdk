<?php

namespace App\Console\Commands\Solr;

use App\Helpers\Solr\SolrExampleHelper;
use Illuminate\Console\Command;

class Sync extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'solr:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync data with apache solr';

    public function __construct(
        protected SolrExampleHelper $solrExampleHelper
    ) {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Example sync started.');
        $this->solrExampleHelper->sync();
        $this->solrExampleHelper->syncDeleted();
        $this->info('Example sync completed.');
    }
}
