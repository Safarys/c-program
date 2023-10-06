#include<stdio.h>
#include<conio.h>
void main()
{
clrscr();
int n,f=1,i;
printf("Enter the number");
scanf("%d",&n);
for(i=1;i<n;i++)
{
f=f+f*i;

}
printf("factorial of a number is %d",f);
getch();
}
