
    <div class="container ">
 
         <div class="row">
        	<div class="col-md-1">
            </div>
            <div class="col-md-10 orta">
            	
                <div class="panel panel-default">
                	<div class="panel-heading"><h4 >Oda Sıcaklığını koruma(TERMOSTAT)</h4></div>
                	<div class="panel-body">
                        <p class="yazi">Projem oda sıcaklığını sabit bir değerde tutmayla ilgili . Projemde kullandığım LM35 ile ortam sıcaklığı arduinonun Analog girişi tarafından işlenerek girdiğimiz nominal değerin altına düşerse LAMBA üstüne çıkarsa Fan çalışıyor.
Resimlerde gördüğünüz gibi bir adet Pet şişenin içerisine Isı sensörünü yerleştirdim. Bu ısı sensörü yerine Nemi de ölçen DHT serisi bir sensör yerleştirirseniz Bu projemizin programına bir kaç komut ekleyerek inanılmaz şeyler yaptırabilirsiniz.
Kullanılan Malzemeler
40 wattlık bir ampul
Fan
Ardunio UNO
LM35(Sıcaklık Sensörü)
16*2’lik bir LCD Ekran
1 adet 2li Role
BreadBoard
                        </p>
                        
                        
                   
                        
                        <div class="panel panel-info ">
                        
                        
                        
                            <pre>
                             #include 
    LiquidCrystal lcd(12, 11, 5, 4, 3, 2);
    float sicaklik;
    float analoggerilim;
    int sicaklikpin=1;
    byte ampul=8;
    byte fan=9;
    float ortalama=0;
    float ortalama2=0;
    float hesap=0;
    float yeni_sicaklik=0;
    void setup ()
    {
    digitalWrite(ampul,LOW);
    digitalWrite(fan,LOW);
    Serial.begin(9600);
    pinMode(ampul,OUTPUT);
    pinMode(fan,OUTPUT);
    lcd.begin(16, 2);
    analoggerilim = analogRead(sicaklikpin);
    analoggerilim = (analoggerilim/1023)*5000;
    sicaklik = analoggerilim /10,0;
     
    }
     
    void loop ()
    {
    analoggerilim = analogRead(sicaklikpin);
    analoggerilim = (analoggerilim/1023)*5000;
    yeni_sicaklik = analoggerilim /10,0;
    hesap=yeni_sicaklik*0.1+sicaklik*0.9;
    sicaklik=hesap;
     
    Serial.print(“Sicaklik Degeri: “);
    Serial.print (sicaklik);
    Serial.println (” derece”);
    lcd.setCursor(0,0);
    lcd.print(“Sicaklik= “);
    lcd.print(sicaklik);
    delay (500);
    lcd.clear();
    if(sicaklik<30) { lcd.setCursor(0,0); lcd.print(“Sicaklik= “); lcd.print(sicaklik); lcd.setCursor(0,1); lcd.print(“Ampul Isitiyor..”); digitalWrite(fan,LOW); digitalWrite(ampul,HIGH); } else if(sicaklik>32)
    {
    lcd.setCursor(0,0);
    lcd.print(“Sicaklik= “);
    lcd.print(sicaklik);
    lcd.setCursor(0,1);
    lcd.print(“Fan Sogutuyor..”);
    digitalWrite(fan,HIGH);
    digitalWrite(ampul,LOW);
    }
    }
    
                            </pre>      
                        </div>
                     
                    </div>      
                </div>    	
            </div>   
         </div>            
    </div>
    