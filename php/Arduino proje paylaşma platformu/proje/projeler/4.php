
    <div class="container ">
 
         <div class="row">
        	<div class="col-md-1">
            </div>
            <div class="col-md-10 orta">
            	
                <div class="panel panel-default">
                	<div class="panel-heading"><h4 >Güneş Takip Eden Güneş Paneli Yapımı</h4></div>
                	<div class="panel-body">
                        <p class="yazi">Herhangi bir projede güneş enerjisi kullanmak istediniz, ama kullandığımız güneş panelleri eğer ışık dik gelirse elektirik üretimi maksimum seviyede olur. Güneşin dik gelmediği durumlarda elektrik üretimi az olmaktadır bunun çözümü ise güneş panelinin güneşi her zaman görebilmesi demektir. Bu projemizde güneş paneli ışığın en şiddetli olduğu yere doğru yönlenmektedir. 
Arduino ya ihtiyacımız vardır. Resimde gördüğünüz gibi iki adet sermo motoru üst üste silikon ile yapıştırdım. Alttaki servo motor yatay düzlemde hareket etmesini sağlıyor üstteki servo motorumuz ise dikey düzlemde hareketi sağlıyor. Devremiz Aşağıdaki gibidir.
Servo motorları üst üste yapıştırarak x vve y düzleminde hareket etmesini sağladım . Yukarda gördüğünüz devre şemasında kullanılan dirençler 10K dır .
Tuvalet kağıdı rulosuna siyah bant ile kapladım daha sonra da bunu CDnin üzerine yapıştırdım.
Gördüğünüz gibi arduino ile denemesi gerçekleştiriyorum daha sonra bunun arduinosuz sadece atmel işlemciyle kullanacağım.
LDRların arasına plaka yerleştirerek daha kararlı olmasını sağladım .
4 adet LDR Kullandım ama LDR ların arasına aliminyum plaket koydum. Nasıl olduğunu alttaki resime bakarak anlayabilirsiniz. Bunu yapmamızdaki amaç daha kararlı bir proje gerçekleştirebilmek içindir. Alttaki resimde gördüğünüz iki kondansötör ise 7805 ile gerçekleştirdiğim gerilim regülatörüdür.Gerçekleştirdiğim projeyi ARDUİNO UNOyu farklı projelerde kullanabilmek için sadece atmega328 işlemcisini standalone modda kulla
                        </p>
                        
                        
                   
                        
                        <div class="panel panel-info ">
                        
                        
                        
                            <pre>
                                  #include  // include Servo library
             
            Servo horizontal; // horizontal servo
            int servoh = 90; // stand horizontal servo
             
            Servo vertical; // vertical servo
            int servov = 90; // stand vertical servo
             
            // LDR pin connections
            // name = analogpin;
            int ldrlt = 0; //LDR top left A0
            int ldrrt = 1; //LDR top rigt A1
            int ldrld = 2; //LDR down left A2
            int ldrrd = 3; //ldr down rigt A3
             
            void setup()
            {
            Serial.begin(9600);
            // servo connections
            // name.attacht(pin);
            horizontal.attach(9, 1000, 2000);
            vertical.attach(10, 1000, 2000);
            }
             
            void loop()
            {
            int lt = analogRead(ldrlt); // top left
            int rt = analogRead(ldrrt); // top right
            int ld = analogRead(ldrld); // down left
            int rd = analogRead(ldrrd); // down rigt
             
            int dtime = 20;//change moving speed
            int tol =10; // change tolerance between LDR`s
             
            int avt = (lt + rt) / 2; // average value top
            int avd = (ld + rd) / 2; // average value down
            int avl = (lt + ld) / 2; // average value left
            int avr = (rt + rd) / 2; // average value right
             
            int dv
                            </pre>      
                        </div>
                     
                    </div>      
                </div>    	
            </div>   
         </div>            
    </div>
    