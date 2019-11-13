<?php

declare(strict_types=1);

namespace App;

use PDO;

class PdoFactory
{
    /** @var array{dsn:string, usr:string, passwd: string} */
    private $config;

    /** @param array{dsn:string, usr:string, passwd: string} $config */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function __invoke() : PDO
    {
        return new PDO(
            $this->config['dsn'],
            $this->config['usr'],
            $this->config['passwd'],
            [ PDO::ATTR_EMULATE_PREPARES => false]
        );
    }
}
