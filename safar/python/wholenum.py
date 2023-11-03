n=int(input("Enter n limit"))
def sum(n):
    if not n:
        return 0
    else:
        return n+sum(n-1)
print(sum(n))
