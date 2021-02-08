<?php

namespace classes;

require_once '../classes/MessageDAO.class.php';

class Message{
    
    private $idMessage;
    private $emailRemetente;
    private $assunto;
    private $texto;
    private $dthrEnvio;
    private $lido;
    
    private $messageDao;
    
    
    function __construct( $idMessage, $emailRemetente, $assunto, $texto, $dthrEnvio, $lido ) {
        $this->setIdMessage($idMessage);
        $this->setEmailRemetente($emailRemetente);
        $this->setAssunto($assunto);
        $this->setTexto($texto);
        $this->setDthrEnvio($dthrEnvio);
        $this->setLido($lido);
        
        $this->messageDao =  new MessageDAO();
    }
    
    
    
    public function toArray(){
        return (
            array(
                $this->getIdMessage(),
                $this->getEmailRemetente(),
                $this->getAssunto(),
                $this->getTexto(),
                $this->getDthrEnvio(),
                $this->getLido()
            )
         );
        
    }
    
    public function save(){
        
        if ( $this->getIdMessage() == 0 ){
           return( $this->messageDao->create($this));
        }else{
           return( $this->messageDao->update($this));
        }
    }
    
    public function delete(){
        if ( $this->getIdMessage() > 0 ){
            $this->messageDao->delete($this);
        }
    }
    
    public function listMe(){
        if ( $this->getIdMessage() > 0 ){
            return(  $this->messageDao->listByField('idMessage', $this->getIdMessage()));
        }
    }
    
    public function listByEmail(){
        if ( $this->getEmailRemetente() != "" ){
            return(  $this->messageDao->listByField('emailRemetente', $this->getEmailRemetente()));
        }
    }

    public function listAllNotRead  (){
       return( $this->messageDao->listByField('lido', 0));
    }
    
    
    /**
     * idMessage
     * @return int
     */
    public function getIdMessage(){
        return $this->idMessage;
    }

    /**
     * idMessage
     * @param int $idMessage
     * @return Message{
     */
    public function setIdMessage($idMessage){
        $this->idMessage = $idMessage;
        return $this;
    }

    /**
     * emailRemetente
     * @return string
     */
    public function getEmailRemetente(){
        return $this->emailRemetente;
    }

    /**
     * emailRemetente
     * @param string $emailRemetente
     * @return Message{
     */
    public function setEmailRemetente($emailRemetente){
        $this->emailRemetente = $emailRemetente;
        return $this;
    }

    /**
     * assunto
     * @return string
     */
    public function getAssunto(){
        return $this->assunto;
    }

    /**
     * assunto
     * @param string $assunto
     * @return Message{
     */
    public function setAssunto($assunto){
        $this->assunto = $assunto;
        return $this;
    }

    /**
     * texto
     * @return string
     */
    public function getTexto(){
        return $this->texto;
    }

    /**
     * texto
     * @param string $texto
     * @return Message{
     */
    public function setTexto($texto){
        $this->texto = $texto;
        return $this;
    }

    /**
     * dthrEnvio
     * @return string
     */
    public function getDthrEnvio(){
        return $this->dthrEnvio;
    }

    /**
     * dthrEnvio
     * @param string $dthrEnvio
     * @return Message{
     */
    public function setDthrEnvio($dthrEnvio){
        $this->dthrEnvio = $dthrEnvio;
        return $this;
    }

    /**
     * lido
     * @return int
     */
    public function getLido(){
        return $this->lido;
    }

    /**
     * lido
     * @param int $lido
     * @return Message{
     */
    public function setLido($lido){
        $this->lido = $lido;
        return $this;
    }

}

?>

