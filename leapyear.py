n=int(input("Year "))
r=[i for i in range(2023,n) if(i%400==0 or(i%4==0 and i%100!=0))]
print("Leap Year : ",r)
