SomApi.account = "SOM532a5597ab34d";   //your API Key here
SomApi.domainName = "speedtest";      //your domain or sub-domain here 
SomApi.config.sustainTime = 4; 
SomApi.onTestCompleted = onTestCompleted;
SomApi.onError = onError;

var msgDiv = document.getElementById("msg");
            
 function btnStartClick() {
    msgDiv = document.getElementById("msg");
    msgDiv.innerHTML = "<h3>Speed test in progress. Please wait...</h3>";
                SomApi.startTest();
}
            
function onTestCompleted(testResult) {
    msgDiv = document.getElementById("msg");
    msgDiv.innerHTML = 
    "<h3>"+
    "Download: "+testResult.download+"<br/>"+
    "Upload: "+testResult.upload+"<br/>"+
    "Test Server: "+testResult.testServer+"<br/>"+
    "IP: "+testResult.ip_address+"<br/>"+
    "Hostname: "+testResult.hostname+"<br/>"+
    "</h3>";
}
            
function onError(error) {
    msgDiv = document.getElementById("msg");
    msgDiv.innerHTML = "Error "+ error.code + ": "+error.message;
}