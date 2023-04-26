import pandas as pd
import matplotlib.pyplot as plt

# Read the CSV file into a pandas dataframe
df = pd.read_csv('SensorData.csv')

# Set the x-axis and y-axis values from the dataframe
x = df['Date']
y = df['Correct']
y1 = df['Wrong']

# Create a line graph using matplotlib
plt.plot(x, y, color='green',label='Correct Posture')
plt.plot(x, y1, color='red',label='Wrong Posture')
plt.scatter(x, y, marker='o', color='green')
plt.scatter(x, y1, marker='o', color='red')
plt.legend()

# Add labels and title
plt.xlabel('Time in MilliSeconds')
plt.ylabel('Count')
plt.title('Count of Correct and Incorrect Positions')

plt.gcf().set_size_inches(10, 8)
plt.savefig('output.png', dpi=100)
# Show the graph
plt.show()