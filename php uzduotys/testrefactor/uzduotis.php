<?php
/*I'm new to PHP and trying to create a form with all fields required, including one where a file must be selected. Here is what I would like to achieve:

user must complete 4 fields + upload a file
file can only be of a certain type + under a certain size
if user does not complete one of the requirements and clicks submit, the word "Required" appears next to the empty field
if selected file does not meet criteria, a different message appears
data is preserved in the fields that were filled in if the user left something blank and has to go back to fill it in.
when form submits, info goes into database + into an email
I am close but missing something. If I select a file that meets the requirements, the form submits even if the other fields are blank. As long as the form field is empty, the other fields behave correctly. What am I missing? I would appreciate any help. Thank you.*/

 require_once('../scripts/lcoa.php'); ?>
        <?php 
        if (isset($_GET['jobid'])) {
        $jobid = $_GET['jobid'];
        }
        if (isset($_GET['jobtitle'])) {
        $jobtitle = $_GET['jobtitle'];
        }
         //This is the directory where resumes will be saved 
        $timestamp = time();
        $folder = "../careers/resumes/"; 
        $resume = ($_FILES['resume']['name']);
        $target = $folder.basename($timestamp.$_FILES['resume']['name']); 
        $type = ($_FILES['resume']['type']);
        $extension = strtolower(substr($resume, strpos($resume, '.') + 1)); 
        $size = ($_FILES['resume']['size']);
        $max_size = 3145728;


        $name  = ($_POST['name']);
        $email  = ($_POST['email']);
        $phone  = ($_POST['phone']);
        $jobid = ($_POST['jobid']);
        $jobtitle = ($_POST['jobtitle']);
        $cover = ($_POST['coverletter']);
        $error=array();


            if(isset($name)){
                if (empty ($name)){
             $error['name']="<p class='error'>Required </p>";

                }
            }
            if(isset($email)){
                if (empty ($email)){
             $error['email']="<p class='error'>Required </p>";
                }
            }
            if(isset($phone)){
                    if (empty ($phone)){
                 $error['phone']="<p class='error'>Required </p>";
                    }
                }
            if(isset($cover)){
                    if (empty ($cover)){
                 $error['coverletter']="<p class='error'>Required </p>";
                    }
                }
        //Writes the resume to the server 
        if (isset ($resume)) {

            if (empty ($resume)){
                 $error['resume']="<p class='error'>Resume Required </p>";
                }

            if (!empty ($resume)){
                if(($extension=='doc'||$extension=='docx'||$extension=='txt'||$extension=='pdf')&&($type=='application/pdf'||'application/msword'||'application/vnd.openxmlformats-officedocument.wordprocessingml.document'||'text/plain')&&$size<=$max_size) {
                if(move_uploaded_file($_FILES['resume']['tmp_name'], $target)) {
                     //Writes the information to the database 
                $insertSQL = "INSERT INTO applicants (id, name, email, phone, jobid, jobtitle, coverletter, resume) VALUES ('','".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['jobid']."','".$_POST['jobtitle']."','".$_POST['coverletter']."','".$resume."')";
                mysql_select_db($database_lcoa, $lcoa);
                $Result1 = mysql_query($insertSQL, $lcoa) or die(mysql_error());
                //Sends Email
                    $sendto   = "emailaddress";
                    $name  = nl2br($_POST['name']);
                    $email  = nl2br($_POST['email']);
                    $phone  = nl2br($_POST['phone']);
                    $jobid = nl2br($_POST['jobid']);
                    $jobtitle = nl2br($_POST['jobtitle']);
                    $cover = nl2br($_POST['coverletter']);
                    $subject  = "Submitted Job Application";
                    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
                    $headers  = "From: " . strip_tags($email) . "\r\n";
                    $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
                    $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
                    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Job Application Submitted</h2>\r\n";
                    $msg .= "<p><strong>Applied for:</strong> ".$jobtitle."</p>\r\n";
                    $msg .= "<p><strong>Job ID:</strong> ".$jobid."</p>\r\n";
                    $msg .= "<p><strong>Applicant Name:</strong> ".$name."</p>\r\n";
                    $msg .= "<p><strong>Email:</strong> ".$email."</p>\r\n";
                    $msg .= "<p><strong>Phone:</strong> ".$phone."</p>\r\n";
                    $msg .= "<p><strong>Cover Letter:</strong> ".$cover."</p>\r\n";
                    $msg .= "<a href='http://domain.com/".$target."'>Download Resume</a>\r\n";
                    $msg .= "</body></html>";
                    if(@mail($sendto, $subject, $msg, $headers)) {
                        echo "";
                    } else {
                        echo "false";
                    }
                     //Tells you if its all ok 
                     echo "<div id='confirm-app'><p>Thank you for submitting your application.  Resumes submitted will be reviewed to determine qualifications that match our hiring needs.<br /><br />  If you are selected you will be contacted by a member of our recruiting team.</p><br /><br /><a href='../careers/job-postings.php'>Return to current opportunities</a></div>"; 
                     }
                }       
                     else { 
                     //Gives and error if its not 
                     echo "<p style='color: #6D6E71; font-family: Arial,Helvetica,sans-serif; font-size: 13px;'>We accept resumes in <strong>.doc</strong>, <strong>.docx</strong>, <strong>.pdf</strong>, or <strong>.txt</strong> formats, 3MB or less. Please <a href='javascript:history.back(-1);'>go back</a> to upload a file that meets these requirements.<br /><br />If you continue to experience errors, please report them.</p>"; 
                     die();
                     } 
                }
        }      




         
         ?>