# kirpykla
PHP and MySQL based web page for making reservations at Haidresser

* Paskirtis
Puslapis skirtas kirpyklos klientams rezervuoti apsilankymo laiką, o kirpyklos darbuotojams kontroliuoti rezervacijas ir gauti informaciją apie kliento apsilankymų skaičių. 

* Naudojimas
I Klientas gali pasirinkti iš dviejų Meniu punktų:

  1) Klientams->Rezervuoti laiką
    Atsidariusiame lange reikia:
      - suvesti savo vardą ir telefono Nr, kurie vėliau bus jo atpažinimo duomenys
      - suvesti planuojamo apsilankymo menesį ir dieną - tik tuomet atsiras tos dienos laisvų laikų sąrašas
      - iš atsiradusio laikų sąrašo pasirinkti tinkamą laiką ir spausti 'Rezervuoti'
    Jeigu klientas rezervuojasi pirmą kartą - jam sukuriamas įrašas duombazės klientų lentelėje ir atskiras įrašas rezervacijų lentelėje su kliento id iš klientų lentelės
    Jeigu klientas yra buvęs kirpykloje, bet neturi aktyvių rezervacijų - jam priskiriamas įrašas klientų lentelėje
    Jeigu klientas turi aktyvią rezervaciją - išmetamas pranešimas, kad rezrvuotis galima tik vieną karta iki apsilankymo.
    Sėkmingai užsirezervavus:
        - klientui dumbazėje pridedamas vienas tašas 
        - klientui parodoma, kiek liko dar kartų rezervuotis, kad gautų 10% nuolaidą
        - klientui parodoma informacija apie jo uzsakytą laiką su galimybe iš karto tą rezervaciją atšaukti.
  
  2) Klientams->Keisti rezervaciją
    Atsidariusiame lange reikia:
      - suvesti savo vardą ir tel. nr, kuriais buvo atliekama rezervacija
      - jeigu tokie duomeny yra klientų lentelėje - parodoma rezervacijos informacija.
      - klientas gali atsaukti rezervacija paspaudes 'Atsaukti'
      - Atšaukus rezervaciją klientas gali vėl sukurti naują rezervaciją.

II Personalas gali pasirinkti iš vieno Meniu punkto:

  1) Personalui->Klientų rezervacijos
    - Jeigu Personalo atstovas (toliau 'Kirpėja') prie puslapio prisijungia pirmą kartą - reikia suvesti vartotojo vartą ir slaptažodį.
    
    - Kolkas yra trys vartotojai, kurių vardai ir slaptažodžiai: ('Marija' => '123','Urte' => '456','Adele' => '789')
    - Prisijungus, atsidaro langas, kuriame rodomi visos aktyvios rezervacijos surikiuotos pagal daugiausiai apsilankymų turintį klientą
    
    - Rezervacijų sąrašą galima filtruoti pasirenkant Kliento vardą, rezervacijos periodo pradžią ir pabaigą\n
    - Rodomų Rezervacijų skaičių galima pasirinkti iš 10 (default), 25 ir 50
    - Prie kiekvieno įrašo yra mygtukas 'Atšaukti', kurį paspaudus ta kliento registracija pašalinama (klientas nepašalinmas)
    - Lentelėje yra stulpelis 'Nuolaida', kuriame kas penktą kliento apsilankymą atsiranda mygtukas parodantis Kirpėjai, kad klientui reikia suteikti 10% nuolaidą
    - Jeigu duomenų yra daugiau nei telpa lentelėje - apačioje atiranda puslapių mygtukai
    
  2) Kirpėjai pabaigus darbą galima atsijungti paspaudus Meniu nuordą 'Atsijungti' arba uždarius naršyklę. 
