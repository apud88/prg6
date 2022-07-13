<?php namespace App\Models;
use CodeIgniter\Model;

class Pinjam_model extends Model
{    
    protected $table = 'students'; 
    
    public function getUser($id = false)
    { 
        if($id === false){ 
            return $this->findAll();
        }else{
            return $this->getWhere(['studentid' => $id]);
        }     
    }

    //join 5 table
    public function query_join() {
        $query =  $this->db->table('students')
         ->join('borrows', 'borrows.studentid = students.studentid')
         ->join('books', 'books.bookid = borrows.bookid')
         ->join('authors', 'authors.authorid = books.authorid')
         ->join('types', 'types.typeid = books.typeid')
        //  ->select('students.studentid','students.name_student','borrows.takenDate','borrows.broughtDate','books.name',
        //  'books.pagecount','authors.name','types.name')
         ->get()->getResultArray(); 
        return $query;
    }

    public function saveUser($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function getLevel() {
 
        $query = $this->db->query('select * from level');
        return $query->getResult();
     }
 
    function gelLevelId($id){
        $hasil=$this->db->query("SELECT * FROM level WHERE id_level='$id'");
        return $hasil->result();
    }
}