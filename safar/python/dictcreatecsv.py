##import csv
##fields=['Name','Branch','id']
##rows=[['Mahi','MCA','001'],
##      ['Shalini','WEB DEVELOPER','002'],
##      ['Safar','MCA','003']]
##
##filename="friends.csv"
##
##with open(filename,'w') as csvfile:
##    csvwriter=csv.writer(csvfile)
##    csvwriter.writerow(fields)
##    csvwriter.writerows(rows)
##print('Created')

import csv
fields=['Name','Branch','id']
rows=[{'Name':'Mahi','Branch':'MCA','id':'001'},
      {'Name':'Shalini','Branch':'Web Developer','id':'002'},
      {'Name':'Safar','Branch':'MCA','id':'003'}]

filename="friend.csv"

with open(filename,'w') as csvfile:
    writer=csv.DictWriter(csvfile,fieldnames=fields)
    writer.writeheader()
    writer.writerows(rows)
print('Created')
