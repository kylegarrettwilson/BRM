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
          <title>Roadmap</title>
          <link rel="STYLESHEET" type="text/css" href="contact.css" />
          <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
          <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>




        <script>




            $( function() {




                $( "#accordion" ).accordion({
                    heightStyle: "content"

                });





            } );





        </script>

</head>








<body>






    <!-- Form Code Start -->
    <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>
        
        
        
        
        
    
        <fieldset >


                <h3 style="margin-top: 0;">Tell us a little more about you!</h3>
            
                
                <input type='hidden' name='submitted' id='submitted' value='1'/>
                <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
                <input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
                    
                    
                
                    <div class='short_explanation'>* required fields</div>
                    
                        
                    <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                        



            
            
            


                    <!-- Beginning -->










            
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
                        <input type='text' name='phonenumber' id='phonenumber' value='<?php echo $formproc->SafeDisplay('phonenumber') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>







                    <div class='container'>
                        <label for='email' >Business Name*:</label><br/>
                        <input type='text' name='businessname' id='businessname' value='<?php echo $formproc->SafeDisplay('businessname') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>






                    <div class='container'>
                        <label for='email' >Business Address*:</label><br/>
                        <input type='text' name='businessaddress' id='businessaddress' value='<?php echo $formproc->SafeDisplay('businessaddress') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>







                    <div class='container'>
                        <label for='email' >Main contact for the project (name and title)*:</label><br/>
                        <input type='text' name='maincontact' id='maincontact' value='<?php echo $formproc->SafeDisplay('maincontact') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>





                    <div class='container'>
                        <label for='email' >Final decision maker for the project*:</label><br/>
                        <input type='text' name='decisionmaker' id='decisionmaker' value='<?php echo $formproc->SafeDisplay('decisionmaker') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>






                    <br>
                    <br>


                    <p>
                        If you do not have a domain, please go buy one at a respected website such as GoDaddy.com
                    </p>


                    <div class='container'>
                        <label for='email' >Current website address (if applicable):</label><br/>
                        <input type='text' name='websiteaddress' id='websiteaddress' value='<?php echo $formproc->SafeDisplay('websiteaddress') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>







                    <div class='container'>
                        <label for='email' >Current domain name (if applicable):</label><br/>
                        <input type='text' name='currentdomain' id='currentdomain' value='<?php echo $formproc->SafeDisplay('currentdomain') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>



                    <div class='container'>
                        <label for='email' >What is the company that hosts your domain name? (ie: who did you buy it from? if applicable):</label><br/>
                        <input type='text' name='domaincompany' id='domaincompany' value='<?php echo $formproc->SafeDisplay('domaincompany') ?>' maxlength="50" /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>





                    <div class='container'>
                        <label for='email' >Slogan (if applicable):</label><br/>
                        <input type='text' name='slogan' id='slogan' value='<?php echo $formproc->SafeDisplay('slogan') ?>' /><br/>
                        <span id='contactus_email_errorloc' class='error'></span>
                    </div>












            <div id="accordion">


                    <h3>Your Objective(s) and Goals</h3>





                    <div>

                        <div class='container'>
                            <label for='message' >Is there a specific message you wish to convey to your audience?</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='one' id='one'><?php echo $formproc->SafeDisplay('one') ?></textarea>
                        </div>



                        <div class='container'>
                            <label for='message' >How will you measure the success of the website? (eg: increase in sales, increase in contact...)?</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='two' id='two'><?php echo $formproc->SafeDisplay('two') ?></textarea>
                        </div>


                        <div class='container'>
                            <label for='message' >How does your company differentiate itself from competitors?</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='three' id='three'><?php echo $formproc->SafeDisplay('three') ?></textarea>
                        </div>

                        <div class='container'>
                            <label for='message' >What are the key reasons why customers choose your company?</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='four' id='four'><?php echo $formproc->SafeDisplay('four') ?></textarea>
                        </div>

                    </div>

















                    <h3>Target Audience</h3>





                    <div>

                        <div class='container'>
                            <label for='message' >Who is the target audience for the new website (eg: wholesale vendors, business to customer, business to business)?</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='five' id='five'><?php echo $formproc->SafeDisplay('five') ?></textarea>
                        </div>




                        <div class='container'>
                            <label for='message' >How aware is your target audience of your company and current website (if applicable)?</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='six' id='six'><?php echo $formproc->SafeDisplay('six') ?></textarea>
                        </div>

                    </div>
























                    <h3>Design Choices</h3>






                    <div>
                        <div class='container'>
                            <label for='message' >Use three adjectives to describe how the user should perceive the finished projects. (eg: progressive, friendly, formal, casual, energetic, professional, playful...)</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='seven' id='seven'><?php echo $formproc->SafeDisplay('seven') ?></textarea>
                        </div>



                        <div class='container'>
                            <label for='message' >Are there any visual elements or styles that can be utilized from existing marketing materials?</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='eight' id='eight'><?php echo $formproc->SafeDisplay('eight') ?></textarea>
                        </div>


                        <div class='container'>
                            <label for='message' >Do you have a preferred color scheme (if possible please provide rgb or hex color codes)? </label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='nine' id='nine'><?php echo $formproc->SafeDisplay('nine') ?></textarea>
                        </div>


                        <div class='container'>
                            <label for='message' >Do you have a preferred color scheme or colors you definitely want to avoid? </label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='ten' id='ten'><?php echo $formproc->SafeDisplay('ten') ?></textarea>
                        </div>


                        <div class='container'>
                            <label for='message' >Is there a current corporate style guide and logo that will be used? If not, are you considering the creation of a corporate style guide, identity or logo? </label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='eleven' id='eleven'><?php echo $formproc->SafeDisplay('eleven') ?></textarea>
                        </div>


                        <div class='container'>
                            <label for='message' >List and example websites that have a design style and colors that you feel would work well on your website (copy and paste URL if possible):</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='twelve' id='twelve'><?php echo $formproc->SafeDisplay('twelve') ?></textarea>
                        </div>



                        <div class='container'>
                            <label for='message' >List and example websites that have a design style and colors that you feel would work well on your website (copy and paste URL if possible):</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='thirteen' id='thirteen'><?php echo $formproc->SafeDisplay('thirteen') ?></textarea>
                        </div>

                    </div>
















                    <h3>Primary Action</h3>





                    <div>

                        <div class='container'>
                            <label for='message' >What is the primary action you wish a visitor to take from your new site (eg: download, call via phone, email, find address, explore gallery)?</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='fourteen' id='fourteen'><?php echo $formproc->SafeDisplay('fourteen') ?></textarea>
                        </div>


                    </div>






















                    <h3>Content</h3>







                    <div>
                        <div class='container'>
                            <label for='message' >Will you be able to manage content on the finished site? If yes, we strongly suggest taking the website files and
                            hosting at your own convience. If no, we strongly suggest letting us host your site on our private, secure servers.</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='fifteen' id='fifteen'><?php echo $formproc->SafeDisplay('fifteen') ?></textarea>
                        </div>




                        <div class='container'>
                            <label for='message' >Will this site use existing content (eg: art, photos, logo...) If yes, once this form is submitted, you will receive a link via email that will
                            prompt you to upload all necessary files. If pictures are not large enough, we will do our best to edit them to work properly.</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='sixteen' id='sixteen'><?php echo $formproc->SafeDisplay('sixteen') ?></textarea>
                        </div>


                        <div class='container'>
                            <label for='message' >Are you comfortable with using stock photos? All stock photos that are used on your site will be licensed at no extra charge.</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='seventeen' id='seventeen'><?php echo $formproc->SafeDisplay('seventeen') ?></textarea>
                        </div>

                    </div>






















                    <h3>Website Elements</h3>






                    <div>

                        <div class='container'>
                            <label for='message' >About Us</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='eighteen' id='eighteen'><?php echo $formproc->SafeDisplay('eighteen') ?></textarea>
                        </div>


                        <div class='container'>
                            <label for='message' >Provide each service and a short description of that service (eg: Business Photos: short description, Dinner: short description, Routine Teeth Care: short description)</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='nineteen' id='nineteen'><?php echo $formproc->SafeDisplay('nineteen') ?></textarea>
                        </div>



                        <div class='container'>
                            <label for='message' >Team Members (Full Name, Position, and a short description). If you would like social media links for each team member please include the URLs for each. If you have
                            a picture of each member, please upload them at the link provided with the corresponding file name.</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='twenty' id='twenty'><?php echo $formproc->SafeDisplay('twenty') ?></textarea>
                        </div>



                        <div class='container'>
                            <label for='message' >Portfolio or previous work (Full name of work, short description, whatever else you want). This is also a great place for
                                previous education or certificates that apply towards your business. If you have a picture of each work, please upload them at the link provided with the corresponding file name.</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='twentyone' id='twentyone'><?php echo $formproc->SafeDisplay('twentyone') ?></textarea>
                        </div>




                        <div class='container'>
                            <label for='name' >Hours of operation (eg: M-F 8 to 5):</label><br/>
                            <input type='text' name='twentytwo' id='twentytwo' value='<?php echo $formproc->SafeDisplay('twentytwo') ?>' maxlength="50" /><br/>
                            <span id='contactus_name_errorloc' class='error'></span>
                        </div>

                        <div class='container'>
                            <label for='name' >Business email address:</label><br/>
                            <input type='text' name='twentythree' id='twentythree' value='<?php echo $formproc->SafeDisplay('twentythree') ?>' maxlength="50" /><br/>
                            <span id='contactus_name_errorloc' class='error'></span>
                        </div>


                        <div class='container'>
                            <label for='name' >Business phone number:</label><br/>
                            <input type='text' name='twentyfour' id='twentyfour' value='<?php echo $formproc->SafeDisplay('twentyfour') ?>' maxlength="50" /><br/>
                            <span id='contactus_name_errorloc' class='error'></span>
                        </div>


                        <div class='container'>
                            <label for='name' >Do you want a photo gallery (we strongly suggest having a photo gallery for visual context, even if it is stock photos)? If you are going to provide photos for
                                the gallery, please use the DropBox link below to upload.</label><br/>
                            <input type='text' name='twentyfive' id='twentyfive' value='<?php echo $formproc->SafeDisplay('twentyfive') ?>' maxlength="50" /><br/>
                            <span id='contactus_name_errorloc' class='error'></span>
                        </div>



                        <div class='container'>
                            <label for='message' >Social media accounts (please provide the name of the account and the URL link):</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='twentysix' id='twentysix'><?php echo $formproc->SafeDisplay('twentysix') ?></textarea>
                        </div>


                        <div class='container'>
                            <label for='message' >What is the focuses of your business (eg: organic, family care, business portraits)</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='twentyseven' id='twentyseven'><?php echo $formproc->SafeDisplay('twentyseven') ?></textarea>
                        </div>

                        <div class='container'>
                            <label for='message' >Do you have customer reviews that you want to add? Please provide the names and quotes below.</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='twentyeight' id='twentyeight'><?php echo $formproc->SafeDisplay('twentyeight') ?></textarea>
                        </div>


                        <div class='container'>
                            <label for='name' >Do you want a contact form that sends to the business email?</label><br/>
                            <input type='text' name='twentynine' id='twentynine' value='<?php echo $formproc->SafeDisplay('twentynine') ?>' maxlength="50" /><br/>
                            <span id='contactus_name_errorloc' class='error'></span>
                        </div>

                        <div class='container'>
                            <label for='message' >If you had to boast about your company what would be some points you would say?</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='thirty' id='thirty'><?php echo $formproc->SafeDisplay('thirty') ?></textarea>
                        </div>

                    </div>



















                    <h3>Closing Thoughts and Requests</h3>






                    <div>

                        <div class='container'>
                            <label for='message' >Design details you would like to add (eg: colors, pictures, layout, etc):</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='thirtyone' id='thirtyone'><?php echo $formproc->SafeDisplay('thirtyone') ?></textarea>
                        </div>


                        <div class='container'>
                            <label for='message' >Content you would like to add (eg: text, headers, titles):</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='thirtytwo' id='thirtytwo'><?php echo $formproc->SafeDisplay('thirtytwo') ?></textarea>
                        </div>


                        <div class='container'>
                            <label for='message' >Any comments you would like to add:</label><br/>
                            <span id='contactus_message_errorloc' class='error'></span>
                            <textarea rows="10" cols="50" name='thirtytwo' id='thirtyone'><?php echo $formproc->SafeDisplay('thirtytwo') ?></textarea>
                        </div>

                    </div>

            </div>


























                    <!-- uploads -->







                    <h3>File Uploads</h3>

                    <h4>File U</h4>


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


                    <h2><a href="https://www.dropbox.com/request/3wZhNyn8tdAy9s5VS00r" target="_blank">DropBox Uploads</a></h2>










                    <!-- submit button -->


                    
                    <div class='container button'>
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




































