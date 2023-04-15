<?php
namespace MVC\Models;
use Doctrine\ORM\Mapping as ORM;
use MVC\Core\Model;
use MVC\Config\database;
/**
 * @ORM\Entity
 * @ORM\Table(name="task")
 */
class NoteModel extends Model
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="string")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_create;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_update;

    // Các hàm getter/setter
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }
    public function getDescription(){
        return $this->description;
    }
    public function setDescription($description){
        $this->description =$description;
     }
    public function getDateCreate(){
        return $this->date_create;
     }
    public function getDateUpdate(){
        return $this->date_update;
    }

}
class NoteResourceModel extends ResourceModel{ 
    public function __construct(){ 
        $noteModel = new NoteModel();
        $this ->_init("notes","Id",$noteModel); 
} 
} 
?>