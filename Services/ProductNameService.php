<?php

namespace SwagStartup\Services;

use Doctrine\DBAL\Connection;

class ProductNameService
{
  /**
   * @var Connection
   */
  private $connection;

  /**
   * ProductNameService constructor.
   *
   * @param Connection $connection
   */
  public function __construct(Connection $connection)
  {
    $this->connection = $connection;
  }

  public function getProductNames()
  {
    $query = $this->connection->createQueryBuilder();

    $query->select(['name'])
      ->from('s_articles')
      ->setMaxResults(20);


    return $query->execute()->fetchAll(\PDO::FETCH_COLUMN);
  }
}