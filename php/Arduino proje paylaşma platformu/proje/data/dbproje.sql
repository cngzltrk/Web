-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 May 2016, 15:08:20
-- Sunucu sürümü: 10.1.13-MariaDB
-- PHP Sürümü: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `dbproje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projeler`
--

CREATE TABLE `projeler` (
  `proje_id` int(11) NOT NULL,
  `baslik` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `yapilisi` varchar(1500) COLLATE utf8_turkish_ci NOT NULL,
  `kod` varchar(1500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `projeler`
--

INSERT INTO `projeler` (`proje_id`, `baslik`, `yapilisi`, `kod`) VALUES
(1, 'Oda Sıcaklığını koruma(TERMOSTAT)', 'Projem oda sıcaklığını sabit bir değerde tutmayla ilgili . Projemde kullandığım LM35 ile ortam sıcaklığı arduinonun Analog girişi tarafından işlenerek girdiğimiz nominal değerin altına düşerse LAMBA üstüne çıkarsa Fan çalışıyor.\r\nResimlerde gördüğünüz gibi bir adet Pet şişenin içerisine Isı sensörünü yerleştirdim. Bu ısı sensörü yerine Nemi de ölçen DHT serisi bir sensör yerleştirirseniz Bu projemizin programına bir kaç komut ekleyerek inanılmaz şeyler yaptırabilirsiniz.\r\nKullanılan Malzemeler\r\n40 wattlık bir ampul\r\nFan\r\nArdunio UNO\r\nLM35(Sıcaklık Sensörü)\r\n16*2’lik bir LCD Ekran\r\n1 adet 2li Role\r\nBreadBoard', ' #include \r\n    LiquidCrystal lcd(12, 11, 5, 4, 3, 2);\r\n    float sicaklik;\r\n    float analoggerilim;\r\n    int sicaklikpin=1;\r\n    byte ampul=8;\r\n    byte fan=9;\r\n    float ortalama=0;\r\n    float ortalama2=0;\r\n    float hesap=0;\r\n    float yeni_sicaklik=0;\r\n    void setup ()\r\n    {\r\n    digitalWrite(ampul,LOW);\r\n    digitalWrite(fan,LOW);\r\n    Serial.begin(9600);\r\n    pinMode(ampul,OUTPUT);\r\n    pinMode(fan,OUTPUT);\r\n    lcd.begin(16, 2);\r\n    analoggerilim = analogRead(sicaklikpin);\r\n    analoggerilim = (analoggerilim/1023)*5000;\r\n    sicaklik = analoggerilim /10,0;\r\n     \r\n    }\r\n     \r\n    void loop ()\r\n    {\r\n    analoggerilim = analogRead(sicaklikpin);\r\n    analoggerilim = (analoggerilim/1023)*5000;\r\n    yeni_sicaklik = analoggerilim /10,0;\r\n    hesap=yeni_sicaklik*0.1+sicaklik*0.9;\r\n    sicaklik=hesap;\r\n     \r\n    Serial.print(“Sicaklik Degeri: “);\r\n    Serial.print (sicaklik);\r\n    Serial.println (” derece”);\r\n    lcd.setCursor(0,0);\r\n    lcd.print(“Sicaklik= “);\r\n    lcd.print(sicaklik);\r\n    delay (500);\r\n    lcd.clear();\r\n    if(sicaklik<30) { lcd.setCursor(0,0); lcd.print(“Sicaklik= “); lcd.print(sicaklik); lcd.setCursor(0,1); lcd.print(“Ampul Isitiyor..”); digitalWrite(fan,LOW); digitalWrite(ampul,HIGH); } else if(sicaklik>32)\r\n    {\r\n    lcd.setCursor(0,0);\r\n    lcd.print(“Sicaklik= “);\r\n    lcd.print(sicaklik);\r\n    lcd.setCursor(0,1);\r\n    lcd.print(“Fan Sogutuyor..”);\r\n    digitalWrite(fan,HIGH);\r\n    digitalWrite(ampul,LOW);\r\n    }\r\n    }\r\n    '),
(2, 'Arduino ile Kondansatör Kapasitesini Ölçme', 'Sizler için çalışmalarımda kullanmak için geliştirmeye başladığım bir projemden bahsedeceğim. Bu projemde kondansatör, direnç, bobin gibi bütün devre elemanlarının ölçülmesini gerçekleştirmek için üzerinde çalışmaya başladığım bir proje.\r\nBu yazımız sadece kondasatör ölçümüyle ilgili olacak .\r\nProjemizde arduinoyu kullanarak matematiksel hesaplamalarla kondansatörün sarj-deşarj hesaplamalarını yaparak kondansatörün değerini hesaplayacağız.\r\nKullanılan Malzemeler\r\n1 adet 10kohm Direnç\r\n1 adet 220ohm Direnç\r\nArdunio UNO\r\nBreadBoard', '  */\r\n     \r\n    Bunun için bilmeniz gereken formül  \r\n     *    TC = R * C\r\n     *\r\n     *    TC = saniye cinsinden zaman\r\n     *    R = direnç\r\n     *    C = Kondansatör FARAD cinsinden  (1 microfarad (ufd) = .0000001 farad = 10^-6 farad ) \r\n     *  220 ohm direnç desarjPin \r\n     * \r\n     */\r\n     \r\n    #define analogPin      0          // analog pin voltaj hesaplamak icin\r\n    #define sarjPin      13      \r\n    #define desarjPin   11       \r\n    #define direncdegeri  10000.0F   // 10Kohm luk direnc icin F degeri float icin kullaniyor\r\n                                       \r\n     \r\n    unsigned long baslangiczamani;\r\n    unsigned long olculenzaman;\r\n    float mikroFarad;               \r\n    float nanoFarad;\r\n     \r\n    void setup(){\r\n      pinMode(sarjPin, OUTPUT);     \r\n      digitalWrite(sarjPin, LOW);  \r\n     \r\n      Serial.begin(9600);            \r\n    }\r\n     \r\n    void loop(){\r\n      digitalWrite(sarjPin, HIGH); \r\n      baslangiczamani= millis();\r\n     \r\n      while(analogRead(analogPin) < 648){ //1023 degerinde 647 degeri 63.2% sarj grafiginde olcum icin kullaniyor. } elapsedTime= millis() - baslangiczamani; microFarads = ((float)olculenzaman/ direncdegeri ) * 1000; Serial.print(olculenzaman); Serial.print(" mS "); if (microFarads > 1){ Serial.print((long)mikroFarad); Serial.println(" mikroFarad"); } else { nanoFarad = mikroFarad * 1000.0; Serial.print((long)nanoFarad); Serial.println(" nanoFarad"); } /* desarj olmasi dicharge the capacitor */ digitalWrite(sarjPin,'),
(3, 'Engelden Kaçan Robot Yapımı', 'Bu proje yapabileceğiniz en zevkli projelerden birisidir. Engelden kaçıcı robot için gerekli olan sadece bir adet ultrasonik sensor ve iki adet dc motor yada 360 derece donebilen servo motordur .Resimde bir proje için kullanmak istediğim Wall-E oyuncağının\r\nPaletler için kullandığım servo motorlar servo motorlar normal servo motorlardır, bu motorları elden geçirerek 360 derece dondurmeniz mümkün \r\nPaletlere servo motorları yerleştirdikten sonra artık ultrasonik sensör için kullanacağımız servonun yerleştirilmesine geldi\r\nDaha sonra bataryanın yerleştirilmesi ve üzerine arduino pro mini yada kullanmak istediğiniz herhangi bir arduinonun yerleştirilmesi\r\n\r\nArduino Pro Mini (robotun küçük olabilmesi için )\r\n1 adet 180 derecelik servo (normal servo)\r\n2 adet DC motor yada 360 derecelik servo motor (countinous servo)\r\n1 adet batarya (ben 3.6 voltluk sarjlı batarya kullandım)\r\n1 adet Ultrasonik sensör', '#include  //include Servo library\r\n         \r\n        const int RForward = 0;\r\n        const int RBackward = 180;\r\n        const int LForward = 113;\r\n        const int LBackward = 0;\r\n        const int RNeutral = 73;\r\n        const int LNeutral = 92; //constants for motor speed\r\n        const int trigpin = 13;\r\n        const int echopin = 12;\r\n        const int dangerThresh = 10; //threshold for obstacles (in cm)\r\n        int leftDistance, rightDistance; //distances on either side\r\n        Servo panMotor;\r\n        Servo leftMotor;\r\n        Servo rightMotor; //declare motors\r\n        long duration; //time it takes to recieve PING))) signal\r\n         \r\n        void setup()\r\n        {\r\n        rightMotor.attach(11);\r\n        leftMotor.attach(9);\r\n        panMotor.attach(10); //attach motors to proper pins\r\n        panMotor.write(90); //set PING))) pan to center\r\n        }\r\n         \r\n        void loop()\r\n        {\r\n        int distanceFwd = ping();\r\n        if (distanceFwd>dangerThresh) //if path is clear\r\n        {\r\n        leftMotor.write(LForward);\r\n        rightMotor.write(RForward); //move forward\r\n        }\r\n        else //if path is blocked\r\n        {\r\n        leftMotor.write(LNeutral);\r\n        rightMotor.write(RNeutral);\r\n        panMotor.write(0);\r\n        delay(500);\r\n        rightDistance = ping(); //scan to the right\r\n        delay(500);\r\n        panMotor.write(180);\r\n        delay(700);\r\n        leftDistance = ping(); //scan to the left\r\n        delay(500);\r\n      '),
(4, 'Güneş Takip Eden Güneş Paneli Yapımı', 'Herhangi bir projede güneş enerjisi kullanmak istediniz, ama kullandığımız güneş panelleri eğer ışık dik gelirse elektirik üretimi maksimum seviyede olur. Güneşin dik gelmediği durumlarda elektrik üretimi az olmaktadır bunun çözümü ise güneş panelinin güneşi her zaman görebilmesi demektir. Bu projemizde güneş paneli ışığın en şiddetli olduğu yere doğru yönlenmektedir. \r\nArduino ya ihtiyacımız vardır. Resimde gördüğünüz gibi iki adet sermo motoru üst üste silikon ile yapıştırdım. Alttaki servo motor yatay düzlemde hareket etmesini sağlıyor üstteki servo motorumuz ise dikey düzlemde hareketi sağlıyor. Devremiz Aşağıdaki gibidir.\r\nServo motorları üst üste yapıştırarak x vve y düzleminde hareket etmesini sağladım . Yukarda gördüğünüz devre şemasında kullanılan dirençler 10K dır .\r\nTuvalet kağıdı rulosuna siyah bant ile kapladım daha sonra da bunu CDnin üzerine yapıştırdım.\r\nGördüğünüz gibi arduino ile denemesi gerçekleştiriyorum daha sonra bunun arduinosuz sadece atmel işlemciyle kullanacağım.\r\nLDRların arasına plaka yerleştirerek daha kararlı olmasını sağladım .\r\n4 adet LDR Kullandım ama LDR ların arasına aliminyum plaket koydum. Nasıl olduğunu alttaki resime bakarak anlayabilirsiniz. Bunu yapmamızdaki amaç daha kararlı bir proje gerçekleştirebilmek içindir. Alttaki resimde gördüğünüz iki kondansötör ise 7805 ile gerçekleştirdiğim gerilim regülatörüdür.Gerçekleştirdiğim projeyi ARDUİNO UNOyu farklı projelerde kullanabilmek için sadece atmega328 işlemcisini standalone modda kulla', '      #include  // include Servo library\r\n             \r\n            Servo horizontal; // horizontal servo\r\n            int servoh = 90; // stand horizontal servo\r\n             \r\n            Servo vertical; // vertical servo\r\n            int servov = 90; // stand vertical servo\r\n             \r\n            // LDR pin connections\r\n            // name = analogpin;\r\n            int ldrlt = 0; //LDR top left A0\r\n            int ldrrt = 1; //LDR top rigt A1\r\n            int ldrld = 2; //LDR down left A2\r\n            int ldrrd = 3; //ldr down rigt A3\r\n             \r\n            void setup()\r\n            {\r\n            Serial.begin(9600);\r\n            // servo connections\r\n            // name.attacht(pin);\r\n            horizontal.attach(9, 1000, 2000);\r\n            vertical.attach(10, 1000, 2000);\r\n            }\r\n             \r\n            void loop()\r\n            {\r\n            int lt = analogRead(ldrlt); // top left\r\n            int rt = analogRead(ldrrt); // top right\r\n            int ld = analogRead(ldrld); // down left\r\n            int rd = analogRead(ldrrd); // down rigt\r\n             \r\n            int dtime = 20;//change moving speed\r\n            int tol =10; // change tolerance between LDR`s\r\n             \r\n            int avt = (lt + rt) / 2; // average value top\r\n            int avd = (ld + rd) / 2; // average value down\r\n            int avl = (lt + ld) / 2; // average value left\r\n            int avr = (rt + rd) / 2; // average value right\r\n             \r\n            int dv');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `projeler`
--
ALTER TABLE `projeler`
  ADD PRIMARY KEY (`proje_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `projeler`
--
ALTER TABLE `projeler`
  MODIFY `proje_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
