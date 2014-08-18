$(function() {
    var value = 0;
    var percent = 0;
    var c = 0;
    function set_progress(value) {
      $( "#progressbar" ).progressbar({ value: value });
    }

    function set_percent() {
      if(value <= 100) set_progress(value += percent);
    }

    function write_log(msg) {
      $("#log").append(msg + "\n");
    }

    function exec_api(url,data) {
      //data = { name: "John", location: "Boston" }
      $.ajax({
        type: "POST",
        url: url,
        data: data
      })
      .done(function( msg ) {
        write_log(msg);
      });
    }

    function generate_data() {
      $(".get:checked").each(function(i){
        //call API generate data  exec_api(url,data)
        alert("Generate " + $(this).val());
        write_log("Generate " + $(this).val());
        set_percent();
      });
    }

    function upload_data() {
      $(".get:checked").each(function(i){
        //call API upload data exec_api(url,data)
        alert("Upload " + $(this).val());
        write_log("Upload " + $(this).val());
        set_percent();
      });
    }

    function get_percent() {
      percent = parseInt(50 / $(".get:checked").length);
      value = 100 - $(".get:checked").length * percent * 2;
    }
    set_progress(value);
    $( "#downloadButton" ).click(function() {
      value = 0;
      percent = 0;
      c = 0;
      //show message don't close page...
      get_percent();
      generate_data();
      upload_data();
      // show message success...
    });

});
