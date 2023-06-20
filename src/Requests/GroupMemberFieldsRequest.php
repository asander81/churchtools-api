<?php


namespace CTApi\Requests;


class GroupMemberFieldsRequest
{
    public static function forGroup(int $groupId): GroupMemberFieldsRequestBuilder
    {
        return new GroupMemberFieldsRequestBuilder($groupId);
    }
}