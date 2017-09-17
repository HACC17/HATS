

@extends('layouts.default'
)
@section('content')
<html>
    <style>
        html{
        height: 50%; 
        }
        body { 
        background-image: url('/imgs/contact_imgs/land1.jpg');
        height: 50%; 
        background-position: center;
        background-attachment: fixed;
        background-size: cover; 
        }
        .textcontainer {
        width: 70%;
 text-align: center;
        background-color: rgba(248,248,248,0.8);
        margin-right: auto;
        margin-left: auto;
        margin-top: 0.3in;
        margin-bottom: 1in;
        padding: 20px;
        }
        .formatcon{
        height: 10%;
        }        
        .boxedLeft {
  text-align: left;
  vertical-align: top;
  display: inline-block;
  width: 600px;
  padding: 20px;
  margin: 10px;
  border-right: 6px dotted rgba(248,248,248,0.8);;
  /*background-color: #f8f8f8 ;*/

} 
      .boxedRight {
  text-align: left;
  vertical-align: top;
  display: inline-block;
  width: 400px;
  padding: 20px;
  margin: 10px;
  

}
    </style>
    <body>
<div class="textcontainer">
        <div class="in-boxed">
           <div class="boxedLeft">
            <!-- FORM -->
          <h1 style="border-bottom: thick solid black">Contact Us</h1>
            <p><br>You can also fill out the form below. Processed requests will be answered with 5 business days.</p>
            <p>Fields thare required have an asterisk(*) next to them. Please include your name, phone number, email, your organization, and the nature of your request.</p>
            
            <form action="form.blade.php" method="post">
                *Full Name: <br>
                <input type="text" name="full_name" size="50"><br>
                <br>*E-mail: 
                <br><input type="text" name="email" size="50"><br>
                <br>*Phone: 
                <br><input type="text" name="phone" size="50"><br>
                <br>Reason for your request:<br>
                Check all items that apply.</br>
                <input type="checkbox" name="reason" value="dockets">Dockets</br>
                <input type="checkbox" name="reason" value="maps">Maps</br>
                <input type="checkbox" name="reason" value="procedures">Procedures</br>
                <input type="checkbox" name="reason" value="services">Services</br>
                <input type="checkbox" name="reason" value="generala">General Assistance</br>
                <input type="checkbox" name="reason" value="other" >Other - Add comment below</br>
                <br>Add your comment:<br>
                <textarea rows="5" cols="50" name="comment" id="cmntbox"></textarea><br>
                <br>How would you like to be contacted?<br>
                <input type="checkbox" name="reason" value="phone">phone</br>
                <input type="checkbox" name="reason" value="email">email</br>
                <input type="checkbox" name="reason" value="emailandphone">Phone and Email</br>
                <input type="submit">
            </form>
</div>
            <!---------CONTACT INFORMATION--------->
            <div class="boxedRight">
            <h2>Contact Information</h2>
            <p>You can reach us at:<br>
                Telephone: (808) 587-3822<br>
                Fax: (808) 587-3827<br>
            </p>
            <p class="center" style="border-bottom: thick dotted rgba(248,248,248)">
                <br>State of Hawai`i Land Use Commission<br>
                Department of Business, Economic Development & Tourism<br>
                P.O. Box 2359<br>
                Honolulu, Hawai`i 96804-2359<br>
            </p>
              <!--------- LOCATION INFO--------->
                <div class="locationBox">
                    <h3>Our location</h3>
                    <p>State Office Tower<br>
                        Leiopapa A Kamehameha Building<br>
                        235 South Beretania Street, Room 406<br>
                        Honolulu, Hawai`i 96813<br>
                    </p>
                </div>
                <!--------- MAP --------->
                <div class="locationBox">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3717.0409905089614!2d-157.86026068506263!3d21.309396585847058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c006e759d0c0d79%3A0xabf9211f0f0d24e!2s235+S+Beretania+St%2C+Honolulu%2C+HI+96813!5e0!3m2!1sen!2sus!4v1505392296274" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        </div>
</div>
    </body>
</html>
@stop


