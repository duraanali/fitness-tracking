<?php
 
class GoalsModel extends CI_Model
{
    function Goals()
    {       
        parent::Model();   
    }
    
    function insertGoal($goal)
    {
        $this->db->insert('goals', $goal); // insert data into `trn_employee`    
        //table 
    }
}
?>