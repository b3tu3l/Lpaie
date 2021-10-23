const int led1 = 5;
void setup() {
  pinMode(led1, OUTPUT);
}

void loop() {
  digitalWrite(led1, HIGH);   // Led ON
  delay(1000/10);              // pausa 1 seg
  digitalWrite(led1, LOW);    // Led OFF
  delay(1000);              // pausa 1seg
}
