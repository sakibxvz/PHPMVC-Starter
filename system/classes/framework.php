<?php 

class framework{
    public function view($viewName,$data=[])
    {
        if (file_exists("../app/views/".$viewName.".php")) {
            require_once "../app/views/$viewName.php";
        }else{
            echo "<div style='margin:0;padding: 10px;background-color:silver;'>Sorry $viewName.php not found</div>";
        }
    }

    public function model($modelName)
    {
        if (file_exists("../app/models/" . $modelName . ".php")) {
            require_once"../app/models/$modelName.php";
            return new $modelName;
        }else{
            echo "<div style='margin:0;padding: 10px;background-color:silver;'>Sorry $modelName.php not found</div>";
        }
    }
}