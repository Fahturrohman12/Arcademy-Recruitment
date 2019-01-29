<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
    <script src="../assets/jquery/jquery-1.12.4.min.js"></script>
  </head>
  <body> 
    <div class="container-fluid" style="padding-top: 50px;">
        <form action="" method="post" id="form-input">
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-input">
                        <label>Name</label>
                        <input type="text" name="nama" id="nama" class="form-control" />
                    </div><br>
                    <div class="form-input">
                        <label>Address</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" />
                    </div><br>
                    <div class="form-input">
                        <div class="form-group">
                          <label>Hobbies</label>
                          <select id="example-select" name="hobi" id="hobi" class="form-control"></select>
                        </div>
                    </div><br>
                    <div class="form-input">
                        <label>Is_Married : &nbsp</label>
                        <label class="radio-inline"><input type="radio" name="status" id="status" value="Menikah">Menikah</label>
                        <label class="radio-inline"><input type="radio" name="status" id="status" value="Belum Menikah">Belum Menikah</label>
                    </div><br>
                    <div class="form-input">
                        <label>School</label>
                        <select id="school-select" id="school" class="form-control">
                            <option>SD / MI</option>
                            <option>SMP / MTS</option>
                            <option>SMA / SMK</option>
                        </select>
                    </div><br>
                    <div class="form-input">
                        <label>Skills</label>
                        <select id="skilss-select" id="skill" class="form-control">
                        </select>
                    </div><br>
                    <input class="offset button btn btn-md btn-success" type="submit" name="submit" value="Submit"/>
                </div>
            </div>
        
            
      
      <!-- <label>Email</label><input type="text" name="email" />
      <label>Website</label><input type="text" name="website" /> -->
      
    </form>
    </div>
    

    <script type="text/javascript">
        $('#form-input').submit(function(e){
            var nama = $('#nama').val();   
            var alamat = $('#alamat').val();        
            var hobi  = $('input#hobi:selected').val();
            var married = $('input#hobi:checked').val();  
            var school  = $('input#school:selected').val();         
            var skill  = $('input#skill:selected').val();
          e.preventDefault();
          data = {
            nama: nama,
            alamat: alamat,
            hobi: hobi,
            married: married,
            school: school,
            skill: skill
          };
          $('input[name =" nama"]').each(function(i, elm, ) {
            data[$(elm).attr('#nama')] = elm.value;

          })
          $('input[id =" hobi"]').each(function(i, elm, ) {
            data[$(elm).attr('#nama')] = elm.value;

          })
          
          data_json = JSON.stringify(data);
          alert(data_json);
          // Send data_json via AJAX...
        });
    </script>










    <script type="text/javascript">
        var myobject = {
        ValueA : 'Soccer',
        ValueB : 'Volley',
        ValueC : 'Football'
    };

    var select = document.getElementById("example-select");
    for(index in myobject) {
        select.options[select.options.length] = new Option(myobject[index], index);
    }
    </script>

    <script type="text/javascript">
        var myobject = {
        ValueA : 'Back End Developer',
        ValueB : 'Front End Developer'
    };

    var select = document.getElementById("skilss-select");
    for(index in myobject) {
        select.options[select.options.length] = new Option(myobject[index], index);
    }
    </script>

    <script type="text/javascript">
    function limit_checkbox(max,identifier)
    {
        var checkbox = $("input[name='"+identifier+"[]']");
        var checked  = $("input[name='"+identifier+"[]']:checked").length;
        checkbox.filter(':not(:checked)').prop('disabled', checked >= max);
        
}
</script>
  </body>
</html>