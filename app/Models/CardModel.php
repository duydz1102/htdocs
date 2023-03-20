<?php
class CardModel extends Model {
    public function GetAllCard() {
        $list = [];
        $stmt =  $this->connection->prepare("SELECT * FROM `card`;");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        foreach($stmt->fetchAll() as $row) {
            $list[] = (object)[
                'id' => $row['id'],
                'userId' => $row['userId'],
                'productId' => $row['productId'],
                'status' => $row['status'],

            ];
        }
        $list = array_reverse($list, true);
        return $list;
    }
    public function UpdateStatusCardById($id, $status) {
        $stmt = $this->connection->prepare('UPDATE card SET status = ?,  WHERE id = ?;');
        $stmt->execute([$status]);
    }
    public function Create($userId, $productId) {
        $stmt = $this->connection->prepare('INSERT INTO card ( userId, productId, status) VALUES ( ?, ?, "pending");');
        $stmt->execute([$userId, $productId]);
    }
    public function GetCardByIdProduct($idProdut, $userId) {
        $stmt =  $this->connection->prepare("SELECT * FROM card WHERE productId = ?, userId = ?;");
        $stmt->execute([$idProdut, $userId]);
        $result = $stmt->fetch();
        return [$result['id'], $result['userId'], $result['productId'], $result['status']];
    }
}
?>