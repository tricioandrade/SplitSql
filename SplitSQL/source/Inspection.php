<?php


namespace App\SplitSQL;



use App\Control\Message;
use App\thisApp\Notify;

class Inspection extends SGBD
{

    private static function BugMessage(){
        Message::bugMessage('Por favor Preencha Todos os Campos');
    }

    #SQLcount
    /*count 1*/
    public static function sql_count_by_1_row($table, $row1, $value){
        return SQLselect::SELECT("$row1", "$table", "$row1", "$value", self::CountRows);
    }
    /*count 2*/
    public static function sql_count_by_2_row($table, $row1, $value1, $row2, $value2){
        $Query = new __Query(host_, db, user_, key, charset);
        return $Query->SplitSQL("SELECT * FROM $table WHERE $row1 = $value1 AND $row2 = $value2");
    }
    /*count 1 by row limit*/
     public static function sql_count_by_1_row_limit( $row1, $table, $where_row, $value , $limit){
        return  SQLselect::SELECT_WHERE_LIMIT("$row1", "$table", "$where_row", "$value", $limit,self::CountRows);
     }
    /*count all in table*/
    public static function sql_count_all_in_table(string $table){
        return SQLselect::SELECT_ALL("$table", self::CountRows);
    }

    #Empty and Null Variables Verifying
    public static function is_not_empty(array $variaveis):  bool{
        for ($i = 0; $i < count($variaveis); $i++):
            if (in_array( '', $variaveis) || empty($variaveis[$i]) || $variaveis[$i] == null):
                Message::bugMessage('Campos Vazios');
                return false;
            else:
                return true;
            endif;
        endfor;
    }

}