int x2 =0;
int x3= 0;
int v = 0;
int v0 = 500;
int deltav0 = 100;
void setup() {
  Serial.begin(115200);
  pinMode(11,OUTPUT);
  digitalWrite(11,LOW);
}

void loop() {
    x2 = 1023 - analogRead(A2);
    x3 = 1023 - analogRead(A3);
    v0 = x2;
    deltav0 = x3;
    v = analogRead(A0);
    if(v > v0 + deltav0 || v > 1010){
        digitalWrite(11,HIGH);
    }
    if(v < v0 - deltav0 || v < 10){
        digitalWrite(11,LOW);
    }
    Serial.println(v);    
 //   delay(1);
}
