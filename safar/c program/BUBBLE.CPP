#include<stdio.h>
#include<conio.h>
void main()
{
clrscr();
int temp,n,i,j,a[20],b[20];
printf("Enter the size of array");
scanf("%d",&n);
printf("Enter the Elements");
for(i=0;i<n;i++)
{
scanf("%d",&a[i]);
}
printf("The Elements are:\n");
for(i=0;i<n;i++)
{
printf("%d ",a[i]);
}
printf("the Bubble sort is \n");
for(i=0;i<n;i++)
{
for(j=i+1;j<n;j++)
{
if(a[i]>=a[j])
{
temp=a[i];
a[i]=a[j];
a[j]=temp;
}
}
}
printf("The Elements are:\n");
for(i=0;i<n;i++)
{
printf("%d ",a[i]);
}
getch();
}