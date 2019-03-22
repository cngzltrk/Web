
    <div class="container ">
 
         <div class="row">
        	<div class="col-md-1">
            </div>
            <div class="col-md-10 orta">
            	
                <div class="panel panel-default">
                	<div class="panel-heading"><h4 >Engelden Kaçan Robot Yapımı</h4></div>
                	<div class="panel-body">
                        <p class="yazi">Bu proje yapabileceğiniz en zevkli projelerden birisidir. Engelden kaçıcı robot için gerekli olan sadece bir adet ultrasonik sensor ve iki adet dc motor yada 360 derece donebilen servo motordur .Resimde bir proje için kullanmak istediğim Wall-E oyuncağının
Paletler için kullandığım servo motorlar servo motorlar normal servo motorlardır, bu motorları elden geçirerek 360 derece dondurmeniz mümkün 
Paletlere servo motorları yerleştirdikten sonra artık ultrasonik sensör için kullanacağımız servonun yerleştirilmesine geldi
Daha sonra bataryanın yerleştirilmesi ve üzerine arduino pro mini yada kullanmak istediğiniz herhangi bir arduinonun yerleştirilmesi

Arduino Pro Mini (robotun küçük olabilmesi için )
1 adet 180 derecelik servo (normal servo)
2 adet DC motor yada 360 derecelik servo motor (countinous servo)
1 adet batarya (ben 3.6 voltluk sarjlı batarya kullandım)
1 adet Ultrasonik sensör
                        </p>
                        
                        
                   
                        
                        <div class="panel panel-info ">
                        
                        
                        
                            <pre>
                            #include  //include Servo library
         
        const int RForward = 0;
        const int RBackward = 180;
        const int LForward = 113;
        const int LBackward = 0;
        const int RNeutral = 73;
        const int LNeutral = 92; //constants for motor speed
        const int trigpin = 13;
        const int echopin = 12;
        const int dangerThresh = 10; //threshold for obstacles (in cm)
        int leftDistance, rightDistance; //distances on either side
        Servo panMotor;
        Servo leftMotor;
        Servo rightMotor; //declare motors
        long duration; //time it takes to recieve PING))) signal
         
        void setup()
        {
        rightMotor.attach(11);
        leftMotor.attach(9);
        panMotor.attach(10); //attach motors to proper pins
        panMotor.write(90); //set PING))) pan to center
        }
         
        void loop()
        {
        int distanceFwd = ping();
        if (distanceFwd>dangerThresh) //if path is clear
        {
        leftMotor.write(LForward);
        rightMotor.write(RForward); //move forward
        }
        else //if path is blocked
        {
        leftMotor.write(LNeutral);
        rightMotor.write(RNeutral);
        panMotor.write(0);
        delay(500);
        rightDistance = ping(); //scan to the right
        delay(500);
        panMotor.write(180);
        delay(700);
        leftDistance = ping(); //scan to the left
        delay(500);
      
                            </pre>      
                        </div>
                     
                    </div>      
                </div>    	
            </div>   
         </div>            
    </div>
    