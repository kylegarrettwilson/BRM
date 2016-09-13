<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/contact-form-attachment.html
*/
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('bootstraproadmapsales@gmail.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('HG9hPBpn9Bn26yg');


/*
$formproc->AddFileUploadField('photo','jpg,jpeg,gif,png,bmp',2024);
$formproc->AddFileUploadField('newupload','',2024);//<<------- New file upload

*/



$formproc->AddFileUploadField('photo','jpg,jpeg,gif,png,bmp',2024);
$formproc->AddFileUploadField('newupload','jpg,jpeg,gif,png,bmp',2024);//<<------- New file upload
$formproc->AddFileUploadField('resume','doc,docx,pdf,txt',2024);






if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">







<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Contact us</title>
      <link rel="STYLESHEET" type="text/css" href="contact.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>
</head>








<body>






    <!-- Form Code Start -->
    <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>
        
        
        
        
        
    
        <fieldset >
            
            

            
                
                <input type='hidden' name='submitted' id='submitted' value='1'/>
                <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
                <input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
                    
                    
                
                    <div class='short_explanation'>* required fields</div>
                    
                        
                    <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                        



            
            
            


                    <!-- Beginning -->


                    <h3>Tell us a little more about you!</h3>


                    <br>




            
                    <div class='container'>
                        <label for='name' >Your Full Name*: </label><br/>
                        <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
                        <span id='contactus_name_errorloc' class='error'></span>
                    </div>







                        
                    <div class='container'>
                        <label for='email' >Email Address*:</label><br/>
                        <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>







                    <div class='container'>
                        <label for='email' >Phone Number*:</label><br/>
                        <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>







                    <div class='container'>
                        <label for='email' >Business Name*:</label><br/>
                        <input type='text' name='title' id='title' value='<?php echo $formproc->SafeDisplay('title') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>






                    <div class='container'>
                        <label for='email' >Business Address*:</label><br/>
                        <input type='text' name='title' id='title' value='<?php echo $formproc->SafeDisplay('title') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>







                    <div class='container'>
                        <label for='email' >Main contact for the project (name and title)*:</label><br/>
                        <input type='text' name='title' id='title' value='<?php echo $formproc->SafeDisplay('title') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>





                    <div class='container'>
                        <label for='email' >Final decision maker for the project*:</label><br/>
                        <input type='text' name='title' id='title' value='<?php echo $formproc->SafeDisplay('title') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>






                    <br>
                    <br>


                    <p>
                        If you do not have a domain, please go buy one at a respected website such as GoDaddy.com
                    </p>


                    <div class='container'>
                        <label for='email' >Current website address (if applicable):</label><br/>
                        <input type='text' name='title' id='title' value='<?php echo $formproc->SafeDisplay('title') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>







                    <div class='container'>
                        <label for='email' >Current domain name (if applicable):</label><br/>
                        <input type='text' name='title' id='title' value='<?php echo $formproc->SafeDisplay('title') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>





                    <div class='container'>
                        <label for='email' >Slogan (if applicable):</label><br/>
                        <input type='text' name='title' id='title' value='<?php echo $formproc->SafeDisplay('title') ?>' /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>






                    <br>
                    <br>

                    <h3>Your Objective(s) and Goals</h3>


                    <br>



                    <div class='container'>
                        <label for='message' >Is there a specific message you wish to convey to your audience?</label><br/>
                        <span id='contactus_message_errorloc' class='error'></span>
                        <textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
                    </div>



                    <div class='container'>
                        <label for='message' >How will you measure the success of the website? (eg: increase in sales, increase in contact...)?</label><br/>
                        <span id='contactus_message_errorloc' class='error'></span>
                        <textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
                    </div>


                    <div class='container'>
                        <label for='message' >How does your company differentiate itself from competitors?</label><br/>
                        <span id='contactus_message_errorloc' class='error'></span>
                        <textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
                    </div>

                    <div class='container'>
                        <label for='message' >What are the key reasons why customers choose your company?</label><br/>
                        <span id='contactus_message_errorloc' class='error'></span>
                        <textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
                    </div>








                    <br>
                    <br>

                    <h3>Target Audience</h3>


                    <br>



                    <div class='container'>
                        <label for='message' >Who is the target audience for the new website (eg: wholesale vendors, business to customer, business to business)?</label><br/>
                        <span id='contactus_message_errorloc' class='error'></span>
                        <textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
                    </div>




                    <div class='container'>
                        <label for='message' >How aware is your target audience of your company and current website (if applicable)?</label><br/>
                        <span id='contactus_message_errorloc' class='error'></span>
                        <textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
                    </div>






                    <br>
                    <br>

                    <h3>Design Choices</h3>


                    <br>



            













































                    <div class='container'>
                        <label for='message' >Message:</label><br/>
                        <span id='contactus_message_errorloc' class='error'></span>
                        <textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
                    </div>




                    <div class='container'>
                        <label for='message' >Message:</label><br/>
                        <span id='contactus_message_errorloc' class='error'></span>
                        <textarea rows="10" cols="50" name='message2' id='message2'><?php echo $formproc->SafeDisplay('message2') ?></textarea>
                    </div>















                    <!-- uploads -->


                    <div class='container'>
                        <label for='photo' >Upload your photo:</label><br/>
                        <input type="file" name='photo' id='photo' /><br/>
                        <span id='contactus_photo_errorloc' class='error'></span>
                    </div>

                    <div class='container'>
                        <label for='photo' >Upload another photo:</label><br/>
                        <input type="file" name='newupload' id='newupload' /><br/>
                        <span id='contactus_newupload_errorloc' class='error'></span>
                    </div>

                    <div class='container'>
                        <label for='photo' >Another a text document:</label><br/>
                        <input type="file" name='resume' id='resume' /><br/>
                        <span id='contactus_newupload_errorloc' class='error'></span>
                    </div>
                    
                        













                    <!-- submit button -->


                    
                    <div class='container'>
                        <input type='submit' name='Submit' value='Submit' />
                    </div>
            
            
            
        </fieldset>
        
        
        
    </form>



<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

































<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

    frmvalidator.addValidation("photo","file_extn=jpg;jpeg;gif;png;bmp","Upload images only. Supported file types are: jpg,gif,png,bmp");
// ]]>
</script>
</body>
</html>




































