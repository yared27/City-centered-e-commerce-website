window.onload = function() {
    var toggle = document.getElementById('language-toggle');
    var englishContent = document.getElementById('english-content');
    var amharicContent = document.getElementById('amharic-content');

    toggle.onchange = function() {
      if (toggle.checked) {
        document.getElementById("am-contactus").innerHTML = "እዚህ ያመልክቱ"
        document.getElementById("am-name").innerHTML = "ስም"
        document.getElementById("am-email").innerHTML = "ኢሜል"
        document.getElementById("am-message").innerHTML = "መልዕክት"
        document.getElementById("am-submit").innerHTML = "ላክ"
        
          } else {
         document.getElementById("am-contactus").innerHTML = "Contact us"
         document.getElementById("am-name").innerHTML = "Name"
        document.getElementById("am-email").innerHTML = "Email"
        document.getElementById("am-message").innerHTML = "Message"
        document.getElementById("am-submit").innerHTML = "Submit"
       
      }
    };
  };