<?php
class UserMenu extends CWidget {

    public function init() {
        
    }
    public function run() {
                 
       if(Yii::app()->user->checkAdmin())
        {
           $this->render("menuadmin");
        }
        else
        if(Yii::app()->user->checkStudent())
        {
            $this->render("menustudent");
        }
        else
        if(Yii::app()->user->checkTeacher())
        {
            $this->render("menuteacher");
        }
        else
        if(Yii::app()->user->checkParent())
        {
            $this->render("menuparent");
        }
    }

}
?>
