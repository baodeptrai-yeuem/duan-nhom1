<?php
class taikhoanModel
{
    public $conn;
    function __construct()
    {
        $this->conn = connectDB();
    }
    function listtk()
    {
        $sql = "SELECT * FROM user";
        return $this->conn->query($sql)->fetchAll();
    }

    function findIdUser($id)
    {
        $sql = "SELECT * FROM user WHERE id_user = $id";;
        return $this->conn->query($sql)->fetch();
    }

    function DeleteUser($id)
    {
        $sql = "DELETE FROM user WHERE id_user = $id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    function soluongtk()
    {
        $sql = "SELECT COUNT(*) as soluongtk FROM user";
        return $this->conn->query($sql)->fetch();
    }
}
