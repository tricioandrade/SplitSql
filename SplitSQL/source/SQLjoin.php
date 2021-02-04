<?php


namespace App\SplitSQL;


class SQLjoin
{
    protected static $stmt;
    protected static $sql;
    protected static $SQL;
    protected static $Row;
    protected static $Table;
    protected static $Value;

    #Inner Join
    public static function INNER_JOIN(string $table1, string $row1, string $table2, string $row2, string $row3, string $row4, string $return){
        self::$sql = "SELECT $table1.$row1, $table2.$row2 FROM $table1 INNER JOIN $table2 ON $table2.$row3 =  $table1.$row4";
        self::$stmt = Connection::connect()->prepare(self::$sql);
        self::$stmt->execute();
        if ($return == count_):
            return self::$stmt->rowCount();
        elseif($return = fetch):
            return self::$stmt->fetchAll(\PDO::FETCH_ASSOC);
        endif;
    }
    public static function INNER_JOIN_1_WHERE(string $table1, string $row1, string $table2, string $row2, string $row3, string $row4, $WHERE, string $return){
        self::$sql = "SELECT $table1.$row1, $table2.$row2 FROM $table1 INNER JOIN $table2 ON $table2.$row3 =  $table1.$row4 WHERE $table1.$row1 = $WHERE";
        self::$stmt = Connection::connect()->prepare(self::$sql);
        self::$stmt->execute();
        if ($return == count_):
            return self::$stmt->rowCount();
        elseif($return = fetch):
            return self::$stmt->fetchAll(\PDO::FETCH_ASSOC);
        endif;
    }
    public static function INNER_JOIN_1_WHERE_Like(string $table1, string $row1, string $table2, string $row2, string $row3, string $row4, $ref, string $return){
        self::$sql = "SELECT $table1.$row1, $table2.$row2 FROM $table1 INNER JOIN $table2 ON $table2.$row3 =  $table1.$row4 WHERE $table1.$row1 LIKE '$ref%'\"";
        self::$stmt = Connection::connect()->prepare(self::$sql);
        self::$stmt->execute();
        if ($return == count_):
            return self::$stmt->rowCount();
        elseif($return = fetch):
            return self::$stmt->fetchAll(\PDO::FETCH_ASSOC);
        endif;
    }
}