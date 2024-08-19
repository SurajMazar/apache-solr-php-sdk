<?php

namespace Builder;

use App\Helpers\Solr\SolrBaseHelper;
use App\Helpers\Solr\SolrChallengeHelper;
use App\Helpers\Solr\SolrExampleHelper;
use App\Models\Builder\BaseBuilder;
use function App\Models\Builder\app;
use function App\Models\Builder\auth;

class ExampleBuilder extends BaseBuilder
{
    /**
     * @var array
     */
    protected array $filterKeys = [
     /**
      * @tutorial  FILTER KEYS THAT ARE ALLOWED IN APACHE SOLR COLLECTION
      */
    ];

    /**
     * @return SolrBaseHelper|false
     */
    public function getSolrInstance(): SolrBaseHelper|false
    {
        try {
            /** @var $solrHelper SolrExampleHelper */
            $solrHelper = app()->make(SolrExampleHelper::class);

            return $solrHelper;
        } catch (\Exception $exception) {
            return false;
        }
    }

}
