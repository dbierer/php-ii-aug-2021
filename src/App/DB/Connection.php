<?php
namespace App\DB;

use PDO;
use Exception;
class Connection
{
	public ?PDO $pdo = NULL;
	public array $config = [];
	public function __construct( array $config = [] )
	{
		$dsn = $config['dsn'] ?? '';
		if (empty($dsn)) throw new Exception('Missing DSN');
		$user = $config['user'] ?? '';
		$pwd  = $config['pwd']  ?? '';
		$this->pdo = new PDO($dsn, $user, $pwd);
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	public function getPdo()
	{
		return $this->pdo;
	}
}
