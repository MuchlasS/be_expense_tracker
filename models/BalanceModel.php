<?php
class Balance {
    public $id;
    public $type;
    public $amount;
    public $description;
    public $created_at;
        
    public function read(PDO $db_connection){
        $query = 'SELECT * FROM balances ORDER BY balances.created_at DESC';
        
        $statement = $db_connection->prepare($query);
        $statement->execute();
        return $statement;
    }

    public function read_single(PDO $db_connection){
        $query = 'SELECT * FROM balances WHERE balances.id = ? LIMIT 0, 1';

        $statement = $db_connection->prepare($query);
        $statement->bindParam(1, $this->id);
        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_ASSOC);

        $this->type = $row['type'];
        $this->amount = $row['amount'];
        $this->description = $row['description'];
    }

    public function create(PDO $db_connection){
        $query = 'INSERT INTO balances
        SET
            type = :type,
            amount = :amount,
            description = :description';
        
        $statement = $db_connection->prepare($query);
        $this->type = htmlspecialchars(strip_tags($this->type));
        $this->amount = htmlspecialchars(strip_tags($this->amount));
        $this->description = htmlspecialchars(strip_tags($this->description));

        $statement->bindParam(':type', $this->type);
        $statement->bindParam(':amount', $this->amount);
        $statement->bindParam(':description', $this->description);

        if($statement->execute()) return true;

        printf("Error : %s.\n", $statement->error);
        return false;
    }

    public function update(PDO $db_connection){
        $query = 'UPDATE balances
        SET
            type = :type,
            amount = :amount,
            description = :description
        WHERE
            id = :id';
        
        $statement = $db_connection->prepare($query);
        $this->type = htmlspecialchars(strip_tags($this->type));
        $this->amount = htmlspecialchars(strip_tags($this->amount));
        $this->description = htmlspecialchars(strip_tags($this->description));

        $statement->bindParam(':type', $this->type);
        $statement->bindParam(':amount', $this->amount);
        $statement->bindParam(':description', $this->description);
        $statement->bindParam(':id', $this->id);

        if($statement->execute()) return true;

        printf("Error : %s.\n", $statement->error);
        return false;
    }

    public function delete(PDO $db_connection){
        $query = 'DELETE FROM balances WHERE id = :id';

        $statement = $db_connection->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $statement->bindParam(':id', $this->id);

        if($statement->execute()) return true;

        printf("Error : %s.\n", $statement->error);
        return false;
    }
}
?>