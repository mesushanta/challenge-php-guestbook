<?php

class PostLoader
{
    private $data;
    private $next = false;
    private $prev = false;


    /**
     * @param $data
     */
    public function __construct()
    {
        $file_content = file_get_contents("./data/data.json");
        $this->data = json_decode($file_content);
    }

    /**
     * @return mixed
     * @param $p = page number
     * @param $n = number of post per page
     */


    public function getData($p, $n)
    {
        $all_data = array_reverse($this->data);
        $count = count((array) $all_data);
        $filtered_data = [];
        if($count > (($p -1) * $n)) {
            foreach ($all_data as $i => $data) {
                if($i >= (($p-1) * $n) && $i < ($p*$n)) {
                    $filtered_data[] = $data;
                }
            }
        }

        else $filtered_data = $all_data;

        if($p > 1) {
            $this->prev = true;
        }

        if($count > ($p * $n)) {
            $this->next = true;
        }

        return $filtered_data;
    }

    /**
     * @return bool
     */
    public function isNext(): bool
    {
        return $this->next;
    }

    /**
     * @return bool
     */
    public function isPrev(): bool
    {
        return $this->prev;
    }





}