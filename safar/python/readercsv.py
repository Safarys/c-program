##import csv
##with open('friends.csv',mode='r') as file:
##    csvFile=csv.reader(file)
##    for lines in csvFile:
##        print(lines)

import csv
filename="friend.csv"
with open(filename,'r') as data:
    for line in csv.reader(data):
        print(line)
