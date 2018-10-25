@extends('emails.layouts.master')

@section('content')
<tr>
  <td align="left">
    <table border="0" width="590" align="center" cellpadding="0" cellspacing="0" class="container590">
      <tr>
        <td align="center" style="color: #888888; font-size: 16px; font-family: \'Work Sans\', Calibri, sans-serif; line-height: 24px;">
          <p style="line-height: 24px; margin-bottom:15px;text-align: left;">
            Hi {{ explode(" ", $username)[0] }},
          </p>
          <p style="line-height: 24px;margin-bottom:15px;text-align: left;">
            We have successfully reset your password.
            Use {{ $password }} to login into your account.
          </p>
        </td>
      </tr>
    </table>
  </td>
</tr>

<tr>
  <td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td>
</tr>

<tr>
  <td align="left">
    <table border="0" width="590" align="center" cellpadding="0" cellspacing="0" class="container590">
      <tr>
        <td align="center" style="color: #888888; font-size: 16px; font-family: \'Work Sans\', Calibri, sans-serif; line-height: 24px;">
          <p style="line-height: 24px;text-align: left;">
            Regards,<br>
            Fleet247 Team
          </p>
        </td>
      </tr>
    </table>
  </td>
</tr>
@endsection
