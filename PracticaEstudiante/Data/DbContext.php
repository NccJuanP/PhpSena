<?php

class DbContext
{
    //public $db = new mysqli("bodmr46yfrnd3kjtsmh1-mysql.services.clever-cloud.com", "ulxuu7gvylmirzlk", "Fprxht4DoiZc189bTPqd", "bodmr46yfrnd3kjtsmh1");
    public function DbSet(){
        return new mysqli("bodmr46yfrnd3kjtsmh1-mysql.services.clever-cloud.com", "ulxuu7gvylmirzlk", "Fprxht4DoiZc189bTPqd", "bodmr46yfrnd3kjtsmh1");;
    }
}
