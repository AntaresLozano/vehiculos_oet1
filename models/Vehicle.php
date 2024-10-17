<?php
class Vehicle {
    public static function getAll() {
        global $conn;
        $sql = "SELECT * FROM vehicles";
        $result = $conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public static function getById($id) {
        global $conn;
        $id = $conn->real_escape_string($id);
        $sql = "SELECT * FROM vehicles WHERE id = '$id'";
        $result = $conn->query($sql);
        return $result->fetch_assoc();
    }

    public static function add($data) {
        global $conn;
        $plate = $conn->real_escape_string($data['plate']);
        $color = $conn->real_escape_string($data['color']);
        $brand = $conn->real_escape_string($data['brand']);
        $type = $conn->real_escape_string($data['type']);
        $driver_id = $conn->real_escape_string($data['driver_id']);
        $owner_id = $conn->real_escape_string($data['owner_id']);

        $sql = "INSERT INTO vehicles (plate, color, brand, type, driver_id, owner_id) 
                VALUES ('$plate', '$color', '$brand', '$type', '$driver_id', '$owner_id')";
        return $conn->query($sql);
    }

    public static function update($id, $data) {
        global $conn;
        $id = $conn->real_escape_string($id);
        $plate = $conn->real_escape_string($data['plate']);
        $color = $conn->real_escape_string($data['color']);
        $brand = $conn->real_escape_string($data['brand']);
        $type = $conn->real_escape_string($data['type']);
        $driver_id = $conn->real_escape_string($data['driver_id']);
        $owner_id = $conn->real_escape_string($data['owner_id']);

        $sql = "UPDATE vehicles SET plate = '$plate', color = '$color', brand = '$brand', 
                type = '$type', driver_id = '$driver_id', owner_id = '$owner_id' WHERE id = '$id'";
        return $conn->query($sql);
    }

    public static function delete($id) {
        global $conn;
        $id = $conn->real_escape_string($id);
        $sql = "DELETE FROM vehicles WHERE id = '$id'";
        return $conn->query($sql);
    }
}
?>