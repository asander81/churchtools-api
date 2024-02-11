<?php

namespace CTApi\Requests;

use CTApi\Models\Campus;

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
