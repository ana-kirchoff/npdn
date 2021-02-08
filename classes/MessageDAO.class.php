<?php
namespace classes;

use database\DBQuery;

require_once '../database/DBQuery.class.php';
require_once '../classes/Message.class.php';

class MessageDAO {
    
    private  $dbQuery;
    
    function __construct() {
        
        $tableName  = "poophp.messages";
        $fields     = "idMessage, emailRemetente, assunto, texto, dthrEnvio, lido";
        $keyField   = "idMessage";
        
        $this->dbQuery = new DBQuery($tableName, $fields, $keyField);
    }
    
    
    public function create( Message $message) {
       return ($this->dbQuery->insert( $message->toArray()) );
    }
    
    public function read( Message $message) {
       return( $this->listByField( 'idMessage', $message->getIdMessage()));
    }
    
    public function update( Message $message) {
       return( $this->dbQuery->update($message->toArray()) ); 
    }
    
    public function delete( Message $message) {
        return( $this->dbQuery->delete($message->getIdMessage()) );
    }
   
    public function listByField( $field, $value ) {
       return(  $this->dbQuery->selectByField($field, $value) );
    }
    
    public function listAll ( $where ) {
       return( $this->dbQuery->select($where) );
    }
    
}


?>