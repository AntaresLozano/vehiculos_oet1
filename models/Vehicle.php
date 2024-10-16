<?php
class Report {
    public static function getVehicleReport() {
        global $conn;
        $sql = "SELECT v.plate, v.brand, 
                CONCAT(d.first_name, ' ', d.last_name) AS driver_name,
                CONCAT(o.first_name, ' ', o.last_name) AS owner_name
                FROM vehicles v
                LEFT JOIN drivers d ON v.driver_id = d.id
                LEFT JOIN owners o ON v.owner_id = o.id";
        $result = $conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>