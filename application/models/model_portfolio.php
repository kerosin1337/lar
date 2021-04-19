<?php


class Model_Portfolio extends Model
{
    public function get_data()
    {
        require_once 'connection.php';

        $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка " . mysqli_error($link));
        $query ='SELECT * FROM portfolio';
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

        $arr = [];
        foreach ($result as $item) {
            array_push($arr,
                array(
                    'Year' => $item['year'],
                    'Site' => $item['site'],
                    'Description' => $item['description'],
                )
            );
        }
        mysqli_close($link);
        return $arr;
    }
}
