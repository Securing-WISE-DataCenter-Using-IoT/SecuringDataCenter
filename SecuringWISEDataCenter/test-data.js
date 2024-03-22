<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  function sendData() {
    var humidity = parseInt($("#humidity").val());
    var temperature = parseInt($("#temperature").val());
    var mq2Value = parseInt($("#mq2Value").val());
    var rainWaterValue = parseInt($("#rainWaterValue").val());
    var sw420Value = parseInt($("#sw420Value").val());
    
    $.ajax({
      url: "test-data.php",
      type: "GET",
      data: {
        humidity: humidity,
        temperature: temperature,
        mq2Value: mq2Value,
        rainWaterValue: rainWaterValue,
        sw420Value: sw420Value
      },
      success: function(response) {
        console.log("Stored!");
      },
      error: function(xhr, status, error) {
        console.log("ERROR " + error);
      }
    });
  }
  
  sendData();
  
  setInterval(function() {
    sendData();
  }, 30000); 
});
</script>
