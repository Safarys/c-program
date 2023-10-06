#include<stdio.h>
#include<conio.h>
void main()
{
int a,stack[20],i,n,top,item;
printf("Enter the size of stack");
scanf("%d",&n);
top=-1;
do{
printf("Enter the option \n1.push\n 2.pop\n 3.display\n 4. Exit \n");
scanf("%d",&a);
switch(a)
{
case 1:if(top==n-1)
{
printf("stack is overflow");
}
else
{
printf("Enter the element");
scanf("%d",&item);
top++;
stack[top]=item;
printf("the pushed stack is %d",item);
}
break;
case 2:if(top==-1)
{
printf("Stack is underflow");
}
else
{
printf("enter the element to be popped");
scanf("%d",&item);
item=stack[top];
top--;
printf("the popped element is %d",item);
}
break;
case 3:
printf("Enter the elements \n");
for(i=0;i<=top;i++)
{
printf("%d \t",stack[i]);
}
printf("\n");
break;
case 4:exit();

default:printf("Enter a valid option");
break;
}
}
while(1);
getch();
}
