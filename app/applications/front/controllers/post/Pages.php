<?php
/**
 * Created by PhpStorm.
 * User: cassie
 * Date: 8/1/18
 * Time: 10:49 AM
 */

class Pages extends PostController {

    public function calendar(){
        $uid = $_SESSION["userid"];
        $userproperties=Menteeinformation::userproperties();
        $bookinglist=Booking::bookinglist($userproperties);
        $listoftopevents = Booking::gettopbookedevents($userproperties);
        $lessoncontentarray = array("booking" => $bookinglist, "listoftopevents"=>$listoftopevents);
        $this->view('pages/calendarview',$lessoncontentarray);
    }


    public function bookingform(){

        $this->view('pages/bookingform');
    }
    public function adhocform(){
        $userproperties=Menteeinformation::userproperties();
        $viewdata=array(
            "userproperties"=>$userproperties,
            "uniqueadhocuploadid"=>time()
        );
        $this->view('pages/adhocform',$viewdata);
    }
    public function submitbooking(){
        $userproperties=Menteeinformation::userproperties();
        $role = $userproperties->role;
        $mentorname = $userproperties->mentorname;
        $mfcname = $userproperties->mfcname;
        $mentoruid = $userproperties->mentoruid;
        $mfcuid = $userproperties->mfcuid;

        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        $booking = new Booking();
        $book = &$booking->recordObject;
        $book->date = date("Y-m-d",strtotime($date));
        $book->topic = $topic;
        $book->time = $time;
        $book->duration = $duration;
        $book->sender = $role;
//        save all userid no matter who is been booked
        $book->mentoruid = $mentoruid;
        $book->menteeuid = $menteeuid;
        $book->mfcuid = $mfcuid;
        $userdata = new User($idone);
        $usertype = $userdata->listRoles();
        $user = &$userdata->recordObject;

        if ($number == 1) {

            if ($role == 'Mentee'){
                if ($usertype[0] == 'Mentor' || $usertype[0] == 'Mentee') {
                    $book->person_mentor = $mentorname;
                    $book->person_mentee = $menteename;
                }else{
                    $book->person_mfc = $mfcname;
                    $book->person_mentee = $menteename;
                }

            }elseif ( $role == 'Mentor'){
                if ($usertype[0] == 'Mentor' || $usertype[0] == 'Mentee') {
                    $book->person_mentor = $mentorname;
                    $book->person_mentee = $menteename;
                }else{
                    $book->person_mfc = $mfcname;
                    $book->person_mentor = $mentorname;
                }
            }else{
                if ($usertype[0] == 'Mentee') {
                    $book->person_mfc = $mfcname;
                    $book->person_mentee = $menteename;
                }elseif ($usertype[0] == 'Mentor'){
                    $book->person_mfc = $mfcname;
                    $book->person_mentor = $mentorname;
                }
            }

            $book->single = 1;
        }else if($number == 2){
            $userdata1 = new User($idtwo);
            $user1 = &$userdata1->recordObject;
            $book->person_mentor = $mentorname;
            $book->person_mentee = $menteename;
            $book->person_mfc = $mfcname;
            $book->single = 0;
        }
        $booking->store();

    }

    public function updatebooking(){
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        $booking = new Booking($bookingid);
        $book = &$booking->recordObject;
        $book->date = date('Y-m-d', strtotime($date));
        $book->time = $time;
        $book->duration = $duration;

        $booking->store();

    }

    public function updateacceptedbooking(){
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        $booking = new Booking($bookingid);
        $book = &$booking->recordObject;
        $book->accepted = 1;

        $booking->store();

    }


    public function assigmentupload()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        $name = $_FILES['file']['name'];
        $type = $_FILES['file']['type'];
        $size = $_FILES['file']['size'];

        $docdate = date("Y-m-d");
        $uploads = new Uploads();
        $uploads->filename = $_FILES['file'];
        $uploads->target_dir= EMENTORINGUPLOAD . '/public/uploads';
        $uploadresponse = $uploads->upLoadFile($filename);

        if ($uploadresponse['status'] == 'SUCCESS') {

            $newname = $uploadresponse['filename'];
            $docdata = new Documents();
            $doc = &$docdata->recordObject;
            $doc->newname = $newname;
            $doc->name = $name;
            $doc->type = $type;
            $doc->size = $size;
            $doc->uid=$menteeuid;
            $doc->cid=$cid;
            $doc->docdate = $docdate;
            $docdata->store();
        } else {
            echo 'Error Uploading File';
        }

    }


    public function imageupload(){
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $uploads = new Uploads();
        $uploads->filename = $_FILES['Filedata'];
        $uploads->target_dir = EMENTORINGUPLOAD . '/public/uploads/';
        $uploadresponse = $uploads->upLoadFile();

        if ($uploadresponse['status'] == 'SUCCESS') {

            $newname = $uploadresponse['filename'];
            $docdata = new User($userid);
            $doc = &$docdata->recordObject;
            $doc->profilephoto = $newname;
            $docdata->store();
            echo $newname;
        } else {
            echo 'Error Uploading File';
        }

    }





    public function eventview(){
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $event = Booking::geteventbyid($eventid);
        if(is_object($event)) $this->view('pages/eventview',$event);
    }

    public function deleteevent()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        Booking::deletevent($bookingid);

    }



    public function resetpassword(){
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        $uid = $_SESSION["userid"];
        $userdata = new MMUser($uid);
        $user = &$userdata->recordObject;
        $user->password = md5($password);

        $userdata->store();

    }


    public function updatementeeprofile(){
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $uid = $_SESSION["userid"];

        $basicdata = new MMUser($uid);
        $bas =& $basicdata->recordObject;
        $bas->firstname = $firstname;
        $bas->lastname = $lastname;
        $bas->postaladdress = $address;
        $bas->dateofbirth = date('Y-m-d', strtotime($dob));
        $bas->email = $email;
        $bas->location= $schoolocation;
        $bas->schoolname= $school;
        $bas->schoolform = $schoolform;
        $bas->classroom = $mclass;
        $bas->graduationclass = $graduationclass;
        $bas->educationworkerfirstname = $workerfirstname;
        $bas->educationworkerlastname = $workerlastname;
        $bas->educationworkerpostaladdress = $workeraddress;
        $bas->educationworkeremail = $workeremail;
        $bas->educationworkertelephone = $workerphone;
        $bas->reasonforjoining = $programreason;
        $bas->hobby = $hobbies;
        $bas->favoritesport = $sports;
        $bas->additionalinfo = $extrainfo;

        $basicdata->store();
        $path = $path = URLROOT."/ementoring/pages/meinprofil";
        header("Location:".$path);
    }

    public function updatementorprofile(){
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $uid = $_SESSION["userid"];

        $basicdata = new MMUser($uid);
        $bas =& $basicdata->recordObject;
        $bas->firstname = $firstname;
        $bas->lastname = $lastname;
        $bas->postaladdress = $address;
        $bas->yearofbirth = $dob;
        $bas->nationality = $nationality;
        $bas->email = $email;
        $bas->employer= $employer;
        $bas->jobtitle= $jobtitle;
        $bas->employerlocation = $employerlocation;
        $bas->educationlevel = $graduationclass;
        $bas->apprenticeship = $apprentice;
        $bas->hobby = $hobbies;
        $bas->favoritesport = $sports;
        $bas->reasonforjoining = $programreason;
        $bas->expectation = $expectation;
        $bas->additionalinfo = $extrainfo;

        $basicdata->store();
        $path = $path = URLROOT."/ementoring/pages/meinprofil";
        header("Location:".$path);
    }



    public function dashboardquery(){
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $pageproperties = (object) ['cid'=>$cid,'contenttitle'=>$contenttitle,'contenttype'=>$contenttype,'menteename'=>$menteename,'menteeuid'=>$menteeuid,'category'=>$category,'parentcategory'=>$parentcategory,'lessontype'=>$lessontype];
        $this->view('pages/dashboardquery',$pageproperties);
    }
    public function lessonsquery(){
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $pageproperties = (object) ['cid'=>$cid,'contenttitle'=>$contenttitle,'contenttype'=>$contenttype,'menteename'=>$menteename,'menteeuid'=>$menteeuid,'category'=>$category,'parentcategory'=>$parentcategory,'lessontype'=>$lessontype,'nextcid'=>$nextcid];
        $this->view('pages/lessonsquery',$pageproperties);
    }
    public function completelecture(){
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        Ratings::completelecture($rating,$parentcategory,$category,$cid,$menteeuid);
    }

    public function saveadhoc(){
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $dateposted=date('Y-m-d');
        $adhoc = new Addhoc();
        $adhocdata = &$adhoc->recordObject;
        $adhocdata->headline = $headline;
        $adhocdata->audience = $audience;
        $adhocdata->contenttype = $contenttype;
        $adhocdata->randomnumber = $randomnumber;
        $adhocdata->description = $description;
        $adhocdata->videolink = $videolink;
        $adhocdata->videotype = $videotype;
        $adhocdata->menteeid = $menteeid;
        $adhocdata->mentorid = $mentorid;
        $adhocdata->dateposted = $dateposted;

        $adhoc->store();

    }
    public function adhoclist(){
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        $list=Addhoc::adhoclist($menteeuid,$mentoruid);
        $viewdata=array(
            'list'=>$list,
            'menteeuid'=>$menteeuid,
            'mentoruid'=>$mentoruid
        );
        $this->view('pages/adhoclist',$viewdata);
    }
    public function viewadhoc(){
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $list=Addhoc::getadhocbyid($aid);
        $this->view('pages/viewadhoc',$list);
    }
    public function deleteadhoc(){
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $adhoc = new Addhoc($aid);
        $adhocdata = &$adhoc->recordObject;
        $adhocdata->deleted = 1;
        $adhoc->store();
    }
    public function forumlist(){
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
       
        $list=Forummessage::getmessages($contentid);
       
        $viewdata=array(
            'list'=>$list['messagelist'],
            'userid'=>$userid,
            'contentid'=>$contentid,
            'total'=>$list['total']
        );
        $this->view('pages/forumlist',$viewdata);
    }
    public function saveforummessage(){
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $dateposted=date('Y-m-d');
        $timeposted=date('h:i:s');
        $forum = new Forummessage();
        $forumdata = &$forum->recordObject;
        $forumdata->message = $message;
        $forumdata->uid = $userid;
        $forumdata->cid = $contentid;
        $forumdata->dateposted = $dateposted;
        $forumdata->timeposted = $timeposted;
        $forum->store();

    }
    public function saveforumstars(){
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        $rate = new Forumrating();
        $ratedate = &$rate->recordObject;
        $ratedate->star = $star;
        $ratedate->uid = $userid;
        $ratedate->msg_id = $messageid;

        $rate->store();

    }
    public function savereply(){
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $dateposted=date('Y-m-d');
        $timeposted=date('h:i:s');
        $reply = new Forumreply();
        $replydata = &$reply->recordObject;
        $replydata->reply = $message;
        $replydata->uid = $userid;
        $replydata->msg_id = $messageid;
        $replydata->dateposted = $dateposted;
        $replydata->timeposted = $timeposted;
        $reply->store();

    }

    public function saveassignment(){
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $dateposted=date('Y-m-d');
        $assignment = new TaskAssignment();
        $assignmentdata = &$assignment->recordObject;
        $assignmentdata->text = $task;
        $assignmentdata->cid = $contentid;
        $assignmentdata->menteeid = $menteeuid;
        $assignmentdata->mentorid = $mentoruid;
        $assignmentdata->date = $dateposted;
        $assignmentdata->type = $role;
        $assignment->store();

    }
    public function updateassignment(){
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $assignment = new TaskAssignment($taskid);
        $assignmentdata = &$assignment->recordObject;
        $assignmentdata->text = $task;
        $assignment->store();

    }
    public function assignmentlist(){
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }
        $list=TaskAssignment::listassignment($menteeuid,$contentid);
       
        $viewdata=array(
            'list'=>$list['list'],
            'menteeuid'=>$menteeuid,
            'mentoruid'=>$mentoruid,
            'contentid'=>$contentid,
            'role'=>$role,
            'fullname'=>$fullname,
            'total'=>$list['total']
        );
        $this->view('pages/taskassignmentlist',$viewdata);
    }
}