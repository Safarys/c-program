with open("file.txt","r") as file:
    f1=file.read().split()
    f1.sort(key=len,reverse=False)
    print(f1)
    print("12 DIGIT VALUE")
    content=list(filter(lambda i:i if len(i)==12 else "",f1))
    print(content)
    
    
