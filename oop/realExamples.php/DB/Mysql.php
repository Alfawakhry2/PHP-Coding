<?php

namespace Real\DB\Mysql;

use mysqli;
use mysqli_stmt;
use Real\DB\DB\DB;

class Mysql implements DB
{
    //Properties 
    private $conn;

    //Connection 
    public function __construct($localhost, $username, $password, $dbName)
    {
        $this->conn = mysqli_connect($localhost, $username, $password, $dbName);
        if ($this->conn) {
            return $this->conn;
        }
    }
    //CRUD Operations
    public function SelectAll($table)
    {
        //This way protected and provents from MYSQL Injection
        $query = "SELECT * FROM `$table`";
        $prepare = mysqli_prepare($this->conn, $query);
        mysqli_stmt_execute($prepare);
        $result = mysqli_stmt_get_result($prepare);
        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            echo "No Data To display !";
        }
    }
    public function SelectOne($table, $id)
    {

        $query = "SELECT * FROM `$table` WHERE `id` = ?";
        $prepare = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($prepare, 'i', $id);
        mysqli_stmt_execute($prepare);
        $result = mysqli_stmt_get_result($prepare);
        if (mysqli_num_rows($result) == 1) {
            return mysqli_fetch_assoc($result);
        } else {
            echo "No Data To display !";
        }
    }
    public function SelectWhere($table, $column, $value)
    {
        $type = '';
        $query = "SELECT * FROM `$table` WHERE `$column` = ?";
        //check the type of stmt_bind_param///////
        if (is_int($value)) {
            $type = "i"; // Integer
        } elseif (is_double($value)) {
            $type = "d"; // Double (Float)
        } elseif (is_string($value)) {
            $type = "s"; // String
        } else {
            $type = "b"; // Blob
        }
        ////////////////////////////////////////
        $prepare = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($prepare, $type, $value);
        mysqli_stmt_execute($prepare);
        $result = mysqli_stmt_get_result($prepare);
        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            echo "No Data To display !";
        }
    }
    public function Insert($table, $columns, $values)
    {
        //
        $types = '';
        $values = explode(',', $values);
        // to put the ? , ? , ? 
        //str repeat to repeat the ? with count of values 
        //rtrim to remove the last (,)

        $palceholder = rtrim(str_repeat('?,', count($values)), ',');
        foreach ($values as $value) {
            // $value = trim($value, " '"); // إزالة الفواصل والمسافات
            if (is_int($value)) {
                $types .= "i"; // Integer
            } elseif (is_double($value)) {
                $types .= "d"; // Double (Float)
            } elseif (is_string($value)) {
                $types .= "s"; // String
            } else {
                $types .= "b"; // Blob
            }
        }
        // echo $mysql->Insert("user" , "`name` ,`email`" , "'sara' , 's@s.com'");
        //
        $query = "INSERT INTO `$table` ($columns) Values ($palceholder)";
        $prepare = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($prepare, $types, ...$values);
        $done = mysqli_stmt_execute($prepare);
        if ($done) {
            echo "Data Inserted Successfully .";
        } else {
            echo "error in Inserted Data";
        }
    }
    public function Update($table, $columns, $values, $condition)
    {
        // مثال لاستدعاء الفانكشن:
        // $mysql->Update("users", "`name`,`email`", "sara,sara@example.com", "id=1");

        $types = '';
        $columns = explode(',', str_replace('`', '', $columns)); // إزالة العلامات ` لو موجودة
        $values = explode(',', $values);

        // تجهيز الـ placeholders -> مثال: name=?, email=?
        $placeholder = implode('=?, ', $columns) . "=?";

        // تحديد أنواع البيانات (i -> int, d -> double, s -> string, b -> blob)
        foreach ($values as &$value) {
            if (is_numeric($value)) {
                $types .= (strpos($value, '.') !== false) ? 'd' : 'i'; // لو فيه نقطة يبقى double
            } else {
                $types .= 's';
            }
        }

        // تجهيز الاستعلام
        $query = "UPDATE `$table` SET $placeholder WHERE $condition";

        // تحضير الاستعلام
        $prepare = mysqli_prepare($this->conn, $query);

        if (!$prepare) {
            die("خطأ في تجهيز الاستعلام: " . mysqli_error($this->conn));
        }

        // ربط المعاملات بالقيم
        mysqli_stmt_bind_param($prepare, $types, ...$values);

        // تنفيذ التحديث
        $done = mysqli_stmt_execute($prepare);

        if ($done) {
            echo "The Data Updated Successfully!";
        } else {
            echo "Error while updating: " . mysqli_stmt_error($prepare);
        }
    }
    public function Delete() {}
}
