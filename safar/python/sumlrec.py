n=int(input('Enter the list of numbers '))
def fibb(n):
    s=0
    if n==0:
        return 0
    elif n==1:
        return 1
    else:
        return fibb(n-1)+fibb(n-2)
print("The fibbonci will be ",fibb(n-1))
