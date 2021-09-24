<?php
namespace App\Classes;
/**
 * This class uses ActivityTracking model to log the user activity
 * 
 * 
 */
use App\Models\ActivityTracking;

class ActivityLog 
{
    
    public static function log($log_data){
        $row = new ActivityTracking;
        $row->username = $log_data['username'];
        $row->firstname = $log_data['firstname'];
        $row->surname = $log_data['surname'];
        $row->gender = $log_data['gender'];
        $row->activity_type = $log_data['activity_type'];
        $row->activity_desc = $log_data['activity_desc'];
        $row->user_role = $log_data['user_role'];
        $row->student_reg_number = $log_data['student_reg_number'];
        $row->class = $log_data['class'];
        $row->programme = $log_data['programme'];
        $row->department = $log_data['department'];
        $row->save();

    }

    public static  function log_student($log_data){          
        $row = new ActivityTracking;
        $row->username = session('user');
        $row->firstname = session('firstname');
        $row->surname = session('surname');
        $row->gender = session('gender');
        $row->activity_type = $log_data['activity_type'];
        $row->activity_desc = $log_data['activity_desc'];
        $row->user_role = session('role');
        $row->student_reg_number = session('student_reg_number');
        $row->class = session('class');
        $row->programme = session('programme');
        $row->department = session('department');
        $row->student_type = session('student_type');
        $row->save();
    }
}
