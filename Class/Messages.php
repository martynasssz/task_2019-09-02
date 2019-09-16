<?php
require'../Model/Model.php';
require'../View/create.php';

class Messages extends Helper
{
    public function store()
    {
            $CoverLetterObject = new Helper();
            $CoverLetterObject->uploadFile();

            $MessageObject = new \App\Model\PostModel();
            $MessageObject->setName($_POST['name']);
            $MessageObject->setEmail($_POST['email']);
            $MessageObject->setPhone($_POST['phone']);
            $MessageObject->setJobTitle($_POST['jobtitle']);
            $MessageObject->setResume($_FILES["resume"]["name"]);
            $MessageObject->save();
        }

    }