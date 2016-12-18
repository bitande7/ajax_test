<?php

class AjaxClass
{
    public function __construct(array $ajax_data)
    {
        if(method_exists(self::class,"ajax_".$ajax_data['m_name'])) {

            $action = "ajax_".$ajax_data['m_name'];

            $this->$action($ajax_data);

        }
    }

    protected function ajax_first_way(array $ajax_data)
    {
        array_shift($ajax_data);

        $avg = 0;
        foreach ($ajax_data as $item) {
            $avg += $item;
        }

        $avg /= count($ajax_data);
        echo 'Average = '.$avg;
    }

    protected function ajax_second_way(array $ajax_data)
    {
        array_shift($ajax_data);


        $sum = 0;
        foreach ($ajax_data as $item) {
            $sum += $item;
        }

        echo 'Total sum = '.$sum;
    }

}

(new AjaxClass($_POST));
