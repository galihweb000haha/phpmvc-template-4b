<?php

class Router
{

    public static function parse($url, $request)
    {   
        $url = trim($url);

        if ($url == "/phpmvctemplate4b/")
        {

            // Controller Default Yeyeyeye
            $request->controller = "home";
            // Method Default Owowowow
            $request->action = "index";
            // Params Default Kozonk
            $request->params = [];
        }
        else
        {
            $explode_url = explode('/', $url);
            $explode_url = array_slice($explode_url, 2);
            $request->controller = $explode_url[0];
            
            if(count($explode_url) > 1){
                if($explode_url[1]){
                    $request->action = $explode_url[1];
                }else{
                    $request->action = 'index';
                }
                if($explode_url[2]){
                    $request->params = array_slice($explode_url, 2);
                }else{
                    $request->params = [];
                }
            }else{
                $request->action = "index";
                $request->params = [];
            }
        }
    }
}
?>