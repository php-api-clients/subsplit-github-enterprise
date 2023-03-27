<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class DeleteGlobalWebhook
{
    public const OPERATION_ID = 'enterprise-admin/delete-global-webhook';
    public const OPERATION_MATCH = 'DELETE /admin/hooks/{hook_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/admin/hooks/{hook_id}';
    private int $hookId;
    /**This API is under preview and subject to change.**/
    private string $accept;
    public function __construct(int $hookId, string $accept = 'application/vnd.github.superpro-preview+json')
    {
        $this->hookId = $hookId;
        $this->accept = $accept;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{hook_id}'), array($this->hookId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
