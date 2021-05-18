
function SubmitBooking() {

    
   // alert(document.getElementById("name").value);
console.log(document.getElementById("name").value,document.getElementById("age").value,document.getElementById("phone").value,document.getElementById("date").value,document.getElementById("time").value,document.getElementById("row").value,document.getElementById("column").value);
window.open("http://localhost/website/index.php?name="+document.getElementById("name").value+"&"+"age="+document.getElementById("age").value+"&"+"phone="+document.getElementById("phone").value+"&"+"date="+document.getElementById("date").value+"&"+"time="+document.getElementById("time").value+"&"+"column="+document.getElementById("column").value+"&"+"row="+document.getElementById("row").value);
alert("data saved succesfuly");

}

