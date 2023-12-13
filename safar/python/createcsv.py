import csv
fields=['Name','Branch','id']
rows=[['Mahi','MCA','001'],
      ['Shalini','WEB DEVELOPER','002'],
      ['Safar','MCA','003']]

filename="friends.csv"

with open(filename,'w') as csvfile:
    csvwriter=csv.writer(csvfile)
    csvwriter.writerow(fields)
    csvwriter.writerows(rows)
print('Created')
