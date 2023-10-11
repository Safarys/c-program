l=input('Enter the string ')
li=l.split(',')
print(li)
num=int(input("Enter the word Limit"))
for i in li:
    if(len(i)>num):
        print(i)
