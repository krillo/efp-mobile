<?php
  get_header();
  !empty($_REQUEST['zip']) ? $zip = $_REQUEST['zip'] : $zip = '';
?>
<style type="text/css">

#footer-menu-bottom-3-links{
  border-top: 1px solid black;
  width:100%;
  background-color: #fff;
}
#container{
  padding-bottom: 0px;
}
#zip1, #ss{
  width: 235px;
  text-align: center;
}
#pers-container input[name="zip"] , INPUT[type="tel"], INPUT[type="email"], INPUT[type="text"]{
  text-align:left;
  display:block;
  margin:8px auto !important;
  border:1px solid #aaaaaa;
  height:30px;
  width:95%;
  padding:4px;
}
.slider-button.on {
  background: #f79034;
}
 .order INPUT.fortsatt-submit{
    background-color: #fff;
    margin-left: 4px; 
}
#pers-container INPUT[type="text"]{
  width: 95%;
  text-align: left;
}
#zipAndPersonalSubmit{
    width: 200px;
    height: 36px;
    box-shadow: none;
    background-color: #fff;
    border: none;
    text-align: center;
    color: #FFF;
    font-size: 20px;
    font-weight: 300;
  }
  .fieldset-with-radio-buttons {
    width: 94%;
  }
  .link-buttons {
    width: 94%;
  }
  #zip-and-personal{
    margin-bottom: 40px;
  }
  #zip-ok, #zip-nok{
    margin: 0px;
  }
</style>
<script type='text/javascript' src='http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js?ver=3.8.1'></script>
<div id="main" class="standard order">
  <section>
    <div class="column grid_8">
      <form action="<?php bloginfo('url');?>/abonnemang/mottagen-bestallning" id="orderForm" name="orderForm" method="post" >
        <div class="head-buttons">
          <input type="hidden" value="<?php echo $zip ?>" id="request-zip"/>
          <input type="hidden" value="op5" name="option"/>
          <!--<input name="zip1" id="zip1" type="tel" placeholder="Skriv ditt postnummer här" pattern="\d*" />-->
          <input name="ss" id="ss" type="tel" placeholder="ÅÅÅÅMMDD-XXXX" pattern="\d*" /><br/>
          <div id="ss-error" class="hidden invalid">Personnumret verkar vara felaktigt.</div>
          <div id="zip-ok" class="hidden">Ja, vi putsar i <span></span>!</div>  
          <div id="zip-nok" class="hidden">Vi verkar inte putsa i detta postnummerområde. Kontakta oss om du har frågor.</div>		      
      <span>Jag vill ha Rut avdrag</span>
      <br/><br/>
      <div class="slider-frame">
  			<span class="slider-button on">JA</span>
  			<script type="text/javascript">
  				$('.slider-button').toggle(function(){
  					$(this).removeClass('on').html('NEJ');
  				},function(){
  					$(this).addClass('on').html('JA');
  				});
  			</script>
		  </div>
		  <br/>
      <div class="zip-and-personal">
        <!--<input type="button" value="Validate Zip and Personal number" id="zipAndPersonalSubmit" name="zipAndPersonalSubmit" />-->
			  <button id="zipAndPersonalSubmit" name="zipAndPersonalSubmit" class="fortsatt-submit">FORTSÄTT</button>
        <br/><br/>
      </div>
		  <a class='start-btn-orange' href="<?php bloginfo('url');?>" style="position: initial;margin: 0px;">Start</a>
      <script type="text/javascript">
        $( window ).ready(function() {
          var wh = $( window ).height();
          var ch = $( '#container' ).height();
          var sth = $( '.start-btn-orange' ).height();
          var startMargin = wh - ch - sth - 110 + 'px';
          //alert(startMargin);
          $('.start-btn-orange').css('margin-top',startMargin);
        });
      </script>
      </div>
	    <div id="pers-container" class="hidden">
          <ul>
            <fieldset class="fieldset-address">
                <li><input name="email" id="email" value="" type="email" placeholder="E-post"/></li>
                <li><input name="firstname_show" id="firstname_show" value="" type="text" disabled/></li>
                <li><input name="firstname" id="firstname" value="" type="hidden" /></li>

                <li><input name="lastname_show" id="lastname_show" value="" type="text" disabled/></li>
                <li><input name="lastname" id="lastname" value="" type="hidden" /></li>
              
                <li><input name="street1_show" id="street1_show" value="" type="text" disabled/></li>
                <li><input name="street1" id="street1" value="" type="hidden" /></li>
              
                <li><input name="zip_show" id="zip_show" value="" type="text" disabled/></li>
                <li><input name="zip" id="zip" value="" type="hidden" /></li>
              
                <li><input name="city_show" id="city_show" value="" type="text" disabled/></li>
                <li><input name="city" id="city" value="" type="hidden" /></li>

                <li><input name="phone" id="phone" value="" type="tel" class="tel" placeholder="Telefon" pattern="\d*" /></li>
                
                <li><input name="mobile" id="mobile" value="" type="tel" class="tel" placeholder="Mobil" pattern="\d*" /></li>    

                
                <br />
            </fieldset>
          </ul>
          
          <fieldset class="fieldset-with-radio-buttons">
            <table width="95%">
              <tr>
                <td>
                  <input name="rut" id="rutYes" value="JA" type="radio" checked/>
                  <label for="rutYes">Ja, jag vill ha skattereduktion och känner till hur det fungerar.</label>
                </td>
              </tr>
              <tr>
                <td>
                  <input name="rut" id="rutNo" value="NEJ" type="radio" />
                  <label for="rutNo">Nej, jag vill <b>inte</b> ha skattereduktion.</label>
                </td>
              </tr>
            </table>
          </fieldset>     
          
          <!--
          <fieldset>
            <li>
              <label class="comments" for="comments">Ytterligare information:</label>
              <textarea name="comments" id="comments" placeholder="Plats för mer information till kundtjänst. Tillval gör du enklast i efterföljande formulär."></textarea>
            </li>
          </fieldset>
          -->
          <fieldset class="link-buttons">        
            <table width="95%">
              <tr>
                <td>
                  <input name="terms" id="terms" type="checkbox" style="float:left;" value ="Ja"/>
                  <label for="terms"><b>Ja tack!</b></label> Jag vill abonnera på utvändig fönsterputsning av bottenvåning 6-7 gånger per år. Jag betalar inget i förskott, inget kontant. Jag får faktura efter utförd putsning. Jag har läst och godkänner villkor, prislista och övrig information.
                </td>
              </tr>
            </table>
          </fieldset>
          <input type="submit" value="BESTÄLL" class="fortsatt-submit">
          <br/><br/><br/><br/>
          <nav id="footer-menu-bottom-3-links" role="price-terms-rut-navigation">
              <a href="#" onClick="window.open('<?php bloginfo('url') ?>/abonnemang/prislista-2014/','',width=1000); ">Pris</a>
              <a href="#" onClick="MyWindow=window.open('<?php bloginfo('url') ?>/abonnemang/villkor/','MyWindow',width=600,height=300);return MyWindow;">Villkor</a>
              <a href="#" onClick="MyWindow=window.open('<?php bloginfo('url') ?>/fragor-svar/rut-avdrag/','MyWindow',width=600,height=300);return MyWindow;">RUT</a>
          </nav>
      </form>
      <script type="text/javascript">
		jQuery(document).ready(function($){   
          $("#ss-progress").hide();
          $("#extra-address").hide();
    
          var request_zip = $('#request-zip').val();
            if(request_zip != ''){
              $('#zip1').val(request_zip);
              checkValidZip(request_zip);
            }
    
          function checkValidZip(zip){
              var data = {
                action : 'check_zip',
                zip: zip
              };
              $.post('<?php bloginfo('url')?>/wp-admin/admin-ajax.php', data, function(response) {
                if(response.success == 1){
                  $("#zip-ok").removeClass("hidden");
                  $("#zip-ok span").html(response.city);
                  $("#ss-container").removeClass("hidden");
                  $("#zip-nok").addClass("hidden");
                }else{
                  $("#zip-nok").removeClass("hidden");
                  $("#zip-ok").addClass("hidden");
                  $("#ss-container").addClass("hidden");
                }        
              });
            }
          //extend validator - add require_from_group  http://stackoverflow.com/a/9202684
          jQuery.validator.addMethod("require_from_group", function(value, element, options){
            var numberRequired = options[0],
            selector = options[1],
            $fields = $(selector, element.form),
            validOrNot = $fields.filter(function() {
              return $(this).val();
            }).length >= numberRequired,
            validator = this;
            if(!$(element).data('being_validated')) {
              $fields.data('being_validated', true).each(function(){
                validator.valid(this);
              }).data('being_validated', false);
            }
            return validOrNot;
          }, $.format("Please fill out at least {0} of these fields."));
          
    
          // validate signup form on keyup and submit
          var validator = $("#orderForm").validate({
            errorClass: "invalid",
            validClass: "valid", 
            rules: {
              firstname: "required",
              lastname: "required",
              street1:{
                required: true,
                minlength: 3
              },
              zip:{
                required: true,
                minlength: 5
              },
              city: "required",
              ss:{
                required: true,
                minlength: 12,
                maxlength: 13
              },
              /*extra address*/              
              ex_firstname: "required",
              ex_lastname: "required",
              ex_street1:{
                required: true,
                minlength: 3
              },
              ex_zip:{
                required: true,
                minlength: 5
              },
              ex_city: "required",
              phone: {require_from_group: [1,".tel"]},
              mobile: {require_from_group: [1,".tel"]},              
              rut: "required",
              terms: "required"
            },
            messages:{
              firstname: "",
              lastname: "",
              street1:{
                required: "",
                minlength: ""
              },
              zip:{
                required: "",
                minlength: ""
              },
              city: "",
              ss:{
                required: "Ange personnummer!",
                minlength: "Ange ett korrekt personnummer i formatet ÅÅÅÅMMDD-XXXX!",
                maxlength: "Ange ett korrekt personnummer i formatet ÅÅÅÅMMDD-XXXX!"
              },
              /*extra address*/
              ex_firstname: "",
              ex_lastname: "",
              ex_street1:{
                required: "",
                minlength: ""
              },
              ex_zip:{
                required: "",
                minlength: ""
              },
              ex_city: "",
              phone: "Ange minst ett telefonnummer",
              mobile: "Ange minst ett telefonnummer",
              rut: "Välj om du vill ha skattereduktion eller inte!",
              terms: "Tacka ja för att genomföra beställningen!"
            },
            success: function(label) {
              // set &nbsp; as text for IE
              label.html("&nbsp;").addClass("checked");
            }
          });
        
          /**
           * Ajax call to check for valid zip and personal number
           */
          function checkZip(){
			    $("#zip-button-submit").hide();
                $("#zip-button-button").show();            
            var data = {
              action : 'check_zip',
              zip: $("#zip1").val()
            };
            $.post('<?php bloginfo('url')?>/wp-admin/admin-ajax.php', data, function(response) {
              /*if(response.success == 1)
              {
				$("#zip-ok").removeClass("hidden");
                $("#zip-ok span").html(response.city);
                $("#ss-container").removeClass("hidden");
                $("#zip-nok").addClass("hidden");
              }else{
                $("#zip-nok").removeClass("hidden");
                $("#zip-ok").addClass("hidden");
                //$("#ss-container").addClass("hidden");
              }*/
            });
          }       

          /**
           * Ajax call to get peronal info
           */        
          function checkPersInfo(){
            ss = $('#ss').val();
			var data = {
              action : 'get_pers_info',
              ss: ss
            };

            $.post('<?php bloginfo('url')?>/wp-admin/admin-ajax.php', data, function(response) {
              if(response.success == 1)
              {
				$(".head-buttons").addClass("hidden");
				$("#pers-container").removeClass("hidden");
                $("#ss-error").addClass("hidden");
                $("#firstname").val(response.fname);
                //$("#firstname_show").val(response.fname);
                if(response.fname && response.fname.length > 3)
				{
					var shortName = response.fname.substring(0,3);
					for(var i=0;i<response.fname.length-3;i++)
						shortName += '*';
					$("#firstname_show").val(shortName);
				}
				$("#lastname").val(response.lname);
                //$("#lastname_show").val(response.lname);
                if(response.lname && response.lname.length > 3)
				{
					var shortName = response.lname.substring(0,3);
					for(var i=0;i<response.lname.length-3;i++)
						shortName += '*';
					$("#lastname_show").val(shortName);
				}
				$("#street1").val(response.street1);
                //$("#street1_show").val(response.street1);
                if(response.street1 && response.street1.length > 3)
				{
					var shortName = response.street1.substring(0,3);
					for(var i=0;i<response.street1.length-3;i++)
						shortName += '*';
					$("#street1_show").val(shortName);
				}
				$("#street2").val(response.street2);
                $("#zip").val(response.zip);
                //$("#zip_show").val(response.zip);
				if(response.zip && response.zip.length > 3)
				{
					var shortName = response.zip.substring(0,3);
					for(var i=0;i<response.zip.length-3;i++)
						shortName += '*';
					$("#zip_show").val(shortName);
				}
                $("#city").val(response.city);
                $("#city_show").val(response.city);
                $("#phone").val(response.phone);
                $("#email").val(response.email);
              }else{
                $("#ss-error").removeClass("hidden");
                $("#pers-container").addClass("hidden");
              }
            });
          }
    
          $("#zipAndPersonalSubmit").click(function(event) {
            event.preventDefault();
			checkZip();
			checkPersInfo();
          });

          //company show or hide delicery address
          $('#show_extra').click(function(event) {
            if ($(this).is(':checked')) {
              $('#extra-address').show('slow');
            } else {
              $('#extra-address').hide('slow');
            }
          }); 
          
          
          // read email as soon as it is entered and store it in db   
          $("#email").focusout(function() {
            updateUppslag();
          });

          // read phone as soon as it is entered and store it in db   
          $("#phone").focusout(function() {
            updateUppslag();
          });

          // read mobile as soon as it is entered and store it in db   
          $("#mobile").focusout(function() {
            updateUppslag();
          });

          // read email, mobile and phone as soon as it is entered and store it in db   
          function updateUppslag() {
            var email = $('#email').val();
            var mobile = $('#mobile').val();
            var phone = $('#phone').val();
            var data = {
              action: 'updateUppslag',
              email: email,
              mobile: mobile,
              phone: phone,
            };
            $.post('/wp-admin/admin-ajax.php', data, function(response) {
              if (response.success == 1) {
              } else {

              }
            });
          }
          
        });
      </script>
    </div>
  </section>
<a href="http://eriksfonsterputs.se/?am_force_theme_layout=desktop">Till hemsida</a>
</div> <!-- main -->
<?php get_footer(); ?>
