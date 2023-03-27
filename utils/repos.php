<?php

use ApiClients\Client\GitHub\Client;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use React\Http\Browser;
use WyriHaximus\SubSplitTools\Files;
use WyriHaximus\SubSplitTools\Repos;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$repos = new Repos(
    new Client(
        new class() implements AuthenticationInterface {

            public function authHeader() : string {
                return 'Bearer ' . getenv('SUBSPLIT_GITHUB_TOKEN');
            }
        },
        new Browser(),
    )
);

$json = json_decode(file_get_contents(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'etc' . DIRECTORY_SEPARATOR . 'config.subsplit-publish.json'), true);
foreach ($json['sub-splits'] as $split) {
    $repos->upsert(
        ...explode(
            '/',
            str_replace(
                'git@github.com:',
                '',
                substr(
                    $split['target'],
                    0,
                    -4,
                ),
            )
        )
    );
}
