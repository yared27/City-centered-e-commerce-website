window.onload = function() {
    var toggle = document.getElementById('language-toggle');
    var englishContent = document.getElementById('english-content');
    var amharicContent = document.getElementById('amharic-content');

    toggle.onchange = function() {
      if (toggle.checked) {document.getElementById("author").innerHTML = "ወደ 40Gebeya እንኳን በደህና መጡ"
        document.getElementById("am-abaya").innerHTML = "የአባያ ሀይቅ ከጉጌ ተራሮች በስተምስራቅ የሚገኝ ትልቅ ሀይቅ ነው። ቀይ-ቡናማ ቀለም, ብዙ አዞዎች እና ሶስት ወንዞች ወደ ውስጥ ይገባሉ. የአርባ ምንጭ ከተማ እና የነቺሳር ብሄራዊ ፓርክ በባህር ዳር ይገኛሉ። የጫሞ ሀይቅ በስተደቡብ ሲሆን በእግዚአብሔር ድልድይ ተለያይቷል።"
        document.getElementById("am-chamo").innerHTML = "የጫሞ ሀይቅ በደቡብ ኢትዮጵያ የሚገኝ ሀይቅ ሲሆን በዋናው የኢትዮጵያ ስምጥ ውስጥ ይገኛል። ከአባያ ሀይቅ በስተደቡብ እና አርባ ምንጭ ከተማ እና ከአማሮ ተራሮች በስተ ምዕራብ ይገኛል። ሐይቁ የተለያዩ የዱር እንስሳት መገኛ የሆነው የኔቺሳር ብሔራዊ ፓርክ አካል ነው። የጫሞ ሀይቅ በአዞ እና ጉማሬ ብዛት ዝነኛ የሆነ ህዝብ ከጀልባ ጉዞ ወይም ከአባያ ሀይቅ የሚለየው የተፈጥሮ ምድር ድልድይ ነው።"
        document.getElementById("am-crocodile").innerHTML = "አርባምንጭ በአዞ እርባታ ትታወቃለች ፣የአርባ ምንጭ የአዞ እርባታ (AMCR)።ይህ በመንግስት የሚተዳደረው ተቋም በርካታ ቁጥር ያላቸው አዞዎች ይገኛሉ። የከብት እርባታው ከ3 አስርት አመታት በላይ አገልግሎት ሲሰጥ የቆየ ሲሆን ከአርባ ምንጭ ከተማ በ7 ኪሎ ሜትር ርቀት ላይ ከ15 አመት በፊት በደረሰ የጎርፍ አደጋ ጉዳት ደርሶበታል። በከብት እርባታው ላይ ያሉት አዞዎች በሀይቁ ውስጥ ከተሰበሰቡ እንቁላሎች የተፈለፈሉ ናቸው ወይም በእርሻ ላይ ተይዘው ያደጉ ወጣት አዞዎች ናቸው."
        document.getElementById("am-Hippopotamus").innerHTML = "በአርባምንጭ የሚገኘው የጫሞ ሀይቅ ጉማሬዎችን ለማየት የሚወደድ ቦታ ነው። እነዚህ ከፊል የውሃ ውስጥ አጥቢ እንስሳት በትልቅ መጠናቸው እና እስከ 5 ደቂቃ ድረስ በውሃ ውስጥ የመቆየት ችሎታቸው ይታወቃሉ። በአብዛኛው በሣር ላይ የሚመገቡ ዕፅዋት, እና በሌሊት በጣም ንቁ ናቸው."
        document.getElementById("am-Kudu").innerHTML = "በአርባምንጭ አቅራቢያ በሚገኘው በነቺሳር ብሔራዊ ፓርክ ውስጥ ከሚታዩ የዱር እንስሳት መካከል ታላቁ እና ትንሹ ኩዱ ይገኙበታል። ኩዱስ ረዣዥም ጠመዝማዛ ቀንዶቻቸው እና ከፍ ያለ አጥር ለመዝለል ባላቸው ችሎታ ይታወቃሉ። እነሱ አሳሾች ናቸው እና በቅጠሎች፣ በአበቦች እና በተለያዩ የእጽዋት ፍሬዎች ይመገባሉ።"
        document.getElementById("am-Pelican").innerHTML = "በአርባምንጭ ጫሞ ሀይቅ ላይ ከሚታዩ የውሃ ወፎች መካከል ፔሊካንስ ይጠቀሳሉ።እነዚህ ትልልቅ የውሃ ወፎች ምንቃራቸው ስር ባለው ልዩ ቦርሳቸው ይታወቃሉ እናም አሳ ለማጥመድ አንዳንዴም ለማቀዝቀዝ ይጠቀሙበታል።"
        document.getElementById("am-Warthog").innerHTML = "በአርባምንጭ ሜዳ ላይ ዋርቶግ በብዛት የሚታይ ነው። እነዚህ የዱር አሳማዎች በተለዩ ጥርሶች እና የፊት ዊቶች በቀላሉ ይታወቃሉ. ዋርቶጎች በተወሰነ መልኩ ኃይለኛ መልክ ቢኖራቸውም በአጠቃላይ ሰላማዊ እንስሳት ናቸው። በሣር ሜዳዎች እና በሳቫናዎች እንደሚኖሩ ይታወቃል, እና ብዙውን ጊዜ በገነት ሎጅ አርባምንጭ አካባቢ ይታያሉ."
        document.getElementById("am-Zebra").innerHTML = "በአርባምንጭ አቅራቢያ በሚገኘው የነቺሳር ብሔራዊ ፓርክ ውስጥ ከሚታዩት የሜዳ አህያ ዝርያዎች አንዱ ነው። እነዚህ እንስሳት ተለይተው የሚታወቁት ጥቁር እና ነጭ ባለ ባለቀለም ኮት ነው። የእያንዳንዱ የሜዳ አህያ ጭረቶች ልዩ ናቸው፣ ልክ እንደ ሰው የጣት አሻራዎች። የሜዳ አህያ ማህበራዊ እንስሳት ናቸው እና ብዙ ጊዜ ወንድ፣ ብዙ ሴቶች እና ልጆቻቸው ባካተቱ በትናንሽ የቤተሰብ ቡድኖች ውስጥ ይታያሉ።"
        

      } else {
        document.getElementById("am-abaya").innerHTML = "Lake Abaya is a large lake in Ethiopia, east of the Guge Mountains. It has a reddish-brown color, many crocodiles, and three rivers flowing into it. The town of Arba Minch and the Nechisar National Park are on its shores. Lake Chamo is south of it, separated by the Bridge of God."
        document.getElementById("am-chamo").innerHTML = "Lake Chamo is a lake in southern Ethiopia, located in the Main Ethiopian Rift. It is south of Lake Abaya and the city of Arba Minch, and west of the Amaro Mountains. The lake is part of the Nechisar National Park, which is home to various wildlife. Lake Chamo is famous for its large population of crocodiles and hippos, which can be seen from boat trips or the Bridge of God, a natural land bridge that separates it from Lake Abaya."
        document.getElementById("am-crocodile").innerHTML = "Arbaminch is known for its crocodile ranch, the Arba Minch Crocodile Ranch (AMCR).This government-run facility houses a large number of crocodiles. The ranch has been in service for over three decades and was relocated 7km from Arba Minch town after being damaged by a flood about 15 years ago. The crocodiles at the ranch are either hatched from eggs collected in the lakes or are young crocodiles that have been captured and reared on the farm."
        document.getElementById("am-Hippopotamus").innerHTML = "Lake Chamo in Arbaminch is a popular spot for viewing hippos. These semi-aquatic mammals are known for their large size and their ability to stay underwater for up to 5 minutes. They are herbivores, feeding mostly on grasses, and are most active during the night."
        document.getElementById("am-Kudu").innerHTML = "The Greater and Lesser Kudu are among the wildlife that can be seen in the Nechisar National Park near Arbaminch. Kudus are known for their long, spiral horns and their ability to jump high fences.  They are browsers and feed on leaves, flowers, and fruits of a wide variety of plants."
        document.getElementById("am-Pelican").innerHTML = "Pelicans are among the aquatic birds that can be seen on Lake Chamo in Arbaminch.These large water birds are known for their distinctive pouch under their beak,and they use it to catch fish and, sometimes, to cool off."
        document.getElementById("am-Warthog").innerHTML = "Warthogs are a common sight in the plains of Arbaminch. These wild pigs are easily recognizable by their distinct tusks and facial wattles. Despite their somewhat fierce appearance, warthogs are generally peaceful animals. They are known to inhabit the grasslands and savannas, and are often seen in the vicinity of Paradise Lodge Arbaminch."
        document.getElementById("am-Zebra").innerHTML = "Zebras are one of the many species that can be seen in the Nechisar National Park near Arbaminch. These animals are known for their distinctive black and white striped coats. Each zebra's stripes are unique, much like human fingerprints. Zebras are social animals and are often seen in small family groups consisting of a male, several females, and their young."
        document.getElementById("author").innerHTML = "Welcome to 40Gebeya"
      }
    };
  };