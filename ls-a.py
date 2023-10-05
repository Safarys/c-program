lrr=[-1,20,3,-6,3,-5]
print(lrr)
for nm in lrr:
    if nm>=0:
        print(nm)

l=input('Enter the numbers separate with commas')
ls=l.split(',')
result=[int(l)*int(l) for l in ls]
print(result)

w="Hello"
lr=list(w)
r=[i for i in lr if i.lower()=='a'or i.lower()=='e' or i.lower()=='i' or i.lower=='o' or i.lower=='u']
print("Given word is ",w)
print('The list containing vowels from a given word is ',r)

