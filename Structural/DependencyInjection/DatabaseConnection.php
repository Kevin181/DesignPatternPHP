<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/5
 * Time: 21:10
 */
namespace DesignPattern\Structural\DependencyInjection;

class DatabaseConnection
{
    /**
     * @var DatabaseConfiguration
     */
    private $configuration;

    public function __construct(DatabaseConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getDsn()
    {
        return sprintf(
            '%s:%s@%s:%s',
            $this->configuration->getHost(),
            $this->configuration->getPort(),
            $this->configuration->getUsername(),
            $this->configuration->getPassword()
        );
    }
}