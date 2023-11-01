def even(num):
    for rev in num:
        if(rev==237):
            break
        elif not rev%2:
            print(rev)
n=input('Enter  numbers ')
r=list(map(int,n.split()))
even(r)


                    
