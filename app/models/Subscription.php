<?php
class Subscription
{
    protected $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function addEmail($data)
    {
        $this->db->query('INSERT INTO emails (email) VALUES (:email)');

            // Bind values
            $this->db->bind(':email', $data['email']);

            // Execute
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
    }
}
