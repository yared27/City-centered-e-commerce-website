window.onload = function() {
    var toggle = document.getElementById('language-toggle');
    var englishContent = document.getElementById('english-content');
    var amharicContent = document.getElementById('amharic-content');

    toggle.onchange = function() {
      if (toggle.checked) {
        document.getElementById("am-vision").innerHTML = "ተልዕኮ"
        document.getElementById("am-aim").innerHTML = "አላማ"
        document.getElementById("am-aboutus").innerHTML = "ስለ እኛ"
        document.getElementById("am-ourteam").innerHTML = "የቡድን መዋቅር"
          } else {
        document.getElementById("am-vision").innerHTML = "Vision"
        document.getElementById("am-aim").innerHTML = "Aim"
        document.getElementById("am-aboutus").innerHTML = "About Us"
        document.getElementById("am-ourteam").innerHTML = "Our Team"
      }
    };
  };