<?php


namespace CTApi\Requests;


use CTApi\CTClient;
use CTApi\Models\WikiPage;
use CTApi\Utils\CTResponseUtil;
use GuzzleHttp\Exception\GuzzleException;

class WikiPageVersionRequestBuilder
{

    public function __construct(private $wikiCategory, private $pageIdentifier)
    {
    }

    public function get()
    {
        try {
            $response = CTClient::getClient()->get('/api/wiki/categories/' . $this->wikiCategory . '/pages/' . $this->pageIdentifier . '/versions');
            $data = CTResponseUtil::dataAsArray($response);
            if (!empty($data)) {
                return WikiPage::createModelsFromArray($data);
            }
        } catch (GuzzleException $e) {
            //ingore
        }
        return [];
    }

    public static function requestPageVersion(string $wikiCategory, string $pageIdentifier, int $version): ?WikiPage
    {
        try {
            $response = CTClient::getClient()->get('/api/wiki/categories/' . $wikiCategory . '/pages/' . $pageIdentifier . '/versions/' . $version);
            $data = CTResponseUtil::dataAsArray($response);
            if (!empty($data)) {
                return WikiPage::createModelFromData($data);
            }
        } catch (GuzzleException $e) {
            //ingore
        }
        return null;
    }
}