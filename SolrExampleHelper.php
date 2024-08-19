<?php

namespace App\Helpers\Solr;

use App\Helpers\Solr\Constants\SolrCollection;
use App\Models\Example;

class SolrExampleHelper extends SolrBaseHelper
{
    protected array $searchQueryFields = ['example_1'];

    protected string $solrCollection = SolrCollection::EXAMPLE_COLLECTION;

    protected string $modelClass = Example::class;

    protected string $schemaName = 'example';

    public function formatData($value): array
    {
        return [
            //todo format the data to be sent to apache solr
        ];
    }
}
