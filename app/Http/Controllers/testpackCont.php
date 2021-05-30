<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\ideareg;
use App\Models\studreg;
use App\Models\admin;
use App\Models\mentmonitor;
use App\Models\mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;
use Illuminate\Support\Facades\url;
use Illuminate\Support\Facades\DB;

class testpackCont extends Controller{
public function insert(request $request)
{
        $data= new ideareg();
        $datas= new studreg();

        $datas->stud_ucid=$request->UCID;
        $datas->stud_email=$request->Email_of_applicant;
        $datas->stud_dept=$request->Department_of_Applicant;
        $datas->stud_year=$request->Year_of_Applicant;
        $datas->stud_name=$request->Name_of_Applicant;
        $datas->stud_phone=$request->Mb_no_of_applicant;

        $data->idea_title=$request->Idea_Title;

        $idd=$request->UCID.'_'.$request->Idea_Title;
        $data->idea_id=$idd;

        $data->idea_domain=$request->Idea_Domain;
        $data->idea_desc=$request->Idea_desc;
        $data->idea_out=$request->Idea_out;

        $title=$request->Idea_Title;
        $file=$request->file;
        $filename=$title.'.'.$file->getClientOriginalExtension();
        $request->file->move('assets',$filename);

        $data->file=$filename;

        $datas->idea_id_fk=$idd;

        $data->save();
        $datas->save();
        
        
       

        $stud_ucid2=$request->UCID2;

        if($stud_ucid2!=NULL){
            $stud_email2=$request->Email_of_applicant2;
            $stud_dept2=$request->Department_of_Applicant2;
            $stud_year2=$request->Year_of_Applicant2;
            $stud_name2=$request->Name_of_Applicant2;
            $stud_phone2=$request->Mb_no_of_applicant2;

            echo DB::insert('insert into studregs(stud_ucid ,stud_name ,stud_dept ,stud_year ,stud_email ,stud_phone ,idea_id_fk ) values(?,?,?,?,?,?,?)', [$stud_ucid2 ,$stud_name2 ,$stud_dept2 ,$stud_year2 ,$stud_email2 ,$stud_phone2 ,$idd]);   
        }
        
        
        $stud_ucid3=$request->UCID3;

        if($stud_ucid3!=NULL){
            $stud_email3=$request->Email_of_applicant3;
            $stud_dept3=$request->Department_of_Applicant3;
            $stud_year3=$request->Year_of_Applicant3;
            $stud_name3=$request->Name_of_Applicant3;
            $stud_phone3=$request->Mb_no_of_applicant3;

            echo DB::insert('insert into studregs(stud_ucid ,stud_name ,stud_dept ,stud_year ,stud_email ,stud_phone ,idea_id_fk ) values(?,?,?,?,?,?,?)', [$stud_ucid3 ,$stud_name3 ,$stud_dept3 ,$stud_year3 ,$stud_email3 ,$stud_phone3 ,$idd]);   
        }

        
        $stud_ucid4=$request->UCID4;

        if($stud_ucid4!=NULL){
            $stud_email4=$request->Email_of_applicant4;
            $stud_dept4=$request->Department_of_Applicant4;
            $stud_year4=$request->Year_of_Applicant4;
            $stud_name4=$request->Name_of_Applicant4;
            $stud_phone4=$request->Mb_no_of_applicant4;

            echo DB::insert('insert into studregs(stud_ucid ,stud_name ,stud_dept ,stud_year ,stud_email ,stud_phone ,idea_id_fk ) values(?,?,?,?,?,?,?)', [$stud_ucid4 ,$stud_name4 ,$stud_dept4 ,$stud_year4 ,$stud_email4 ,$stud_phone4 ,$idd]);   
        }



        /*$id1=$request->input('id');
        $name1=$request->input('name');
        echo DB::insert('insert into testpacks(id,name) values(?,?)', [$id1,$name1]);*/
      
        
}

public function adminlogin(request $request){

                $data_ad= new admin();

                $admin_name=$request->admin_name;
                $admin_pass=$request->admin_pass;

                $tkad=DB::select('select * from admins where admin_name=? and admin_pass=?',[$admin_name,$admin_pass]);

                if(count($tkad)==1){
                    return view('admin_page');
                }
                else{
                    return view('login');
                }

}

public function mentordata(){

    $data_ment=mentor::all();
    $data_idea=ideareg::all();
    return view('mentor_data',compact('data_ment','data_idea'));
}

public function addmentidea(request $request){

    
    $data_ment_id= new mentor();

    $mentor_id=$request->mentor_id;
    $idea_ment_id=$request->idea_ment_id;

    echo DB::update('update mentors set ment_idea_id_fk=? where ment_id=?',[$idea_ment_id,$mentor_id]);

    
    
    $data_ment=mentor::all();
    $data_idea=ideareg::all();
    return view('mentor_data',compact('data_ment','data_idea'));
    
    

}

public function deletement(request $request){

    $mentor_id=$request->mentor_id;
    DB::update('delete from mentors where ment_id=?',[$mentor_id]);

    $data_ment=mentor::all();
    $data_idea=ideareg::all();
    return view('mentor_data',compact('data_ment','data_idea'));
}

public function addmentor(request $request){

            $data_m_add=new mentor();

            $data_m_add->ment_fullname=$request->mentor_name;
            $data_m_add->ment_dept=$request->mentor_dept;
            $data_m_add->ment_username=$request->mentor_username;
            $data_m_add->ment_pass=$request->mentor_pass;
            $data_m_add->ment_idea_id_fk=$request->mentor_idea_id;
            $m_id=$request->mentor_name.'_'.$request->mentor_dept;
            $data_m_add->ment_id=$m_id;

            $data_m_add->save();

            $data_ment=mentor::all();
            $data_idea=ideareg::all();
            return view('mentor_data',compact('data_ment','data_idea'));

}

public function mentorlogin(request $request){

    
    $data_ment_log= new mentor();

    $ment_log_user=$request->ment_log_user;
    $ment_log_pass=$request->ment_log_pass;

    $tkad=DB::select('select * from mentors where ment_username=? and ment_pass=?',[$ment_log_user,$ment_log_pass]);

    if(count($tkad)==1){
            $data_mon_ment=DB::select('select * from mentors where ment_username=? and ment_pass=?' ,[$ment_log_user,$ment_log_pass]);
            $data_mon_idea=DB::select('SELECT idearegs.idea_title
                                       FROM idearegs
                                       INNER JOIN mentors ON idearegs.idea_id = mentors.ment_idea_id_fk
                                       where ment_username=? and ment_pass=?' ,[$ment_log_user,$ment_log_pass]);

            $data_mmon_log=mentmonitor::all();
            return view('mentor_login',compact('data_mmon_log','data_mon_ment','data_mon_idea'));
    }
    else{
        return view('iedcportal');
    }

}

public function mentormonitorp(request $request){

    $data_moni_ins=new mentmonitor();

    $data_moni_ins->ment_m_id=$request->ment_moni_id;
    $data_moni_ins->idea_m_id=$request->ment_moni_idea;
    $data_moni_ins->idea_m_title=$request->ment_moni_title;
    $data_moni_ins->week_progress=$request->week_p;
    $data_moni_ins->parameters=$request->para;

    $data_moni_ins->save();

    echo("save");


}








}

?>