<?php

class FormSubmission
{

    public function __construct(
        private string $nomComplet,
        private string $email,
        private string $sexe,
        private string $contact,
        private string $secteur,
        private string $participation,
        private string $annonce
    )
    {
    }

    public function validate()
    {
        if (empty($this->nomComplet) || empty($this->email) || empty($this->sexe) || empty($this->contact) || empty($this->secteur) || empty($this->participation)) {
            throw new Exception('Please fill in all required fields.');
        } else if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Please enter a valid email address.');
        }
    }

    public function save()
    {
        //  use   mysql with  prepared statement
        $pdo = new PDO('mysql:host=localhost;dbname=administration', 'root', '');
        $stmt = $pdo->prepare('INSERT INTO inscription (nom_complet, email, sexe, contact, secteur, participation, annonce) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $stmt->execute([
            $this->nomComplet,
            $this->email,
            $this->sexe,
            $this->contact,
            $this->secteur,
            $this->participation,
            $this->annonce
        ]);
    }
}
