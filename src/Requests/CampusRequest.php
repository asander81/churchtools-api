<?php


namespace CTApi\Requests;


class CampusRequest
{
    public static function all(): array
    {
        return (new CampusRequestBuilder())->all();
    }

    public static function orderBy(string $key, $orderAscending = true): CampusRequestBuilder
    {
        return (new CampusRequestBuilder())->orderBy($key, $orderAscending);
    }
}
