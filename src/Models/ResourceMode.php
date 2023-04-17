<?php
namespace MVC\Models;
use MVC\Config\Database;
use MVC\Core\ResourceModelInterface;
use \PDO;
class ResourceModel implements ResourceModelInterface{
    protected $table;
    protected $id;
    protected $model;
    public function _init($table, $id, $model){
        $this->table = $table;
        $this->id = $id;
        $this->model = $model;
    }
    public function get($id){
        get_class();
        $sql = "SELECT * FROM ";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return ($req->fetchAll(PDO::FETCH_CLASS,));
    }
    public function getAll(){
        get_class();
        $sql = "SELECT * FROM WHERE";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return ($req->fetchAll(PDO::FETCH_CLASS,));

    }
    public function save($model){
        // Lưu model vào cơ sở dữ liệu
        $arrayModel = array(
            "id" => "null",
            "title" => "",
            "name" => "This is name"
        );
        $id = $arrayModel[$myId];
        $stringModel ="title = title, name = :name";

        if ($arrayModel['myId'] == null){
            $sql = "UPDATE INTO SET";
        }
        else{
            $sql = "UPDATE SET WHERE";
        }
        $req = Database::getBdd()->prepare($sql);
        return $req->execute($arrayModel);

    }
    public function delete($id){
        // Xóa model khỏi cơ sở dữ liệu
        $sql = "DELETE FROM WHERE";
        $req = Database::getBdd()->prepare($sql);
        return $req->execute();
    }
}
?>