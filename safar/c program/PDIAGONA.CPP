#include<stdio.h>
#include<conio.h>
void main()
{
clrscr();
int a[20][20],n,i,j;
printf("\n Enter the size of square matrix");
scanf("%d",&n);
printf("Enter the %d * %d elements",n,n);
for(i=0;i<n;i++)
{
for(j=0;j<n;j++)
{
scanf("%d",&a[i][j]);
}
}
printf("the orginal matrix\n");
for(i=0;i<n;i++)
{
for(j=0;j<n;j++)
{
printf("%d\t",a[i][j]);
}
printf("\n");
}
printf("the diagonal matrix\n");
for(i=0;i<n;i++)
{
for(j=0;j<n;j++)
{
if(i==j)
{
printf("%d \t",a[i][j]);
}
}
}
getch();
}
