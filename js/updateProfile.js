$('document').ready(function() {
    /* handle form validation */
    $("#f").validate({
    rules:
    {
    name: {
    required: true,
    minlength: 3
    },
    email: {
    required: true,
    email: true
    },
    phone: {
    required: true,
    minlength: 10,
    maxlength: 10
    },
    gender: {
    required: true
    },
    dob: {
    required: true
    },
    age:  {
        required: true
    },
    gender : {
        required: true
    },
    college : {
        required:true
    },
    state: {
        requried: true
    },
    degree: {
        required:true
    },
    dept:{
        required:true
    },
    yop:{
        requried:true
    },
    aoi:{
        required:true
    }
    },
    messages:
    {
    name: "please enter your name",
    email: "please enter a valid email address",
    phone: {
    required: "please enter your phone number",
    minlength: "phone number should contain 10 digits"
    },
    gender: "please select your gender",
    dob: "please enter your date of birth",
   
    },
    submitHandler: submitForm
    });
    /* handle form submit */
    function submitForm() {
    var data = $("#f").serialize();
    $.ajax({
    type : 'POST',
    url : 'update.php',
    data : data,
    beforeSend: function() {
    $("#error").fadeOut();
    $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span>   creating ...');
    },
    success : function(response) {
    if(response==1){
    $("#error").fadeIn(1000, function(){
    $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>   Sorry email already taken !</div>');
    $("#btn-submit").html('Register');
    });
    } else{
    $("#btn-submit").html('<img src="images/ajax-loader.gif" />   Signing Up ...');
    setTimeout('window.location.href = "welcome.html" ',2000);
    } 
    }
    });
    return false;
    }
    });
    
    $.validate({
      modules : 'date'
    });
          
    
    
      function getAge(){
        var dob = document.getElementById('inputDate').value;
        dob = new Date(dob);
        var today = new Date();
        var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
        document.getElementById('inputAge').value=age;
    }
    
      
           
    