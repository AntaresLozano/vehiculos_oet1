<?php
class Owner {
    public static function getAll() {
        global $conn;
        $sql = "SELECT * FROM owners";
        $result = $conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public static function getById($id) {
        global $conn;
        $id = $conn->real_escape_string($id);
        $sql = "SELECT * FROM owners WHERE id = '$id'";
        $result = $conn->query($sql);
        return $result->fetch_assoc();
    }

    public static function add($data) {
        global $conn;
        $cedula = $conn->real_escape_string($data['cedula']);
        $first_name = $conn->real_escape_string($data['first_name']);
        $second_name = $conn->real_escape_string($data['second_name']);
        $last_name = $conn->real_escape_string($data['last_name']);
        $address = $conn->real_escape_string($data['address']);
        $phone = $conn->real_escape_string($data['phone']);
        $city = $conn->real_escape_string($data['city']);

        $sql = "INSERT INTO owners (cedula, first_name, second_name, last_name, address, phone, city) 
                VALUES ('$cedula', '$first_name', '$second_name', '$last_name', '$address', '$phone', '$city')";
        return $conn->query($sql);
    }

    public static function update($id, $data) {
        global $conn;
        $id = $conn->real_escape_string($id);
        $cedula = $conn->real_escape_string($data['cedula']);
        $first_name = $conn->real_escape_string($data['first_name']);
        $second_name = $conn->real_escape_string($data['second_name']);
        $last_name = $conn->real_escape_string($data['last_name']);
        $address = $conn->real_escape_string($data['address']);
        $phone = $conn->real_escape_string($data['phone']);
        $city = $conn->real_escape_string($data['city']);

        $sql = "UPDATE owners SET cedula = '$cedula', first_name = '$first_name', second_name = '$second_name', 
                last_name = '$last_name', address = '$address', phone = '$phone', city = '$city' WHERE id = '$id'";
        return $conn->query($sql);
    }

    public static function delete($id) {
        global $conn;
        $id = $conn->real_escape_string($id);
        $sql = "DELETE FROM owners WHERE id = '$id'";
        return $conn->query($sql);
    }
}
?>