int x0 = 0;
int x1 = 0;
int x2 = 0;
int x3 = 0;

void setup() {
  Serial.begin(115200);
  pinMode(10,OUTPUT);
  pinMode(11,OUTPUT);
  pinMode(12,OUTPUT);
  pinMode(13,OUTPUT);
  digitalWrite(10,LOW);
  digitalWrite(11,LOW);
  digitalWrite(12,LOW);
  digitalWrite(13,LOW);

}

void loop() {
    x0 = analogRead(A0);
    x1 = analogRead(A1);
    x2 = analogRead(A2);
    x3 = analogRead(A3);
    Serial.print(x0-1010);    
    Serial.print(",");
    Serial.print(x1-1010);    
    Serial.print(",");
    Serial.print(x2-1010);    
    Serial.print(",");
    Serial.println(x3-1010);    
    if(x0 < 1000){
      digitalWrite(11,LOW);
      digitalWrite(12,LOW);
      digitalWrite(13,LOW);
      digitalWrite(10,HIGH);
    }
    else{
      digitalWrite(10,LOW);
    }
delay(1);
    if(x1 < 1000){
      digitalWrite(12,LOW);
      digitalWrite(13,LOW);
      digitalWrite(10,LOW);
      digitalWrite(11,HIGH);
    }
    else{
      digitalWrite(11,LOW);
    }
delay(1);
    if(x2 < 1000){
      digitalWrite(11,LOW);
      digitalWrite(13,LOW);
      digitalWrite(10,LOW);
      digitalWrite(12,HIGH);
    }
    else{
      digitalWrite(12,LOW);
    }
delay(1);
    if(x3 < 1000){
      digitalWrite(10,LOW);
      digitalWrite(11,LOW);
      digitalWrite(12,LOW);
      digitalWrite(13,HIGH);
    }
    else{
      digitalWrite(13,LOW);
    }

delay(1);

}
