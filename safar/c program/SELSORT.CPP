#include<stdio.h>
#include<conio.h>
void main()
{
clrscr();
int small,s,temp,n,i,j,a[20],b[20];
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
printf("\n the Selection sort is \n");
for(i=0;i<n;i++)
{
small=a[i];

for(j=i;j<n;j++)
{
if(a[j]<=small)
{
small=a[j];
s=j;
}
}
temp=a[s];
a[s]=a[i];
a[i]=temp;
printf("%d ",a[i]);
}
getch();
}