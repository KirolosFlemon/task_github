<?php

class ApiController extends Controller{

    function whereEqu($key, $inputName, $defaultValue = null)
    {
        $req = json_decode(file_get_contents('php://input'),true);
        
        if (isset($req[$inputName]) && (!empty($req[$inputName]) || strlen($req[$inputName]) != 0)) {
            $where =$key .$req[$inputName];
        } else {
            $where = !is_null($defaultValue) ?$key .$defaultValue :'' ;
        }
        return $where;
    }

    public $curl;
    public function getDataApi(){
        $where=$this->HandleUrlGithub();
        
        $urlData = new url();

            $data = new api($urlData->url_github.'?sort=stars&order=desc&q='.$where);
      
            echo($data->result);
        
    }
    private function HandleUrlGithub(){
        $where="";

        $where .= $this->whereEqu('created:%3E', 'date' , '2019-01-10');
        $where .= $this->whereEqu('+language:', 'language');
        $where .= $this->whereEqu('&per_page=', 'perpage',10);
        $where .= $this->whereEqu('&page=', 'page',1);

       return $where;
        
    }

}
?>