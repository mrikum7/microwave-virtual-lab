{include file="_headerAdmin.tpl"}
<script type="text/javascript" src="../lib/ckeditor/ckeditor.js"></script>

<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="update_user_exec.php" method="post" >
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Update User</h2></td>
        </tr>
         <tr>
<td colspan="2" align="center" class="error">{$getMsg}</td>
</tr>
        <tr>
          <td valign="top" width="35%"><strong>User Name :</strong></td>
          <td>
              {$data.user_name}
             </td>
        </tr>
        
        <tr>
          <td valign="top"><strong>First Name :</strong></td>
          <td><input type="hidden" name="id" id="id" value="{$data.user_id}" />
              {$data.user_firstname}
             </td>
        </tr>
         <tr>
          <td valign="top"><strong>Last Name :</strong></td>
          <td>
             {$data.user_lastname}
             </td>
        </tr>
         <tr>
          <td valign="top"><strong>Institution Name :</strong></td>
          <td>
             {$data.user_institution_name}
          </td>
        </tr>
        <tr>
          <td valign="top"><strong>Institution URL :</strong></td>
          <td>
           {$data.user_institution_url}
             </td>
        </tr>
        <tr>
          <td valign="top"><strong>User Type :</strong></td>
          <td>
              {$data.user_type}
             </td>
        </tr>
         <tr>
          <td valign="top"><strong>Qualification :</strong></td>
          <td>
              {$data.user_qualification}
             </td>
         </tr>
         <tr>
          <td valign="top"><strong>Email :</strong></td>
          <td>
              {$data.user_email}
             </td>
        </tr>
        <tr>
          <td valign="top"><strong>Institution Roll No. :</strong></td>
          <td>
             $data.user_institution_rollno}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Disipline :</strong></td>
          <td>
              {$data.user_disipline}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Address1 :</strong></td>
          <td>
              {$data.user_address1}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Address2 :</strong></td>
          <td>
              {$data.user_address2}
             </td>
        </tr> 
         <tr>
          <td valign="top"><strong>City :</strong></td>
          <td>
             {$data.city}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>State :</strong></td>
          <td>
 {$data.state}
             </td>
        </tr>
        <tr>
          <td valign="top"><strong>Country :</strong></td>
          <td>
              {$data.country}
             </td>
        </tr>
        
        <tr>
          <td valign="top"><strong>Phone STD Code :</strong></td>
          <td>
              {$data.phone_std_code}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Mentor Name :</strong></td>
          <td>
              {$data.mentor_name}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Mentor Email :</strong></td>
          <td>
              {$data.mentor_email}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Registeration Date :</strong></td>
          <td>
              {$data.reg_date}
             </td>
        </tr>
             
         <tr>
          <td valign="top"><strong>Is Active :</strong></td>
          <td>
          <input type="radio" id="is_active" name="is_active" value="1" {if $data.is_active eq 1}checked="checked" {/if}/>Yes
          <input type="radio" id="is_active" name="is_active" value="0" {if $data.is_active neq 1}checked="checked" {/if} />No
              
             </td>
        </tr>        
        <tr>
          <td>&nbsp;</td>
          <td><label>
              <input name="button" type="submit" id="button" value="Update" />
            </label></td>
        </tr>
      </table>
      </form>
     </td>
  </tr>
</table>
{include file="_footerAdmin.tpl"}