<?php
namespace App;

class Item {
    private $DB;

    public function __construct($DB) {
        $this->DB = $DB;
    }

    public function create($name, $price, $quantity) {
    
        $stmt = $this->DB->connection->prepare("INSERT INTO items (name, price, quantity) VALUES (?, ?, ?)");
        
        $stmt->bind_param("sdi", $name, $price, $quantity);
        
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }


    public function readAll() {
    $stmt = $this->DB->connection->prepare("SELECT * FROM items");
    $stmt->execute();

    $result = $stmt->get_result();
    return $result;
}

public function delete($id)
{
    $stmt = $this->DB->connection->prepare("DELETE FROM items WHERE ID = ?");
    $stmt->bind_param("i", $id);

    return $stmt->execute();
}

public function getById($id)
{
    $stmt = $this->DB->connection->prepare("SELECT * FROM items WHERE ID = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    return $stmt->get_result()->fetch_assoc();
}

public function update($id, $name, $price, $quantity)
{
    $stmt = $this->DB->connection->prepare(
        "UPDATE items SET name=?, price=?, quantity=? WHERE ID=?"
    );

    $stmt->bind_param("sdii", $name, $price, $quantity, $id);

    return $stmt->execute();
}

}