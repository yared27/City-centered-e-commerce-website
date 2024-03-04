window.onload = function() {
    var toggle = document.getElementById('language-toggle');
    var englishContent = document.getElementById('english-content');
    var amharicContent = document.getElementById('amharic-content');

    toggle.onchange = function() {
      if (toggle.checked) {
        document.getElementById("am-term").innerHTML = "መመሪያ እና ደንብ"
        document.getElementById("am-term1").innerHTML = "1. የተጠቃሚ ብቁነት፡ ቢያንስ 18 አመት የሆናችሁ እና ፕላትፎርሙን ለመጠቀም ውል ለመግባት ህጋዊ አቅም ያለሀ/ሽ መሆን"
        document.getElementById("am-term2").innerHTML = "2. የተጠቃሚ መለያዎች፡ ሻጮች ምርቶችን ለመዘርዘር መለያዎችን መፍጠር ይችላሉ። ደንበኞች ምርቶችን እንደ እንግዳ ማሰስ ይችላሉ ነገር ግን ለግዢዎች ሒሳቦችን ይፈልጋሉ። የመለያ መረጃ እና የይለፍ ቃሎች ሚስጥራዊ ናቸው።"
        document.getElementById("am-term3").innerHTML = "3. የምርት ዝርዝሮች እና ሽያጮች፡-"
        document.getElementById("am-term3a").innerHTML = "የሻጮች፡-የምርት ዝርዝሮች ትክክለኛ፣ የተሟሉ እና የሚመለከታቸውን ህጎች የሚያከብሩ መሆናቸውን ያረጋግጡ።ተመጣጣኝ እና ተወዳዳሪ ዋጋዎችን ማዘጋጀት ይኖርባቸዋል።"
        document.getElementById("am-term3b").innerHTML = "ደንበኞች፡ ግዢዎችን ከማጠናቀቅዎ በፊት የምርት መግለጫዎችን እና ዋጋዎችን ይገምግሙ። ሻጩ እስኪቀበል ድረስ የተረዱ ትዕዛዞችን አይረጋገጡም።"
        document.getElementById("am-term4").innerHTML = "4. ክፍያ እና አቅርቦት፡-"
        document.getElementById("am-term4a").innerHTML = "ዘዴዎች፡- TELEbirr እና ጥሬ ገንዘብ ። ለቴሌቢር በቂ ገንዘብ ያረጋግጡ። ለ ጥሬ ገንዘብ ትክክለኛ መጠን ይኑርዎት።"
        document.getElementById("am-term4b").innerHTML = "ክፍያዎች፡ የማስረከቢያ ክፍያዎች በሻጩ እና በቦታው ላይ ተመስርተው ሊተገበሩ ይችላሉ። ከመግዛቱ በፊት መረጃ ይደርስዎታል።"
        document.getElementById("am-term4c").innerHTML = "ጊዜ፡ ግምቶች፣ በሻጭ አካባቢ እና በሌሎች ምክንያቶች ሊለያዩ ይችላሉ።"
        document.getElementById("am-term5").innerHTML = "5. ተመላሽ እና ተመላሽ ማድረግ፡ ሻጮች የራሳቸውን ፖሊሲ ያዘጋጃሉ። ከመግዛቱ በፊት ይገምግሙ።"
        document.getElementById("am-term6").innerHTML = "6. የተጠቃሚ ምግባር፡ የተከለከሉ ድርጊቶች የሚከተሉትን ያካትታሉ፡-"
        document.getElementById("am-term6a").innerHTML = "አፀያፊ ወይም ጎጂ ይዘትን መለጠፍ።"
        document.getElementById("am-term6b").innerHTML = "ሌላ ተጠቃሚን ማስመሰል።"
        document.getElementById("am-term6c").innerHTML = "ያለፍቃድ መድረኩን ለንግድ ዓላማ መጠቀም።"
        document.getElementById("am-term6d").innerHTML = "ያለፈቃድ የግል መረጃን ማጋራት።"
        document.getElementById("am-term7").innerHTML = "7. ክህደቶች እና ገደቦች፡ መድረኩን ወይም አገልግሎቶቹን በተመለከተ ምንም ዋስትናዎች፣ የተገለጹ ወይም የተዘጉ። ከመድረክ አጠቃቀምዎ ለሚደርሱ ጉዳቶች ወይም ኪሳራዎች ተጠያቂ አይደለንም። በራስህ አደጋ ተጠቀም።"
        document.getElementById("am-term8").innerHTML = "8. የማሰብ ችሎታ፡ ሁሉም የፕላትፎርም ይዘት በቅጂ መብት እና በሌሎች የአእምሯዊ ንብረት ህጎች የተጠበቀ ነው። ያለእኛ ፍቃድ ይዘትን መቅዳት፣ ማሻሻል ወይም ማሰራጨት የለም።"
        document.getElementById("am-term9").innerHTML = "9. የአስተዳደር ህግ እና የክርክር አፈታት፡ እነዚህ ውሎች የሚተዳደሩት እና የሚዋቀሩት በኢትዮጵያ ህግ መሰረት ነው። ከእነዚህ ውሎች የሚነሳ ወይም የሚያያዝ ማንኛውም አለመግባባት የሚፈታው ብቃት ባለው የኢትዮጵያ ፍርድ ቤቶች ነው።"
        document.getElementById("am-term10").innerHTML = "10. ማሻሻያዎች፡ ሳናሳውቅ እነዚህን ውሎች በማንኛውም ጊዜ ማሻሻል እንችላለን። እባክዎን ለለውጦቹ በመደበኛነት ይገምግሙ።"
        document.getElementById("am-term11").innerHTML = "ለተጨማሪ ጥያቄዎች፣ የተጠቃሚ እገዛ ገጽ ይሂዱ።"
          } else {
        document.getElementById("am-term").innerHTML = "Vision"
        document.getElementById("am-term1").innerHTML = "1. USER ELIGIBILITY: YOU MUST BE AT LEAST 18 YEARS OLD AND POSSESS THE LEGAL CAPACITY TO ENTER INTO CONTRACTS TO USE THE PLATFORM."
        document.getElementById("am-term2").innerHTML = "2. USER ACCOUNTS: SELLERS MAY CREATE ACCOUNTS TO LIST PRODUCTS. CUSTOMERS MAY BROWSE PRODUCTS AS GUESTS BUT REQUIRE ACCOUNTS FOR PURCHASES. ACCOUNT INFORMATION AND PASSWORDS ARE CONFIDENTIAL."
        document.getElementById("am-term3").innerHTML = "3. PRODUCT LISTINGS & SALES:"
        document.getElementById("am-term3a").innerHTML = "SELLERS:ENSURE PRODUCT LISTINGS ARE ACCURATE, COMPLETE, AND COMPLY WITH APPLICABLE LAWS. SET FAIR AND COMPETITIVE PRICES."
        document.getElementById("am-term3b").innerHTML = "CUSTOMERS:REVIEW PRODUCT DESCRIPTIONS AND PRICES BEFORE COMPLETING PURCHASES.UNDERSTAND ORDERS ARE NOT CONFIRMED UNTIL SELLER ACCEPTANCE."
        document.getElementById("am-term4").innerHTML = "4. PAYMENT & DELIVERY:"
        document.getElementById("am-term4a").innerHTML = "METHODS: TELEBIRR AND CASH ON DELIVERY (COD). ENSURE SUFFICIENT FUNDS FOR TELEBIRR. HAVE EXACT AMOUNT FOR COD."
        document.getElementById("am-term4b").innerHTML = "FEES: DELIVERY FEES MAY APPLY DEPENDING ON SELLER AND LOCATION. YOU WILL BE INFORMED BEFORE PURCHASE."
        document.getElementById("am-term4c").innerHTML = "TIMES: ESTIMATES, MAY VARY DUE TO SELLER LOCATION AND OTHER FACTORS."
        document.getElementById("am-term5").innerHTML = "5. REFUNDS & RETURNS: SELLERS SET THEIR OWN POLICIES. REVIEW BEFORE PURCHASE."
        document.getElementById("am-term6").innerHTML = "6. USER CONDUCT: PROHIBITED ACTIONS INCLUDE:"
        document.getElementById("am-term6a").innerHTML = "POSTING OFFENSIVE OR HARMFUL CONTENT."
        document.getElementById("am-term6b").innerHTML = "IMPERSONATING ANOTHER USER."
        document.getElementById("am-term6c").innerHTML = "USING THE PLATFORM FOR COMMERCIAL PURPOSES WITHOUT PERMISSION."
        document.getElementById("am-term6d").innerHTML = "SHARING PERSONAL INFORMATION WITHOUT CONSENT."
        document.getElementById("am-term7").innerHTML = "7. DISCLAIMERS & LIMITATIONS: NO WARRANTIES, EXPRESS OR IMPLIED, REGARDING THE PLATFORM OR ITS SERVICES. WE ARE NOT LIABLE FOR DAMAGES OR LOSSES ARISING FROM YOUR PLATFORM USE. USE AT YOUR OWN RISK."
        document.getElementById("am-term8").innerHTML = "8. INTELLECTUAL PROPERTY: ALL PLATFORM CONTENT IS PROTECTED BY COPYRIGHT AND OTHER INTELLECTUAL PROPERTY LAWS. NO COPYING, MODIFYING, OR DISTRIBUTING CONTENT WITHOUT OUR PERMISSION."
        document.getElementById("am-term9").innerHTML = "9. GOVERNING LAW & DISPUTE RESOLUTION: THESE TERMS SHALL BE GOVERNED BY AND CONSTRUED IN ACCORDANCE WITH THE LAWS OF ETHIOPIA. ANY DISPUTE ARISING OUT OF OR RELATING TO THESE TERMS SHALL BE RESOLVED BY THE COMPETENT COURTS OF ETHIOPIA."
        document.getElementById("am-term10").innerHTML = "10. AMENDMENTS: WE MAY AMEND THESE TERMS AT ANY TIME WITHOUT NOTICE. PLEASE REVIEW REGULARLY FOR CHANGES."
        document.getElementById("am-term11").innerHTML = "FOR MORE QUESTIONS,USE CONTACT US."
      }
    };
  };