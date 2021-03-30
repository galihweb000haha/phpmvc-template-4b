<?php
    class Controller
    {
        var $vars = [];
        var $layout = "default";

        function params($d)
        {
            $this->vars = array_merge($this->vars, $d);
        }

        function view($filename)
        {
            extract($this->vars);
            ob_start();
            require(ROOT . "Views/" . ucfirst(str_replace('Controller', '', get_class($this))) . '/' . $filename . '.php');
            $content = ob_get_clean();

            if ($this->layout == false)
            {
                $content;
            }
            else
            {
                require(ROOT . "Views/Bones/" . $this->layout . '.php');
            }
        }
        function model($model){
            require(ROOT . 'Models/'.$model.'.php');
            return new $model;
        }

        private function secure_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        protected function secure_form($form)
        {
            foreach ($form as $key => $value)
            {
                $form[$key] = $this->secure_input($value);
            }
        }

    }
?>