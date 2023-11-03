n=input('Enter the number')
def rev(n):
    if len(n)==0:
        return ''
    else:
        return n[-1]+rev(n[:-1])
print(rev(n))    
        
