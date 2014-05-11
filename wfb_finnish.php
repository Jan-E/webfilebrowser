// ---- Local settings -----------------------------------------------------
// Finnish parameters (Petteri HIETAVIRTA)

$dateformat = "d.m.Y H:i:s";

$charset = "iso-8859-1";

$messages = array(
   "rlm1"=>"Sis&auml;&auml;nkirjautuminen vaaditaan",
   "trc0"=>"Tyhj&auml;",
   "trc1"=>"Roskakori tyhjennetty",
   "trc2"=>"Roskakori ei tyhjentynyt kokonaan",
   "trc3"=>"Roskakoria ei voida tyhjent&auml;&auml;",
   "trc9"=>"Tyhjenn&auml; roskakori",
   "rst0"=>"Palauta",
   "rst1"=>"Ep&auml;kelpo palautettavan tiedoston nimi",
   "rst2"=>"Palautus toimii vain roskakorissa",
   "rst3"=>"Kaikki valitut tiedostot palautettu",
   "rst4"=>"Tiedostoa nimelt&auml;&auml;n %VAR1% ei voida palauttaa",
   "rst5"=>"Palautettavalla tiedostolla ei nime&auml;",
   "rst9"=>"Palauta <b>valittu</b> tiedosto",
   "mov0"=>"Siirr&auml;",
   "mov1"=>"Ep&auml;kelpo siirrett&auml;v&auml;n tiedoston tai kansion nimi",
   "mov2"=>"Ep&auml;kelpo siirrett&auml;v&auml;n tiedoston tai kansion kohde",
   "mov3"=>"Kaikki valitut tiedostot tai kansiot siirretty kohteeseen %VAR1%",
   "mov4"=>"Tiedostoa tai kansiota %VAR1% ei voida siirt&auml;&auml; kohteeseen %VAR2%",
   "mov5"=>"Kohdekansio %VAR1% ei ole kelpaava kansio",
   "mov6"=>"Ei nime&auml; tai kohdekansiota siirrett&auml;ville tiedostoille",
   "mov9"=>"Siirr&auml; <b>valitut</b> tiedostot tai kansiot <b>valittuun</b> kansioon",
   "ren0"=>"Nime&auml; uudelleen",
   "ren1"=>"Ep&auml;kelpo tiedoston nimi uudelleenimett&auml;v&auml;ksi",
   "ren2"=>"Ep&auml;kelpo uusi nimi",
   "ren3"=>"Tiedosto %VAR1% nimetty %VAR2%-nimiseksi",
   "ren4"=>"Tiedostoa %VAR1% ei voida uudelleen nimet&auml; %VAR2%-nimiseksi",
   "ren5"=>"Ei nime&auml; tai uutta nime&auml; uudelleen nimett&auml;v&auml;lle tiedostolle",
   "ren9"=>"Nime&auml; uudelleen <b>valittu</b> tiedosto tai kansio nimell&auml;",
   "cpy0"=>"Kopioi",
   "cpy1"=>"Ep&auml;kelpo kopiotavan tiedoston nimi",
   "cpy2"=>"Ep&auml;kelpo kopionimi kopiotavalle tiedostolle",
   "cpy3"=>"Tiedosto %VAR1% kopioitiin %VAR2%-nimiseksi",
   "cpy4"=>"Tiedostoa %VAR1% ei voitu kopioida %VAR2%-nimiseksi",
   "cpy5"=>"Hakemistoja ei voida kopioda",
   "cpy6"=>"Nime&auml; tai kopionime&auml; ei ole annettu",
   "cpy9"=>"Kopio <b>valittu</b> tiedosto paikkaan",
   "als0"=>"Alias-nimi",
   "als1"=>"Ep&auml;kelpo nimi aliaksen kohdetiedostolle",
   "als2"=>"Tiedostolle %VAR1% tehtiin alias",
   "als3"=>"Tiedostolle %VAR1% ei voitu tehd&auml; aliasta",
   "als4"=>"Tiedostolta %VAR1% poistettiin alias",
   "als5"=>"Tiedostolla %VAR1% ei ollut aliasta",
   "als6"=>"Hakemistoille ei voida tehd&auml; aliaksia",
   "als7"=>"Ei nime&auml; aliaksen kohdetiedostolle",
   "als9"=>"Tee <b>valitulle</b> tiedostelle alias nimelt&auml;&auml;n",
   "cre0"=>"Luo tiedosto",
   "cre1"=>"Ep&auml;kelpo nimi luotavalle tiedostolle",
   "cre2"=>"Tiedosto %VAR1% luotiin",
   "cre3"=>"Tiedostoa %VAR1% ei voitu luoda",
   "cre4"=>"Luotavalle tiedostolle ei ole nime&auml;",
   "cre9"=>"Luo uusi tiedosto",
   "sav1"=>"Ep&auml;kelpo nimi tallennettavalle tiedostolle",
   "sav2"=>"Tiedosto %VAR1% ei voitu tallentaa",
   "sav3"=>"Ei nime&auml; tallennettavalle tiedostolle",
   "sav4"=>"Tallenna",
   "sav5"=>"Peru",
   "sav6"=>"DOS/WINDOWS-formaatti",
   "sav7"=>"UNIX-formaatti",
   "del0"=>"Poista",
   "del1"=>"Ep&auml;kelpo nimi poistettavalle tiedostolle",
   "del4"=>"Kaikki valitut tiedostot siirrettiin roskiin",
   "del5"=>"Tiedostoa %VAR1% ei voitu siirt&auml;&auml; roskiin",
   "del6"=>"Poistettavalle tiedostolle ei ole nime&auml;",
   "del7"=>"Hakemisto %VAR1% ei ole tiedosto",
   "del9"=>"Poista <b>valittu</b> kansio",
   "fup0"=>"L&auml;het&auml;",
   "fup1"=>"Ep&auml;kelpo nimi l&auml;hetett&auml;v&auml;lle tiedostolle",
   "fup2"=>"Tiedoston %VAR1% l&auml;hetys onnistui",
   "fup3"=>"Tiedoston %VAR1% l&auml;hetys keskeytyi",
   "fup4"=>"L&auml;hetett&auml;v&auml;lle tiedostolle ei ole nime&auml;",
   "fup9"=>"L&auml;het&auml; tiedosto",
   "uup0"=>"L&auml;het&auml; URL",
   "uup1"=>"Ep&auml;kelpo l&auml;hetett&auml;v&auml; URL",
   "uup2"=>"URL %VAR1% l&auml;hetetty nimelle %VAR2%",
   "uup3"=>"%VAR1% ei voitu l&auml;hett&auml;&auml;",
   "uup4"=>"Ei URL:a l&auml;hetett&auml;v&auml;ksi",
   "uup9"=>"L&auml;het&auml; tiedosto URL:sta",
   "mkd0"=>"Luo kansio",
   "mkd1"=>"Ep&auml;kelpo nimi luotavalle kansiolle",
   "mkd2"=>"Kansio %VAR1% luotiin",
   "mkd3"=>"Kansiota %VAR1% ei voitu luoda",
   "mkd4"=>"Luotavalle kansiolle ei ole nime&auml;",
   "mkd9"=>"Luo uusi kansio",
   "edt1"=>"Ep&auml;kelpo nimi muokattavalle tiedostolle",
   "edt2"=>"Ep&auml;kelpo nimi n&auml;ytett&auml;v&auml;lle tiedostolle",
   "edt3"=>"Ep&auml;kelpo nimen tarkenne muokattavalle tiedostolle",
   "edt4"=>"Ep&auml;kelpo nimen tarkenne n&auml;ytett&auml;v&auml;lle tiedostolle",
   "edt5"=>"Tiedostoa %VAR1% ei voitu lukea",
   "edt6"=>"Muokattavalle tiedostolle ei ole nime&auml;",
   "edt7"=>"N&auml;ytett&auml;v&auml;lle tiedostolle ei ole nime&auml;",
   "edt8"=>"Muokkaa tiedostoa",
   "edt9"=>"N&auml;yt&auml; tiedosto",
   "edt10"=>"E", // Edit action
   "edt11"=>"V", // View action
   "edt12"=>"Palaa takaisin tiedostolistaukseen",
   "dir1"=>"Kansiota ei voitu lukea",
   "dir2"=>"P&auml;&auml;hakemisto",
   "dir3"=>"Ylempi hakemisto",
   "dir4"=>"Roskis",
   "dir5"=>"Alihakemisto",
   "tab1"=>"Valinta",
   "tab2"=>"Mihin",
   "tab3"=>"Nimi",
   "tab4"=>"Koko",
   "tab5"=>"P&auml;iv&auml;ys",
   "tab6"=>"Oikeudet",
   "tab7"=>"Omistaja",
   "tab8"=>"Ryhm&auml;",
   "tab9"=>"Vain<br>luku",
   "tab10"=>"Toiminto",
   "tab11"=>"Hakemistot",
   "tab12"=>"Tiedostot",
   "tab13"=>"kt",
   "tab14"=>"Kyll&auml;",
   "act1"=>"Tuntematon tai sopimaton toiminto",
   "act2"=>"Oletko varma" ,
   "act3"=>"Tiedostoa tai hakemistoa ei ole valittu",
   "act4"=>"Tiedostoa ei ole valittu",
   "act5"=>"Ei uutta nime&auml; uudelleennimett&auml;v&auml;lle tiedostolle",
   "act6"=>"Ei kopionime&auml; kopioitavalle tiedostolle",
   "act7"=>"Liian monta tiedostoa tai kansiota valittu", // ADDED
   "act8"=>"Valitse vain tiedostot", // ADDED
   "act9"=>"Valitse hakemisto", // ADDED
   "sch1"=>"Etsi tiedostoja kyseisest&auml; hakemistosta",
   "sch2"=>"Etsi",
   "sch3"=>"Ei tiedostoja hakuehdolla: %VAR1%",
   "sch4"=>"Tulos hakuehdolla: %VAR1%",
   "sch5"=>"Haettu hakemisto",
   "sch6"=>"Ei etsint&auml;maskia",
   "sch7"=>"K&auml;yt&auml; s&auml;&auml;nn&ouml;nmukaisia lausekkeita",
   "sch8"=>"Siirry <b>valitun</b> tiedoston hakemistoon",
   "sch9"=>"Siirry hakemistoon",
   "dwn1"=>"D", // Download action
   "dwn2"=>"Ep&auml;kelpo nimi noudettavalle tiedostolle",
   "dwn3"=>"Tiedostoa ei voida noutaa",
   "dwn4"=>"Noudettavalle tiedostolle ei ole nime&auml;",
   "dwn5"=>"Nouda tiedosto",
   "inf1"=>"Lajittele tiedostot nimen mukaan",
   "inf2"=>"Lajittele tiedostot koon mukaan",
   "inf3"=>"Lajittele tiedostot p&auml;iv&auml;m&auml;&auml;r&auml;n mukaan",
   "inf4"=>"Siirry hakemistoon",
   "inf5"=>"N&auml;yt&auml; tiedosto",
   "inf6"=>"Siirry p&auml;&auml;hakemistoon",
   "inf7"=>"Siirry ylemm&auml;lle hakemistolle",
   "inf8"=>"Siirry roskiin",
   "rmd0"=>"Poista",
   "rmd1"=>"Ep&auml;kelpo nimi poistettavalle kansiolle",
   "rmd2"=>"Kansio %VAR1% poistettu", // ADDED
   "rmd3"=>"Kansiota %VAR1% ei voitu poistaa (ei ole tyhj&auml; ?)", 
   "rmd4"=>"Poistettavalle kansiolle ei ole nime&auml;", 
   "rmd5"=>"Tiedosto %VAR1% ei ole kansio",
   "rmd9"=>"Poista <b>valittu</b> kansio"
);