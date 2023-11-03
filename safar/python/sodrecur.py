n=int(input('Enter the number'))
def sum(n):
    if not(n//1):
        return n
    else:
        return n%10+sum(n//10)
print(sum(n))    
