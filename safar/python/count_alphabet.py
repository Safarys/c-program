nm=input("Enter the Names separated with commas ")
nmlist=nm.split(",")
c=0
for name in nmlist:
    if(name[0]=='A'):
        c+=1
print("Count start with alphabet 'A' is ",c)        
