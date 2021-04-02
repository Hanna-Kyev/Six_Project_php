<?php
require_once CORE.'/Connection.php';

class Category
{
    protected $conn;
    
    public function __construct()
    {
        $this->conn = new Connection(require_once DB_CONFIG_FILE);
    }

    public function all(){
        $stmt = $this->conn->pdo->query("SELECT * FROM categories ORDER BY id ASC");
        $categories = $stmt->fetchAll();
        return $categories;
    }

    public function save($name, $status){
        $stmt = $this->conn->pdo->prepare("INSERT INTO categories (name, status)
        VALUES (?, ?)");
        $stmt->execute([$name, $status]);
        return $this->conn->pdo->lastInsertId();
    }

    public function getByPK($id){
        $stmt = $this->conn->pdo->prepare("SELECT * FROM categories WHERE id = ? LIMIT 1");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function destroy($id){
        $stmt = $this->conn->pdo->prepare("DELETE FROM categories WHERE id = ? LIMIT 1");
        $stmt->execute([$id]);
    }

    public function update($id, $name, $status){
        $stmt = $this->conn->pdo->prepare("UPDATE categories SET name = ?, status = ? WHERE id = ?");
        $stmt->execute([$name, $status, $id]);
    }
}