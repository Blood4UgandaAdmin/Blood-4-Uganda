var citiesByState = {
    central: ["Buikwe", "Bukomansimbi", "Butambala", "Buvuma", "Gomba", "Kalangala", "Kalungu", "Kampala",
    "Kayunga", "Kiboga", "Kyankwanzi", "Luwero", "Lwengo", "Lyantonde", "Masaka", "Mityana",
    "Mpigi", "Mubende", "Mukono", "Nakaseke", "Nakasongola", "Rakai", "Sembabule", "Wakiso"
  ],
          eastern: ["Budaka", "Bududa", "Bugiri", "Buhweju", "Bukedea", "Bukwo", "Bulambuli", "Bulisa",
           "Busia", "Butaleja", "Buyende", "Iganga", "Jinja","Kotido", 
          "Kaabong", "Kaberamaido", "Kagadi", "Kakumiro", "Kalaki", "Kaliro", "Kamuli", "Kapchorwa", "Katakwi","Kibuku", "Kiryandongo",
          "Kitagwenda", "Kumi", "Kween", "Luuka",  "Manafwa", "Mayuge", "Mbale",
          "Moroto",  "Namayingo", "Namisindwa", "Namutumba", "Napak",
          "Pallisa","Rubanda", "Serere","Sironko", "Soroti", "Tororo"
  ],
          northern: ["Adjumani", "Agago", "Alebtong", "Amolatar", "Amudat", "Amuru", "Apac", "Arua", "Dokolo", "Gulu",
          "Kaabong", "Kitgum", "Koboko", "Lamwo", "Lira", "Maracha", "Moroto", "Moyo",
          "Nakapiripirit", "Namayingo", "Napak", "Nebbi", "Ngora", "Nwoya", "Otuke", "Oyam", "Pader",
          "Yumbe", "Zombo"
        ],
          western: ["Buhweju", "Buliisa", "Bundibugyo", "Bushenyi", "Hoima", "Ibanda", "Isingiro", "Kabale", "Kabarole",
          "Kamwenge", "Kanungu", "Kasese", "Kibaale", "Kiruhura",  "Kisoro", "Kyegegwa", "Lyantonde",
          "Masindi", "Mbarara", "Mitooma", "Ntoroko", "Ntungamo", "Rubirizi", "Rukungiri", "Sheema"],
    }
    function makeSubmenu(value) {
    if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
    else {
    var citiesOptions = "";
    for(cityId in citiesByState[value]) {
    citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
    }
    document.getElementById("citySelect").innerHTML = citiesOptions;
    }
    }
    function displaySelected() { var country = document.getElementById("countrySelect").value;
    var city = document.getElementById("citySelect").value;
    alert(country+"\n"+city);
    }
    function resetSelection() {
    document.getElementById("countrySelect").selectedIndex = 0;
    document.getElementById("citySelect").selectedIndex = 0;
    }