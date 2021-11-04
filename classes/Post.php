<?php

class Post
{
    private $title;
    private $content;
    private $author;

    private $error = [];

    private $bad_words = [
        'fuck',
        'asshole',
        'pussy',
        'mother fucker',
    ];
    private $your_bad_words = [];

    public function __construct()
    {
        $this->title = $this->sanitize($_POST['title']);
        $this->content = $this->sanitize($_POST['content']);
        $this->author = $this->sanitize($_POST['author']);

        $this->validateTitle();
        $this->validateName();
        $this->validateContent();

    }

    public function newData(): array
    {
        return [
            "data"=>
                [
                    "title"=>$this->title,
                    "date"=>date("Y/m/d Hs:i"),
                    "content"=>$this->content,
                    "author" => $this->author]
            ];
    }

    public function newPost($content) {
        if(count($this->error) == 0) {
            file_put_contents("./data/data.json", json_encode($content));
        }
    }

    /**
     * @param $input
     * @return the sanitized user input
     */
    private function sanitize($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    private function filterBadWord($data) : array {
        foreach($this->bad_words as $word) {
            if(stristr($data,$word) != '') {
                $this->your_bad_words[] = stristr($data,$word);
            }
        }
        return $this->your_bad_words;
    }

    private function validateName() {
        if(!isset($this->author) || empty($this->author)) {
            $this->error['author'] = 'Name is required';
        }
    }

    private function validateTitle() {
        if(!isset($this->title) || empty($this->title)) {
            $this->error['title'] = 'Title is required';
        }
    }

    private function validateContent() {
        if(!isset($this->content) || empty($this->content)) {
            $this->error['content'] = 'Please leave your message';
        }
        else if(count($this->filterBadWord($this->content)) > 0){
            $this->error['content'] = 'You enter following bad words. ' .implode(', ', $this->your_bad_words);
        }
    }

    public function getErrors() : array {
        return $this->error;
    }


}