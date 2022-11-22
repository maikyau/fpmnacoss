   // register form end
      function validatephonenumber(phonelogin)
      {  phonelogin = phonelogin.replace(/[^0-9]/g,'');
      $("#phonenumber").val(phonelogin);
      if( phonelogin == '' || !phonelogin.match(/^0[0-9]{9}$/))
       {  return false;
       } else {return true;   
       }  }; 


      function validatephone(phone)
      {  phone = phone.replace(/[^0-9]/g,'');
      $("#phone").val(phone);
      if( phone == '' || !phone.match(/^0[0-9]{9}$/))
       {  return false;
       } else {return true;   
       }  }; 

          function validateamount(amount)
      {  phone = amount.replace(/[^0-9]/g,'');
      $("#amount").val(amount);
      if( amount == '' || !amount.match(/^0[0-9]{9}$/))
       {  return false;
       } else {return true;   
       }  }; 

         function validatefund(fund)
      {  fund = fund.replace(/[^0-9]/g,'');
      $("#fund").val(fund);
      if( fund == '' || !fund.match(/^0[0-9]{9}$/))
       {  return false;
       } else {return true;   
       }  }; 

      function validatecode(phone)
      {  phone = phone.replace(/[^0-9]/g,'');
      $("#code").val(phone);
      if( phone == '' || !phone.match(/^0[0-9]{9}$/))
       {  return false;
       } else {return true;   
       }  }; 

      function validatefacebook(facebookcode)
      {  facebookcode = facebookcode.replace(/[^0-9]/g,'');
      $("#facebookcode").val(facebookcode);
      if( facebookcode == '' || !facebookcode.match(/^0[0-9]{9}$/))
       {  return false;
       } else {return true;   
       }  }; 

      function validatetiktok(tiktokcode)
      {  tiktokcode = tiktokcode.replace(/[^0-9]/g,'');
      $("#tiktokcode").val(tiktokcode);
      if( tiktokcode == '' || !tiktokcode.match(/^0[0-9]{9}$/))
       {  return false;
       } else {return true;   
       }  }; 

       function validateyoutube(youtubecode)
      {  youtubecode = youtubecode.replace(/[^0-9]/g,'');
      $("#youtubecode").val(youtubecode);
      if( youtubecode == '' || !youtubecode.match(/^0[0-9]{9}$/))
       {  return false;
       } else {return true;   
       }  }; 
     function validateacc_num(acc)
      {  acc = acc.replace(/[^0-9]/g,'');
      $("#account_no").val(acc);
      if( acc == '' || !acc.match(/^0[0-9]{9}$/))
       {  return false;
       } else {return true;   
       }  }; 

     function validatebvn(bvn)
      {  bvn = bvn.replace(/[^0-9]/g,'');
      $("#bvn").val(bvn);
      if( bvn == '' || !bvn.match(/^0[0-9]{9}$/))
       {  return false;
       } else {return true;   
       }  }; 

 // register end



  // select state vs lga
  function state_function()
  {
    var a=document.getElementById("select_state").value;
    if(a==="Abia")
    {
        var arr=["Choose your Local Government", "Aba North", "Aba South", "Arochukwu", "Bende", "Ikwuano", "Isiala-Ngwa North", "Isiala-Ngwa South", "Isuikwato", "Obi Ngwa", "Ohafia", "Osisioma", "Ugwunagbo", "Ukwa East", "Ukwa West", "Umuahia North", "Umuahia South", "Umunneochi"];
    }
    else if(a==="Adamawa")
    {
        var arr=["Choose your Local Government", "Demsa", "Fufore", "Ganye", "Girei", "Gombi", "Guyuk", "Hong",  "Jada", "Lamurde", "Madagali", "Maiha", "Mayo-Belwa", "Michika", "Mubi North", "Mubi South", "Numan", "Shelleng", "Song", "Toungo", "Yola North", "Yola South"];
    }

    else if(a==="Akwa Ibom")
    {
        var arr=["Choose your Local Government", "Abak", "Eastern Obolo", "Eket", "Esit Eket", "Essien Udim", "Etim Ekpo", "Etinan", "Ibeno", "Ibesikpo Asutan", "Ibiono Ibom", "Ika", "Ikono", "Ikot Abasi", "Ikot Ekpene", "Ini", "Itu", "Mbo", "Mkpat Enin", "Nsit Atai", "Nsit Ibom", "Nsit Ubium", "Obot Akara", "Okobo", "Onna", "Oron", "Oruk Anam", "Udung Uko", "Ukanafun", "Uruan", "Urue-Offong/Oruko", "Uyo"];
    }
    else if(a==="Anambra")
    {
        var arr=["Choose your Local Government", "Aguata", "Anambra East", "Anambra West", "Anaocha", "Awka North", "Awka South", "Ayamelum", "Dunukofia", "Ekwusigo", "Idemili North", "Idemili south", "Ihiala", "Njikoka", "Nnewi North", "Nnewi South", "Ogbaru", "Onitsha North", "Onitsha South", "Orumba North", "Orumba South", "Oyi"];
    }
    else if(a==="Bauchi")
    {
        var arr=["Choose your Local Government", "Alkaleri", "Bauchi", "Bogoro", "Damban", "Darazo", "Dass", "Gamawa", "Ganjuwa", "Giade", "Itas/Gadau", "Jama'are", "Katagum", "Kirfi", "Misau", "Ningi", "Shira", "Tafawa Balewa", "Toro", "Warji", "Zaki"];
    }
    else if(a==="Bayelsa")
    {
        var arr=["Choose your Local Government", "Brass", "Ekeremor", "Kolokuma/Opokuma", "Nembe", "Ogbia", "Sagbama", "Southern Jaw", "Yenegoa"];
    }
    else if(a==="Benue")
    {
        var arr=["Choose your Local Government", "Ado", "Agatu", "Apa", "Buruku", "Gboko", "Guma", "Gwer East", "Gwer West", "Katsina-Ala", "Konshisha", "Kwande", "Logo", "Makurdi", "Obi", "Ogbadibo", "Ohimini", "Oju", "Okpokwu", "Oturkpo", "Tarka", "Ukum", "Ushongo", "Vandeikya"];
    }
    else if(a==="Borno")
    {
        var arr=["Choose your Local Government", "Abadam", "Askira/Uba", "Bama", "Bayo", "Biu", "Chibok", "Damboa", "Dikwa", "Gubio", "Guzamala", "Gwoza", "Hawul", "Jere", "Kaga", "Kala/Balge", "Konduga", "Kukawa", "Kwaya Kusar", "Mafa", "Magumeri", "Maiduguri", "Marte", "Mobbar", "Monguno", "Ngala", "Nganzai"];
    }
    else if(a==="Cross River")
    {
        var arr=["Choose your Local Government", "Abi", "Akamkpa", "Akpabuyo", "Bakassi", "Bekwara", "Biase", "Boki", "Calabar Municipal", "Calabar South", "Etung", "Ikom", "Obanliku", "Obubra", "Obudu", "Odukpani", "Ogoja", "Yakurr", "Yala"];
    }
    else if(a==="Delta")
    {
        var arr=["Choose your Local Government", "Aniocha North", "Aniocha South", "Bomadi", "Burutu", "Ethiope East", "Ethiope West", "Ika North-East", "Ika South", "Isoko North", "Isoko south", "Ndokwa East", "Ndokwa West", "Okpe", "Oshimili North", "Oshimili South", "Patani", "Sapele", "Udu", "Ughelli North", "Ughelli South", "Ukwuani", "Uvwie", "Warri North", "Warri South"];
    }
    else if(a==="Ebonyi")
    {
        var arr=["Choose your Local Government", "Abakaliki", "Afikpo North", "Afikpo South", "Ebonyi", "Ezza North", "Ezza South", "Ishielu", "Ivo", "Izzi", "lkwo", "Ngbo", "Ohaozara", "Ohaukwu", "Onicha"];
    }
    else if(a==="Edo")
    {
        var arr=["Choose your Local Government", "Akoko-Edo", "Egor", "Esan Central", "Esan North-East", "Esan South-East", "Esan West", "Etsako Central", "Etsako East", "Etsako West", "Igueben", "Ikpoba-Okha", "Oredo", "Orhionwon", "Ovia North-East", "Ovia South-West", "Owan East", "Owan West", "Uhunmwonde"];
    }
    else if(a==="Ekiti")
    {
        var arr=["Choose your Local Government", "Ado", "Efon", "Ekiti South-West", "Ekiti-East", "Ekiti-West", "Emure/Ise/Orun", "Gbonyin", "Ido/Osi", "Ijero,", "Ikere", "Ikole", "Ilejemeje.", "Irepodun", "Ise/Orun", "Moba", "Oye"];
    }
    else if(a==="Enugu")
    {
        var arr=["Choose your Local Government", "Aninri", "Awgu", "Enugu East", "Enugu North", "Enugu South,", "Ezeagu", "Igbo-Ekiti", "Igbo-Eze South", "IgboEze North", "Isi-Uzo", "Nkanu East", "Nkanu West", "Nsukka", "Oji-River", "Udenu.", "Udi", "Uzo-Uwani"];
    }
    else if(a==="FCT Abuja")
    {
        var arr=["Choose your Local Government", "Abaji", "Abuja Municipal", "Bwari", "Gwagwalada", "Kuje", "Kwali"];
    }
    else if(a==="Gombe")
    {
        var arr=["Choose your Local Government", "Akko", "Balanga", "Billiri", "Dukku", "Funakaye", "Gombe", "Kaltungo", "Kwami", "Nafada", "Shomgom", "Yamaltu/Deba"];
    }
    else if(a==="Imo")
    {
        var arr=["Choose your Local Government", "Aboh-Mbaise", "Ahiazu-Mbaise", "Ehime-Mbano", "Ezinihitte", "Ideato North", "Ideato South", "Ihitte/Uboma", "Ikeduru", "Isiala Mbano", "Isu", "Mbaitoli", "Ngor-Okpala", "Njaba", "Nkwerre", "Nwangele", "Obowo", "Oguta", "Ohaji/Egbema", "Okigwe", "Onuimo", "Orlu", "Orsu", "Oru East", "Oru West", "Owerri North", "Owerri West", "Owerri-Municipal"];
    }
    else if(a==="Jigawa")
    {
        var arr=["Choose your Local Government", "Auyo", "Babura", "Biriniwa", "Birni Kudu", "Buji", "Dutse", "Gagarawa", "Garki", "Gumel", "Guri", "Gwaram", "Gwiwa", "Hadejia", "Jahun", "Kafin Hausa", "Kaugama", "Kazaure", "Kiri Kasamma", "Kiyawa", "Maigatari", "Malam Madori", "Miga", "Ringim", "Roni", "Sule-Tankarkar", "Taura", "Yankwashi"];
    }
    else if(a==="Kaduna")
    {
        var arr=["Choose your Local Government", "Birni-Gwari", "Chikun", "Giwa", "Igabi", "Ikara", "jaba", "Jema'a", "Kachia", "Kaduna North", "Kaduna South", "Kagarko", "Kajuru", "Kaura", "Kauru", "Kubau", "Kudan", "Lere", "Makarfi", "Sabon-Gari", "Sanga", "Soba", "Zango-Kataf", "Zaria"];
    }
    else if(a==="Kano")
    {
        var arr=["Choose your Local Government", "Ajingi", "Albasu", "Bagwai", "Bebeji", "Bichi", "Bunkure", "Dala", "Dambatta", "Dawakin Kudu", "Dawakin Tofa", "Doguwa", "Fagge", "Gabasawa", "Garko", "Garum Malam", "Gaya", "Gezawa", "Gwale", "Gwarzo", "Kabo", "Kano Municipal", "Karaye", "Kibiya", "Kiru", "kumbotso", "Kunchi", "Kura", "Madobi", "Makoda", "Minjibir", "Nassarawa", "Rano", "Rimin Gado", "Rogo", "Shanono", "Sumaila", "Takai", "Tarauni", "Tofa", "Tsanyawa", "Tudun Wada", "Ungogo", "Warawa", "Wudil"];
    }
    else if(a==="Katsina")
    {
        var arr=["Choose your Local Government", "Bakori", "Batagarawa", "Batsari", "Baure", "Bindawa", "Charanchi", "Dan Musa", "Dandume", "Danja", "Daura", "Dutsi", "Dutsin-Ma", "Faskari", "Funtua", "Ingawa", "Jibia", "Kafur", "Kaita", "Kankara", "Kankia", "Katsina", "Kurfi", "Kusada", "Mai'Adua", "Malumfashi", "Mani", "Mashi", "Matazuu", "Musawa", "Rimi", "Sabuwa", "Safana", "Sandamu", "Zango"];
    }
    else if(a==="Kebbi")
    {
        var arr=["Choose your Local Government", "Aleiro", "Arewa-Dandi", "Argungu", "Augie", "Bagudo", "Birnin Kebbi", "Bunza", "Dandi", "Fakai", "Gwandu", "Jega", "Kalgo", "Koko/Besse", "Maiyama", "Ngaski", "Sakaba", "Shanga", "Suru", "Wasagu/Danko", "Yauri", "Zuru"];
    }
    else if(a==="Kogi")
    {
        var arr=["Choose your Local Government", "Adavi", "Ajaokuta", "Ankpa", "Bassa", "Dekina", "Ibaji", "Idah", "Igalamela-Odolu", "Ijumu", "Kabba/Bunu", "Kogi", "Lokoja", "Mopa-Muro", "Ofu", "Ogori/Mangongo", "Okehi", "Okene", "Olamaboro", "Omala", "Yagba East", "Yagba West"];
    }
    else if(a==="Kwara")
    {
        var arr=["Choose your Local Government", "Asa", "Baruten", "Edu", "Ekiti", "Ifelodun", "Ilorin East", "Ilorin South", "Ilorin West", "Irepodun", "Isin", "Kaiama", "Moro", "Offa", "Oke-Ero", "Oyun", "Pategi"];
    }
    else if(a==="Lagos")
    {
        var arr=["Choose your Local Government", "Agege", "Ajeromi-Ifelodun", "Alimosho", "Amuwo-Odofin", "Apapa", "Badagry", "Epe", "Eti-Osa", "Ibeju/Lekki", "Ifako-Ijaye", "Ikeja", "Ikorodu", "Kosofe", "Lagos Island", "Lagos Mainland", "Mushin", "Ojo", "Oshodi-Isolo", "Shomolu", "Surulere"];
    }
    else if(a==="Nasarawa")
    {
        var arr=["Choose your Local Government", "Akwanga", "Awe", "Doma", "Karu", "Keana", "Keffi", "Kokona", "Lafia", "Nasarawa", "Nasarawa-Eggon", "Obi", "Toto", "Wamba"];
    }
    else if(a==="Niger")
    {
        var arr=["Choose your Local Government", "Agaie", "Agwara", "Bida", "Borgu", "Bosso", "Chanchaga", "Edati", "Gbako", "Gurara", "Katcha", "Kontagora", "Lapai", "Lavun", "Magama", "Mariga", "Mashegu", "Mokwa", "Munya", "Paikoro", "Rafi", "Rijau", "Shiroro", "Suleja", "Tafa", "Wushishi"];
    }
    else if(a==="Ogun")
    {
        var arr=["Choose your Local Government", "Abeokuta North", "Abeokuta South", "Ado-Odo/Ota", "Ewekoro", "Ifo", "Ijebu East", "Ijebu North", "Ijebu North East", "Ijebu Ode", "Ikenne", "Imeko-Afon", "Ipokia", "Obafemi-Owode", "Odeda", "Odogbolu", "Ogun Waterside", "Remo North", "Shagamu", "Yewa North", "Yewa South"];
    }
    else if(a==="Ondo")
    {
        var arr=["Choose your Local Government", "Akoko North East", "Akoko North West", "Akoko South East", "Akoko South West", "Akure North", "Akure South", "Ese-Odo", "Idanre", "Ifedore", "Ilaje", "Ile-Oluji", "Irele", "Odigbo", "Okeigbo", "Okitipupa", "Ondo East", "Ondo West", "Ose", "Owo"];
    }
    else if(a==="Osun")
    {
        var arr=["Choose your Local Government", "Aiyedade", "Aiyedire", "Atakumosa East", "Atakumosa West", "Boluwaduro", "Boripe", "Ede North", "Ede South", "Egbedore", "Ejigbo", "Ife Central", "Ife East", "Ife North", "Ife South", "Ifedayo", "Ifelodun", "Ila", "Ilesha East", "Ilesha West", "Irepodun", "Irewole", "Isokan", "Iwo", "Obokun", "Odo-Otin", "Ola-Oluwa", "Olorunda", "Oriade", "Orolu", "Osogbo"];
    }
    else if(a==="Oyo")
    {
        var arr=["Choose your Local Government", "Afijio", "Akinyele", "Atiba", "Atisbo", "Egbeda", "Ibadan North", "Ibadan North West", "Ibadan North-East", "Ibadan South East", "Ibadan South West", "Ibarapa Central", "Ibarapa East", "Ibarapa North", "Ido", "Irepo", "Iseyin", "Itesiwaju", "Iwajowa", "Kajola", "Lagelu", "Ogbmosho South", "Ogbomoso North", "Ogo Oluwa", "Olorunsogo", "Oluyole", "Ona-Ara", "Orelope", "Ori Ire", "Oyo East", "Oyo West", "Saki East", "Saki West", "Surulere"];
    }
    else if(a==="Plateau")
    {
        var arr=["Choose your Local Government", "Barikin Ladi", "Bassa", "Bokkos", "Jos East", "Jos North", "Jos South", "Kanam", "Kanke", "Langtang North", "Langtang South", "Mangu", "Mikang", "Pankshin", "Qua'an Pan", "Riyom", "Shendam", "Wase"];
    }
    else if(a==="Rivers")
    {
        var arr=["Choose your Local Government", "Abua/Odual", "Ahoada East", "Ahoada West", "Akuku Toru", "Andoni", "Asari-Toru", "Bonny", "Degema", "Eleme", "Emohua", "Etche", "Gokana", "Ikwerre", "Khana", "Obia/Akpor", "Ogba/Egbema/Ndoni", "Ogu/Bolo", "Okrika", "Omumma", "Opobo/Nkoro", "Oyigbo", "Port-Harcourt", "Tai"];
    }
    else if(a==="Sokoto")
    {
        var arr=["Choose your Local Government", "Binji", "Bodinga", "Dange-shuni", "Gada", "Goronyo", "Gudu", "Gwadabawa", "Illela", "Isa", "kebbe", "Kware", "Rabah", "Sabon birni", "Shagari", "Silame", "Sokoto North", "Sokoto South", "Tambuwal", "Tangaza", "Tureta", "Wamako", "Wurno", "Yabo"];
    }
    else if(a==="Taraba")
    {
        var arr=["Choose your Local Government", "Ardo-kola", "Bali", "Donga", "Gashaka", "Gassol", "Ibi", "Jalingo", "Karim-Lamido", "Kurmi", "Lau", "Sardauna", "Takum", "Ussa", "Wukari", "Yorro", "Zing"];
    }
    else if(a==="Yobe")
    {
        var arr=["Choose your Local Government", "Bade", "Bursari", "Damaturu", "Fika", "Fune", "Geidam", "Gujba", "Gulani", "Jakusko", "Karasuwa", "Machina", "Nangere", "Nguru", "Potiskum", "Tarmuwa", "Yunusari", "Yusufari"];
    }
    else if(a==="Zamfara")
    {
        var arr=["Choose your Local Government", "Anka", "Bakura", "Birnin Magaji", "Bukkuyum", "Bungudu", "Gummi", "Gusau", "Kaura Namoda", "Maradun", "Maru", "Shinkafi", "Talata Mafara", "Tsafe", "Zurmi"];
    }
     else if(a==="")
    {
        var arr=["Not Chosen"];
    }

    var string="";

    for(i=0;i<arr.length;i++)
    {
        string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
    }
    document.getElementById("select_lga").innerHTML=string;
}

