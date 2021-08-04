<?php
namespace App\DB\Service;

use PDO;
use App\DB\Connection;
class Customer
{
	const TABLE = 'customers';
	public function __construct(public ?Connection $conn = NULL) {}
	public function findAll() : array
	{
		$sql = 'SELECT * FROM ' . self::TABLE;
		$stmt = $this->conn->getPdo()->query($sql);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	public function save(array $data) : int
	{
		$sql = 'INSERT INTO ' . self::TABLE . ' (firstname,lastname) VALUES (:first,:last)';
		$stmt = $this->conn->getPdo()->prepare($sql);
		$stmt->execute($data);
		return $stmt->rowCount();
	}
}
