 <form name="register-form" id="register-form" method="post" action="<?php echo site_url(); ?>/popup.php" class="ebookform-tab" onsubmit="return validation();">
                <table width="100%">
                  <tr>
                    <td class="label-col">Name</td>
                    <td class="inpt-col"><input type="text" class="form-field" value="<? echo $fname; ?>" name="fname" id="fname"></td>
                  </tr>
                  <tr>
                    <td class="label-col">Email ID</td>
                    <td class="inpt-col"><input type="text" class="form-field" value="<? echo $email; ?>" name="email" id="email"></td>
                  </tr>
                  <tr>
                    <td class="label-col">Mobile No</td>
                    <td class="inpt-col"><input type="text" class="form-field" value="<? echo $mobileno; ?>" name="mobileno" id="mobileno"></td>
                  </tr>
                   <tr>
                    <td class="label-col">Company Name</td>
                    <td class="inpt-col"><input type="text" class="form-field"  name="company" id="company"></td>
                  </tr>
                 <tr>
<td>&nbsp;</td>
        <td>
          <input style="width: 30px;" id="num1"  type="text" name="num1" size="2" value="<?php echo rand(1,4) ?>" readonly="readonly" /> +
          <input style="width: 30px;" id="num2" type="text" name="num2" size="2" value="<?php echo rand(5,9) ?>" readonly="readonly" /> =
          <input style="width: 30px;" id="captcha" type="text" name="captcha" maxlength="2" size="2" />
       </td>
      </tr>
                  <tr>
                  <tr> <td colspan="2" class="sbmt-cta"><input name="submit" type="submit" formtarget="_blank" class="submit-btn" id="submit" value="Download the free e-book now"></td>
                  </tr>
                </table>
              </form>