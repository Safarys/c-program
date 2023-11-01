def rev_name(name):
    for word in name[::-1]:
        print(word,end=' ')
name=input("Enter Your name ").split()
rev_name(name)
