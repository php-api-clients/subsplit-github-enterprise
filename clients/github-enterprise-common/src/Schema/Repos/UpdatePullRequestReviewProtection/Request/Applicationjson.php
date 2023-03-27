<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\UpdatePullRequestReviewProtection\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"dismissal_restrictions":{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s with dismissal access"},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s with dismissal access"},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s with dismissal access"}},"description":"Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories."},"dismiss_stale_reviews":{"type":"boolean","description":"Set to `true` if you want to automatically dismiss approving reviews when someone pushes a new commit."},"require_code_owner_reviews":{"type":"boolean","description":"Blocks merging pull requests until [code owners](https:\\/\\/docs.github.com\\/enterprise-server@3.3\\/articles\\/about-code-owners\\/) have reviewed."},"required_approving_review_count":{"type":"integer","description":"Specifies the number of reviewers required to approve pull requests. Use a number between 1 and 6."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"dismissal_restrictions":{"users":["generated_users_null"],"teams":["generated_teams_null"],"apps":["generated_apps_null"]},"dismiss_stale_reviews":false,"require_code_owner_reviews":false,"required_approving_review_count":13}';
    /**
     * dismissalRestrictions: Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories.
     * dismissStaleReviews: Set to `true` if you want to automatically dismiss approving reviews when someone pushes a new commit.
     * requireCodeOwnerReviews: Blocks merging pull requests until [code owners](https://docs.github.com/enterprise-server@3.3/articles/about-code-owners/) have reviewed.
     * requiredApprovingReviewCount: Specifies the number of reviewers required to approve pull requests. Use a number between 1 and 6.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('dismissal_restrictions')] public ?Schema\Repos\UpdatePullRequestReviewProtection\Request\Applicationjson\DismissalRestrictions $dismissalRestrictions, #[\EventSauce\ObjectHydrator\MapFrom('dismiss_stale_reviews')] public ?bool $dismissStaleReviews, #[\EventSauce\ObjectHydrator\MapFrom('require_code_owner_reviews')] public ?bool $requireCodeOwnerReviews, #[\EventSauce\ObjectHydrator\MapFrom('required_approving_review_count')] public ?int $requiredApprovingReviewCount)
    {
    }
}
