<html>

<head>
  <title>Validate empty fields</title>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <style type="text/css">
    body {
      font-family: "Trebuchet MS", verdana;
      width: 450px;
    }

    .error {
      color: red;
    }

    #info {
      color: #008000;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <form>
    <fieldset>
      <legend><strong>Personal</strong></legend>
      <table>
        <tbody>
          <tr>
            <td>Name:* </td>
            <td><input type="text" class="required" /></td>
          </tr>
          <tr>
            <td>Address:* </td>
            <td><input type="text" class="required" /></td>
          </tr>
          <tr>
            <td>City: </td>
            <td><input type="text" /></td>
          </tr>
          <tr>
            <td>Country:* </td>
            <td><input type="text" class="required" /></td>
          </tr>
        </tbody>
      </table>
    </fieldset>
    <br />
    <span id="info"></span>
    <br />
    <input type="button" value="Check" id="check" />
  </form>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#check').click(validate);

      function validate() {
        var dataValid = true;
        $('#info').html('');
        $('.required').each(function() {
          var cur = $(this);
          cur.next('span').remove();
          if ($.trim(cur.val()) == '') {
            cur.after('<span class="error"> Mandatory field</span>');
            dataValid = false;
          }
        });
        if (dataValid) {
          $('#info').html('Validation OK');
        }
      }
    });
  </script>
</body>

</html>