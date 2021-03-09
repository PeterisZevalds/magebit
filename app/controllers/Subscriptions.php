<?php

class Subscriptions extends Controller
{
    public function __construct()
    {
        $this->subscriptionModel = $this->model('Subscription');
    }

    public function index()
    {
        $data = [
            'title' => 'Magebit',
            'email' => '',
            'error' => ''
        ];

        $this->view('subscription/form', $data);
    }

    public function add()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => trim($_POST['email']),
                'tosCheckbox' => isset($_POST['tosCheckbox']),
                'error' => '',
            ];

            /*

            Validate data

            */
            // Check if there is value in email input
            if (empty($data['email'])) {
                $data['error'] = 'Email address is required';

                // Validates email
            } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['error'] = 'Please provide a valid e-mail address';

                // Checks if email ends with '.co'
            } else if (substr($data['email'], -3) == '.co') {
                $data['error'] = 'We are not accepting subscriptions from Colombia';

                // Check if terms of service checkbox is checked
            } else if (!isset($_POST['tosCheckbox'])) {
                $data['error'] = 'You must accept the terms and conditions';
            }


            // Check if phpError is empty. If error is empty call Subscription model and execute addEmail() method.
            if (empty($data['error'])) {

                // Calls addEmail() in subscription model and loads success view
                if ($this->subscriptionModel->addEmail($data)) {
                    $this->view('subscription/success', $data);
                }

                // If there is error, reloads form view with updated data 
            } else {
                $this->view('subscription/form', $data);
            }
        } else {
            $data = [
                'email' => '',
                'tosCheckbox' => ''
            ];

            $this->view('subscription/form', $data);
        }
    }
}
