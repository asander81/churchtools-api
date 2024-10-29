<?php

namespace CTApi\Models\Common\Campus;

use CTApi\Models\Common\Campus\Campus;
use CTApi\Models\AbstractRequestBuilder;

class CampusRequestBuilder extends AbstractRequestBuilder
{
    protected function getApiEndpoint(): string
    {
        return "/api/campuses";
    }

    protected function getModelClass(): string
    {
        return Campus::class;
    }
}
