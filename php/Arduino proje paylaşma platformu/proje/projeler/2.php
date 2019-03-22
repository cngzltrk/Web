
    <div class="container ">
 
         <div class="row">
        	<div class="col-md-1">
            </div>
            <div class="col-md-10 orta">
            	
                <div class="panel panel-default">
                	<div class="panel-heading"><h4 >Arduino ile Kondansatör Kapasitesini Ölçme</h4></div>
                	<div class="panel-body">
                        <p class="yazi">Sizler için çalışmalarımda kullanmak için geliştirmeye başladığım bir projemden bahsedeceğim. Bu projemde kondansatör, direnç, bobin gibi bütün devre elemanlarının ölçülmesini gerçekleştirmek için üzerinde çalışmaya başladığım bir proje.
Bu yazımız sadece kondasatör ölçümüyle ilgili olacak .
Projemizde arduinoyu kullanarak matematiksel hesaplamalarla kondansatörün sarj-deşarj hesaplamalarını yaparak kondansatörün değerini hesaplayacağız.
Kullanılan Malzemeler
1 adet 10kohm Direnç
1 adet 220ohm Direnç
Ardunio UNO
BreadBoard
                        </p>
                        
                        
                   
                        
                        <div class="panel panel-info ">
                        
                        
                        
                            <pre>
                              */
     
    Bunun için bilmeniz gereken formül  
     *    TC = R * C
     *
     *    TC = saniye cinsinden zaman
     *    R = direnç
     *    C = Kondansatör FARAD cinsinden  (1 microfarad (ufd) = .0000001 farad = 10^-6 farad ) 
     *  220 ohm direnç desarjPin 
     * 
     */
     
    #define analogPin      0          // analog pin voltaj hesaplamak icin
    #define sarjPin      13      
    #define desarjPin   11       
    #define direncdegeri  10000.0F   // 10Kohm luk direnc icin F degeri float icin kullaniyor
                                       
     
    unsigned long baslangiczamani;
    unsigned long olculenzaman;
    float mikroFarad;               
    float nanoFarad;
     
    void setup(){
      pinMode(sarjPin, OUTPUT);     
      digitalWrite(sarjPin, LOW);  
     
      Serial.begin(9600);            
    }
     
    void loop(){
      digitalWrite(sarjPin, HIGH); 
      baslangiczamani= millis();
     
      while(analogRead(analogPin) < 648){ //1023 degerinde 647 degeri 63.2% sarj grafiginde olcum icin kullaniyor. } elapsedTime= millis() - baslangiczamani; microFarads = ((float)olculenzaman/ direncdegeri ) * 1000; Serial.print(olculenzaman); Serial.print(" mS "); if (microFarads > 1){ Serial.print((long)mikroFarad); Serial.println(" mikroFarad"); } else { nanoFarad = mikroFarad * 1000.0; Serial.print((long)nanoFarad); Serial.println(" nanoFarad"); } /* desarj olmasi dicharge the capacitor */ digitalWrite(sarjPin,
                            </pre>      
                        </div>
                     
                    </div>      
                </div>    	
            </div>   
         </div>            
    </div>
    