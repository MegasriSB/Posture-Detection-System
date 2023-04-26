from datetime import datetime, timedelta
import serial
import time
import csv

with open('SensorData.csv', mode='w',newline='') as sensor_file:
    sensor_writer = csv.writer(sensor_file, delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)
    sensor_writer.writerow(["Date","Value","Wrong","Correct"])


com = "COM5"
baud = 9600

x = serial.Serial(com, baud, timeout = 0.1)
while x.isOpen() == True:
    time.sleep(1)
    receiveddata = str(x.readline().decode('utf-8')).rstrip()
    tempvaluelist = receiveddata.split('-')
    print(tempvaluelist)
    ddata=tempvaluelist[0]
    if ddata is not '':
        wdata=tempvaluelist[1]
        cdata=tempvaluelist[2]
        #  print(ddata)
        #  print(wdata)
        #  print(cdata)
        with open('SensorData.csv', mode='a') as sensor_file:
             sensor_writer = csv.writer(sensor_file, delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)
             sensor_writer.writerow([datetime.now().strftime('%f')[:-3],int(ddata),int(wdata),int(cdata)])



# global flag
#     global value
#     global data
#     if (flag == False):
#         flag = True
#         global arduino

#         # Get the POST value and check for '.csv' in that value

#         data = request.form['filename']
#         if (data[-4:] == ".csv"):
#             data = data
#         else:
#             data += ".csv"
#         print(data)

#         # Create a Serial object with port,baudrate same as in arduino ino file

#         arduino = serial.Serial(port='COM3', baudrate=9600, timeout=1)
#         if (arduino.isOpen() == False):
#             arduino.open()
#         global f

#         # Open csv file in append mode

#         f = open('input/'+data, 'a+', newline='')
#         w = csv.writer(f, delimiter=',')
#         time.sleep(2)

#         # Open file to get No. of Rows

#         file = open('input/'+data)
#         reader = csv.reader(file)
#         lines = len(list(reader))

#         # Add header row to that file if lines '0'

#         if (lines == 0):
#             writer = csv.DictWriter(f, fieldnames=["Datetime", "Watts"])
#             writer.writeheader()

#         while (flag == True and f.closed == False and arduino.isOpen() == True):

#             # Get the serial output using readline() and convert it to string
#             value = (arduino.readline().decode('utf-8').rstrip())

#             # Set the values in (datetime,value) format
#             value = datetime.now().strftime(
#                 '%d-%m-%Y - %H:%M:%S.%f')[:-3]+","+str(value)

#             # Write value into csv file
#             if (f.closed == False):
#                 w.writerow(value.split(','))
#             print(value)
#     else:
#         value = "staerrport"
#     return render_template("form.html", value=value)