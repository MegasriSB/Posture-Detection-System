int flexs = A0;
int data = 0;
int buzzer = 5;
int Correct_count = 0;
int Wrong_count =0;
int count=0;
int cnt = 0;

void setup() {
  Serial.begin(9600);
  pinMode(flexs, INPUT);
  pinMode(buzzer,OUTPUT);
}
void loop() {
  data = analogRead(flexs);
  // Serial.print("Data value=");
  Serial.print(data);
  Serial.print("-");
  if (data < 40 || data > 45){
    Wrong_count++;
    count++;
    if(count>10){
      analogWrite(buzzer,150);
      count = 0;
    }
  }
  if( data >= 40 && data <= 45){
    Correct_count++;
    cnt++;
    if(cnt>20){
      analogWrite(buzzer,150);
      cnt = 0;
    }
    else{  
    analogWrite(buzzer,0);
    }
  }

  Serial.print(Wrong_count);
  Serial.print("-");
  // Serial.print("  Correct_count=");
  Serial.print(Correct_count);
  Serial.println();
  delay(1000);
}
