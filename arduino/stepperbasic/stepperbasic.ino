
int xPins[] = {10,12,11,13};
int xindex = 0;
int deltaT = 20;

void setup() {
  pinMode(xPins[0],OUTPUT);
  pinMode(xPins[1],OUTPUT);
  pinMode(xPins[2],OUTPUT);
  pinMode(xPins[3],OUTPUT);

  digitalWrite(xPins[0],LOW);
  digitalWrite(xPins[1],LOW);
  digitalWrite(xPins[2],LOW);
  digitalWrite(xPins[3],LOW);
}

void loop() {
  
  doTheThing('a');
  doTheThing('a');
  doTheThing('a');
  doTheThing('a');
  doTheThing('a');
  doTheThing('a');
  doTheThing('a');
  doTheThing('a');
  doTheThing('s');
  doTheThing('s');
  doTheThing('s');
  doTheThing('s');
  doTheThing('s');
  doTheThing('s');
  doTheThing('s');
  doTheThing('s');
  
}


void doTheThing(char localCommand){
  if(localCommand == 'a'){
      xindex++;
      digitalWrite(xPins[xindex%4],HIGH);
      delay(deltaT);
      digitalWrite(xPins[xindex%4],LOW);  
      delay(deltaT);
  }
  if(localCommand == 's'){
      xindex--;
      digitalWrite(xPins[xindex%4],HIGH);
      delay(deltaT);
      digitalWrite(xPins[xindex%4],LOW);  
      delay(deltaT);
  }

}
