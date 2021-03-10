<?php
class Email
{
    protected $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllEmailsSortByDate()
    {
        $this->db->query('SELECT * FROM emails ORDER BY date ASC');
        $results = $this->db->resultset();
        return $results;
    }

    public function getAllEmailsSortByName()
    {
        $this->db->query('SELECT * FROM emails ORDER BY email ASC');
        $results = $this->db->resultset();
        return $results;
    }


    /*
    Gets whole email column from database
    Iterates trough it and strips name from domain
    Returns array with only unique domain names
    */
    public function getUniqueEmailProviders()
    {
        $this->db->query('SELECT email FROM emails');
        $results = $this->db->resultsetColumn();
        $domainArray = array();
        foreach ($results as $email) {
            $domain = explode('@', $email);
            array_push($domainArray, end($domain));
        }
        return array_unique($domainArray);
    }

    public function filterEmailByDomain($domain)
    {
        $this->db->query('SELECT * FROM emails WHERE email LIKE :domain');

        // Bind values
        $this->db->bind(':domain', "%$domain");
        return $this->db->resultSet();
    }

    public function getEmailByEmail($email)
    {
        $this->db->query('SELECT * FROM emails WHERE email = :email');
        // Bind values
        $this->db->bind(':email', $email);
        return $this->db->resultSet();
    }

    public function deleteEmails($emailsToDelete)
    {

        for ($i = 0; $i < count($emailsToDelete); $i++) {
            $this->db->query('DELETE FROM emails WHERE email = :email');
            // Bind values
            $this->db->bind(':email', $emailsToDelete[$i]);
            // Execute
            $this->db->execute();
        }
        return true;
    }
}
