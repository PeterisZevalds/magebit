<?php

class Emails extends Controller
{
    public function __construct()
    {
        $this->emailModel = $this->model('Email');
    }

    public function index()
    {
        $emails = $this->emailModel->getAllEmailsSortByDate();
        $emailProviders = $this->emailModel->getUniqueEmailProviders();
        $data = [
            'emails' => $emails,
            'emailProviders' => $emailProviders
        ];

        $this->view('email/list', $data);
    }

    /* 
    
    Search by email input
    Model -> Calls getEmailByName method and reloads view with new data

    */

    public function searchByEmail()
    {
        $emailToSearch = $_POST['searchEmail'];
        $email = $this->emailModel->getEmailByEmail($emailToSearch);
        $emailProviders = $this->emailModel->getUniqueEmailProviders();
        $data = [
            'emails' => $email,
            'emailProviders' => $emailProviders
        ];
        $this->view('email/list', $data);
    }

    /* 
    
    Sort all emails by date
    Model -> Calls getAllEmailsSortByDate method and reloads view with new data

    */

    public function sortByDate()
    {
        $emails = $this->emailModel->getAllEmailsSortByDate();
        $emailProviders = $this->emailModel->getUniqueEmailProviders();
        $data = [
            'emails' => $emails,
            'emailProviders' => $emailProviders
        ];

        $this->view('email/list', $data);
    }

    /* 
    
    Filter by email domain
    Model -> Calls filterEmailByDomain method and reloads view with new data

    */

    public function filterByDomain()
    {
        $domain = $_POST['filterByDomain'];
        $emails = $this->emailModel->filterEmailByDomain($domain);
        $emailProviders = $this->emailModel->getUniqueEmailProviders();
        $data = [
            'emails' => $emails,
            'emailProviders' => $emailProviders
        ];
        $this->view('email/list', $data);
    }

    /* 
    
    Sort all emails by name
    Model -> Calls getAllEmailsSortByName method and reloads view with new data

    */

    public function sortByName()
    {
        $emails = $this->emailModel->getAllEmailsSortByName();
        $emailProviders = $this->emailModel->getUniqueEmailProviders();
        $data = [
            'emails' => $emails,
            'emailProviders' => $emailProviders
        ];
        $this->view('email/list', $data);
    }

    /* 
    
    Checks for POST method and if any input is selected
    If there is data in "selected" data in POST method, call delete method and deletes all selected emails
    Model -> Calls deleteEmails method and reloads view with new data

    */

    public function deleteSelected()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['selected'])) {
            $emailArray = $_POST['selected'];
            if ($this->emailModel->deleteEmails($emailArray)) {
                $this->index();
            }
        } else {
            $this->index();
        }
    }
}
