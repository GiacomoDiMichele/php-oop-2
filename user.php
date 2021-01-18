<?php
class User
{
    public $nome;
    public $cognome;
    public $email;

    function __constructor($_nome, $_cognome) {

        $this->nome = $_nome;
        $this->cognome = $_cognome;

        }

        public function findChar($_email){
            if (strpos($_email, '@') !== true) {
                echo 'carattere speciale mancante, @ non inserita'
            }
            else {
                $this->email = $_email;
            }
        }
}

?>
